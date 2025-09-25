<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class DetailSiswaController extends Controller
{
    public function index(Siswa $siswa)
    {
        // Pastikan hanya wali murid yang bersangkutan yang bisa akses
        if ($siswa->id_wali !== Auth::user()->id) {
            abort(403, 'Akses Ditolak');
        }

        // Ambil semua pembayaran & tunggakan untuk siswa ini dalam tahun berjalan
        $pembayaranTahunIni = $siswa->pembayaran()
            ->where('tahun', now()->year)
            ->get()
            ->keyBy(function($item) {
                // Karena 'bulan' bisa array, kita ambil yang pertama untuk key
                return is_array($item->bulan) ? $item->bulan[0] : $item->bulan;
            });

        $tunggakanTahunIni = $siswa->tunggakan()
            ->where('tahun', now()->year)
            ->get()
            ->keyBy('bulan');

        // Siapkan data status untuk 12 bulan
        $statusPerBulan = [];
        $semuaBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        foreach ($semuaBulan as $bulan) {
            $status = 'Belum Jatuh Tempo'; // Default
            if (isset($pembayaranTahunIni[$bulan])) {
                $status = $pembayaranTahunIni[$bulan]->status; // Ambil status dari pembayaran
            } elseif (isset($tunggakanTahunIni[$bulan])) {
                $status = 'belum_bayar'; // Ambil status dari tunggakan
            }
            $statusPerBulan[$bulan] = $status;
        }

        return view('wali.detail-siswa', compact('siswa', 'statusPerBulan'));
    }
}
