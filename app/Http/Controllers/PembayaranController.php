<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\Kwitansi;
use App\Models\Tunggakan;
use App\Models\Pengaturan;
use Midtrans\Config;
use Midtrans\Snap;

class PembayaranController extends Controller
{
    public function create()
    {
        $siswas = Auth::user()->siswa;
        $selectedSiswa = $siswas->count() === 1 ? $siswas->first() : null;

        return view('pembayaran.create', [
            'siswas' => $siswas,
            'selectedSiswa' => $selectedSiswa
        ]);
    }

    public function store(Request $request)
    {
        $jumlah = 700000;
        $request->merge(['jumlah' => $jumlah]);

        $useMidtrans = Pengaturan::isMidtransActive();
        $metode = $useMidtrans ? 'midtrans' : 'transfer';
        $request->merge(['metode' => $metode]);

        $request->validate([
            'id_siswa' => 'required|exists:siswa,id_siswa',
            'bulan' => 'required|array|min:1',
            'bulan.*' => 'in:Januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember',
            'tahun' => 'required|integer|min:2024|max:2030',
            'jumlah' => 'required|numeric|min:0',
            'metode' => 'required|in:transfer,langsung,midtrans',
            'bukti_transfer' => 'nullable|file|mimes:jpeg,png,pdf|max:2048'
        ]);

        $buktiTransferPath = $request->file('bukti_transfer')?->store('bukti_transfer', 'public');

        $failedMonths = [];
        $successMonths = [];

        foreach ($request->bulan as $bulan) {
            $existing = Pembayaran::where('id_siswa', $request->id_siswa)
                ->where('bulan', $bulan)->where('tahun', $request->tahun)->first();

            if ($existing) {
                $failedMonths[] = $bulan;
                continue;
            }

            Pembayaran::create([
                'id_siswa' => $request->id_siswa,
                'bulan' => $bulan,
                'tahun' => $request->tahun,
                'jumlah' => $request->jumlah,
                'metode' => $metode,
                'bukti_transfer' => $buktiTransferPath,
                'status' => 'menunggu',
                'id_wali' => Auth::id(),
                'is_midtrans' => $useMidtrans
            ]);

            $successMonths[] = $bulan;
        }

        if ($successMonths) {
            $message = "Berhasil membuat pembayaran untuk bulan: " . implode(', ', $successMonths);
            if ($failedMonths) {
                $message .= ". Gagal untuk bulan: " . implode(', ', $failedMonths);
            }
            return redirect()->route('pembayaran.create')->with('success', $message);
        }

        return redirect()->back()->with('error', 'Tidak ada pembayaran yang berhasil dibuat.');
    }

    public function riwayat()
    {
        $user = Auth::user();
        $siswaIds = $user->siswa->pluck('id_siswa');

        $pembayarans = Pembayaran::whereIn('id_siswa', $siswaIds)
            ->with('siswa')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('pembayaran.riwayat', compact('pembayarans'));
    }

    public function edit($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);

        if (!in_array($pembayaran->status, ['menunggu', 'ditolak'])) {
            return redirect()->route('pembayaran.riwayat')->with('error', 'Pembayaran tidak dapat diedit.');
        }

