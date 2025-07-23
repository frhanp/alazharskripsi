<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pengaturan;
use App\Models\Pembayaran;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\Log;

class MidtransController extends Controller
{
    //PENGECEKAN PEMBAYARAN MIDTRANS

    public function showForm($id_siswa)
    {
        $siswa = Siswa::findOrFail($id_siswa);
        $jumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 700000;

        return view('pembayaran.midtrans', compact('siswa', 'jumlahSPP'));
    }

    public function createMidtrans(Request $request, $id_siswa)
    {
        $siswa = Siswa::findOrFail($id_siswa);

        // Validasi input dasar
        $request->validate([
            'bulan' => 'required|array|min:1',
            'bulan.*' => 'string|in:Januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember',
            'tahun' => 'required|integer',
        ]);

        // =======================================================
        // BLOK VALIDASI ANTI-DUPLIKAT
        // =======================================================
        $bulanYangDipilih = $request->bulan;
        $tahunYangDipilih = $request->tahun;
        $konflikBulan = [];

        foreach ($bulanYangDipilih as $bulan) {
            $pembayaranSudahAda = Pembayaran::where('id_siswa', $id_siswa)
                ->where('bulan', $bulan)
                ->where('tahun', $tahunYangDipilih)
                ->whereIn('status', ['menunggu', 'diterima'])
                ->exists();

            if ($pembayaranSudahAda) {
                $konflikBulan[] = $bulan;
            }
        }

        if (!empty($konflikBulan)) {
            $pesanError = 'Pembayaran untuk bulan ' . implode(', ', $konflikBulan) . ' sudah ada atau sedang menunggu konfirmasi.';
            return response()->json(['message' => $pesanError], 422);
        }
        // =======================================================
        // AKHIR BLOK VALIDASI
        // =======================================================

        $jumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 700000;
        $totalBayar = $jumlahSPP * count($request->bulan);

        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $orderId = 'SISWA-' . $siswa->id_siswa . '-' . time();

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $totalBayar,
            ],
            'customer_details' => [
                'first_name' => $siswa->nama_siswa,
                'email' => $siswa->wali->email ?? 'email@wali.com',
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
        } catch (\Exception $e) {
            Log::error('Gagal membuat Snap Token: ' . $e->getMessage());
            return response()->json(['message' => 'Gagal terhubung dengan Midtrans.'], 500);
        }

        // Simpan pembayaran, buat satu record per bulan
        foreach ($request->bulan as $bulan) {
            Pembayaran::create([
                'id_siswa' => $siswa->id_siswa,
                'bulan' => $bulan,
                'tahun' => $request->tahun,
                'jumlah' => $jumlahSPP,
                'metode' => 'midtrans', // Ini akan diupdate oleh webhook nanti
                'status' => 'menunggu',
                'snap_token' => $snapToken,
                'midtrans_order_id' => $orderId,
                'is_midtrans' => true,
            ]);
        }

        return response()->json(['snapToken' => $snapToken, 'orderId' => $orderId]);
    }
}
