<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tunggakan;
use App\Models\Siswa;
use App\Jobs\SendTunggakanNotification;
class TunggakanController extends Controller
{
    /**
     * Menampilkan daftar semua tunggakan yang belum lunas.
     */
    public function index()
{
    $query = Tunggakan::with(['siswa.wali', 'siswa.kelas'])
        ->where('status', 'belum_bayar');

    // Filter Kelas
    if (request('kelas')) {
        $query->whereHas('siswa', function ($q) {
            $q->where('id_kelas', request('kelas'));
        });
    }

    // Filter Bulan
    if (request('bulan')) {
        $query->where('bulan', request('bulan'));
    }

    // Search Nama Siswa
    if (request('search')) {
        $query->whereHas('siswa', function ($q) {
            $q->where('nama_siswa', 'like', '%' . request('search') . '%');
        });
    }

    $tunggakan = $query->paginate(15)->withQueryString();

    return view('tunggakan.index', [
        'tunggakan' => $tunggakan,
        'kelasList' => \App\Models\Kelas::all(),
        'bulanList' => [
            'Januari','Februari','Maret','April','Mei','Juni',
            'Juli','Agustus','September','Oktober','November','Desember'
        ],
    ]);
}



    /**
     * Mengirim notifikasi pengingat tunggakan ke wali murid.
     */
     /**
     * Mengirim notifikasi pengingat tunggakan ke wali murid.
     */
    public function sendReminder($id_tunggakan)
    {
        try {
            $tunggakan = Tunggakan::with('siswa.wali')->findOrFail($id_tunggakan);

            if ($tunggakan->siswa && $tunggakan->siswa->wali && $tunggakan->siswa->wali->nomor_wa) {
                // Kirim tugas pengiriman WA ke antrian (queue)
                SendTunggakanNotification::dispatch($tunggakan);

                // Tandai bahwa pengingat telah dikirim
                $tunggakan->update(['last_reminder_sent_at' => now()]);

                return back()->with('success', 'Notifikasi pengingat untuk ' . $tunggakan->siswa->nama_siswa . ' telah dijadwalkan untuk dikirim.');
            }

            return back()->with('error', 'Gagal mengirim notifikasi karena wali murid tidak memiliki nomor WhatsApp.');

        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