        return view('pembayaran.edit', compact('pembayaran'));
    }

    public function destroy($id)
    {
        try {
            $pembayaran = Pembayaran::findOrFail($id);

            if (!in_array($pembayaran->status, ['menunggu', 'ditolak'])) {
                return response()->json(['success' => false, 'message' => 'Pembayaran tidak dapat dihapus.'], 400);
            }

            if ($pembayaran->bukti_transfer) {
                Storage::delete($pembayaran->bukti_transfer);
            }

            $pembayaran->delete();

            return response()->json(['success' => true, 'message' => 'Pembayaran berhasil dihapus.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);

        if (!in_array($pembayaran->status, ['menunggu', 'ditolak'])) {
            return redirect()->route('pembayaran.riwayat')->with('error', 'Pembayaran tidak dapat diubah.');
        }

        $validated = $request->validate([
            'id_siswa' => 'required|exists:siswa,id_siswa',
            'bulan' => 'required|array',
            'tahun' => 'required|integer|min:2020|max:' . (date('Y') + 1),
            'bukti_transfer' => 'nullable|file|max:2048|mimes:jpg,jpeg,png,pdf'
        ]);

        $pembayaran->bulan = $validated['bulan'];
        $pembayaran->tahun = $validated['tahun'];
        $pembayaran->status = 'menunggu';

        if ($request->hasFile('bukti_transfer')) {
            if ($pembayaran->bukti_transfer) {
                Storage::delete($pembayaran->bukti_transfer);
            }
            $pembayaran->bukti_transfer = $request->file('bukti_transfer')->store('bukti_transfer', 'public');
        }

        $pembayaran->save();

        return redirect()->route('pembayaran.riwayat')->with('success', 'Pembayaran berhasil diperbarui.');
    }
    public function snapToken(Request $request)
    {
        $pembayaran = Pembayaran::findOrFail($request->id);

        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        $params = [
            'transaction_details' => [
                'order_id' => 'ORDER-' . $pembayaran->id_pembayaran . '-' . time(),
                'gross_amount' => $pembayaran->jumlah,
            ],
            'customer_details' => [
                'first_name' => $pembayaran->siswa->nama_siswa,
                'email' => $pembayaran->siswa->wali->email,
            ],
            'callbacks' => [
                'finish' => route('pembayaran.riwayat')
            ]
        ];

        $snapToken = Snap::getSnapToken($params);

        // Simpan order_id dan flag midtrans
        $pembayaran->update([
            'midtrans_order_id' => $params['transaction_details']['order_id'],
            'midtrans_transaction_status' => 'pending',
            'is_midtrans' => true,
        ]);

        return response()->json(['token' => $snapToken]);
    }


    //PEMBAYARAN MANUAL
    public function createManual()
    {
        $siswa = Siswa::orderBy('nama_siswa')->get();
        // Di dalam method createManual() & createUpload()
        $defaultJumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 0;

        return view('pembayaran.manual_create', compact('siswa', 'defaultJumlahSPP'));
    }

    public function storeManual(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_siswa' => 'required|exists:siswa,id_siswa',
            'bulan' => 'required|array|min:1',
            'bulan.*' => 'string',
            'tahun' => 'required|integer|min:2000|max:2100',
            'jumlah' => 'required|numeric|min:0', // Tetap validasi untuk memastikan total di form
            'catatan' => 'nullable|string',
        ]);
        // =======================================================
        // BLOK VALIDASI ANTI-DUPLIKAT (INI PERBAIKANNYA)
        // =======================================================
        $bulanYangDipilih = $request->bulan;
        $tahunYangDipilih = $request->tahun;
        $konflikBulan = [];

        foreach ($bulanYangDipilih as $bulan) {
            $pembayaranSudahAda = Pembayaran::where('id_siswa', $request->id_siswa)
                ->whereJsonContains('bulan', $bulan)
                ->where('tahun', $tahunYangDipilih)
                ->whereIn('status', ['menunggu', 'diterima']) // Cek jika status 'menunggu' ATAU 'diterima'
                ->exists();

            if ($pembayaranSudahAda) {
                $konflikBulan[] = $bulan;
            }
        }

        // Jika ada bulan yang konflik, hentikan proses dan kirim pesan error
        if (!empty($konflikBulan)) {
            $pesanError = 'Pembayaran untuk bulan ' . implode(', ', $konflikBulan) . ' sudah ada atau sedang diproses.';
            // Kembali ke halaman sebelumnya dengan pesan error
            return back()->with('error', $pesanError)->withInput();
        }
        // =======================================================
        // AKHIR BLOK VALIDASI
        // =======================================================

        // Lanjutkan proses penyimpanan jika tidak ada konflik...

        // Ambil jumlah SPP per bulan dari tabel pengaturans
        $jumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 700000;

        // Validasi bahwa jumlah di form sesuai dengan perhitungan (opsional, untuk keamanan)
        $expectedTotal = count($request->bulan) * $jumlahSPP;
        if ($request->jumlah != $expectedTotal) {
            return back()->withErrors(['jumlah' => 'Total jumlah tidak sesuai dengan perhitungan.']);
        }

        // Simpan pembayaran untuk setiap bulan
        foreach ($request->bulan as $bulan) {
            $pembayaran = Pembayaran::create([
                'id_siswa' => $request->id_siswa,
                'bulan' => $bulan,
                'tahun' => $request->tahun,
                'jumlah' => $jumlahSPP, // Gunakan jumlahSPP per bulan, bukan $request->jumlah
                'metode' => 'langsung',
                'status' => 'diterima',
                'verified_by' => Auth::id(),
                'tanggal_verifikasi' => now(),
                'catatan' => $request->catatan,
                'is_midtrans' => false,
            ]);

            // Langsung buat kwitansi karena statusnya sudah 'diterima'
            (new KwitansiController)->generateAndSave($pembayaran);
        }

        return redirect()->route('pembayaran.manual.create')->with('success', 'Pembayaran manual berhasil disimpan.');
    }


    //PEMBAYARAN UPLOAD
    public function createUpload()
    {
        $defaultJumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 0;
        // Ambil siswa yang terkait dengan wali murid yang login
        $siswa = Siswa::where('id_wali', Auth::id())->orderBy('nama_siswa')->get();
        $nomorRekening = Pengaturan::where('key', 'nomor_rekening')->value('value');

        return view('pembayaran.upload_transfer', compact('defaultJumlahSPP', 'siswa', 'nomorRekening'));
    }

    public function storeUpload(Request $request)
    {
        $request->validate([
            'id_siswa' => 'required|exists:siswa,id_siswa',
            'bulan' => 'required|array|min:1',
            'bulan.*' => 'string',
            'tahun' => 'required|integer|min:2000|max:2100',
            'jumlah' => 'required|numeric|min:0',
            'bukti_transfer' => 'required|image|mimes:jpeg,png,jpg,pdf|max:2048',
            'catatan' => 'nullable|string',
        ]);

        // Validasi bahwa siswa terkait dengan wali murid yang login
        $siswa = Siswa::where('id_wali', Auth::id())->where('id_siswa', $request->id_siswa)->first();
        if (!$siswa) {
            return back()->withErrors(['id_siswa' => 'Siswa tidak valid atau tidak terkait dengan akun Anda.'])->withInput();
        }

        // =======================================================
        // TAMBAHKAN BLOK VALIDASI ANTI-DUPLIKAT DI SINI
        // =======================================================
        $bulanYangDipilih = $request->bulan;
        $tahunYangDipilih = $request->tahun;
        $konflikBulan = [];

        foreach ($bulanYangDipilih as $bulan) {
            $pembayaranSudahAda = Pembayaran::where('id_siswa', $request->id_siswa)
                ->whereJsonContains('bulan', $bulan)
                ->where('tahun', $tahunYangDipilih)
                ->whereIn('status', ['menunggu', 'diterima']) // Cek jika status 'menunggu' ATAU 'diterima'
                ->exists();

            if ($pembayaranSudahAda) {
                $konflikBulan[] = $bulan;
            }
        }

        if (!empty($konflikBulan)) {
            $pesanError = 'Pembayaran untuk bulan ' . implode(', ', $konflikBulan) . ' sudah ada atau sedang diproses.';
            // Kembali ke halaman sebelumnya dengan pesan error
            return back()->with('error', $pesanError)->withInput();
        }
        // =======================================================
        // AKHIR BLOK VALIDASI
        // =======================================================

        // Lanjutkan proses jika tidak ada konflik...
        $jumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 700000;
        $expectedTotal = count($request->bulan) * $jumlahSPP;
        if ($request->jumlah != $expectedTotal) {
            return back()->withErrors(['jumlah' => 'Total jumlah tidak sesuai dengan perhitungan.'])->withInput();
        }

        $path = $request->file('bukti_transfer')->store('bukti-transfer', 'public');

        foreach ($request->bulan as $bulan) {
            Pembayaran::create([
                'id_siswa' => $request->id_siswa,
                'bulan' => $bulan,
                'tahun' => $request->tahun,
                'jumlah' => $jumlahSPP,
                'bukti_transfer' => $path,
                'metode' => 'transfer',
                'status' => 'menunggu',
                'catatan' => $request->catatan,
                'is_midtrans' => false,
            ]);
        }

        return redirect()->route('riwayat.index')->with('success', 'Bukti transfer berhasil diunggah dan menunggu verifikasi.');
    }


    //PENGECEKAN PEMBAYARAN
    public function indexVerifikasi()
    {
        $pembayaranMenunggu = Pembayaran::where('status', 'menunggu')
            ->where('metode', 'transfer')
            ->with('siswa')
            ->get();
        return view('bendahara.verifikasi', compact('pembayaranMenunggu'));
    }

    public function updateVerifikasi(Request $request, $id)
    {
        $request->validate(['status' => 'required|in:diterima,ditolak']);

        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->status = $request->status;
        $pembayaran->save();

        // Buat kwitansi jika diterima
        if ($request->status === 'diterima') {
            (new KwitansiController)->generateAndSave($pembayaran);
        }

        return redirect()->back()->with('success', 'Status pembayaran berhasil diperbarui.');
    }
}
