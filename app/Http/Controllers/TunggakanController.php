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
        // Ambil semua tunggakan dengan status 'belum_bayar' beserta relasi siswa dan walinya
        $tunggakan = Tunggakan::where('status', 'belum_bayar')
            ->with('siswa.wali')
            ->latest()
            ->paginate(15);
            
        return view('tunggakan.index', compact('tunggakan'));
    }

    /**
     * Mengirim notifikasi pengingat tunggakan ke wali murid.
     */
    public function sendReminder($id_tunggakan)
    {
        try {
            $tunggakan = Tunggakan::with('siswa.wali')->findOrFail($id_tunggakan);

            // Cek jika wali murid punya nomor WA
            if ($tunggakan->siswa && $tunggakan->siswa->wali && $tunggakan->siswa->wali->nomor_wa) {
                // Kirim tugas pengiriman WA ke antrian (queue)
                SendTunggakanNotification::dispatch($tunggakan);
                return back()->with('success', 'Notifikasi pengingat untuk ' . $tunggakan->siswa->nama_siswa . ' telah dijadwalkan untuk dikirim.');
            }

            return back()->with('error', 'Gagal mengirim notifikasi karena wali murid tidak memiliki nomor WhatsApp.');

        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
