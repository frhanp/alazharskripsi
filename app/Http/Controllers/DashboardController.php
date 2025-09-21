<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pembayaran;
use App\Models\Tunggakan;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class DashboardController extends Controller
{
     /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = Auth::user();

        // Cek role dan arahkan ke view yang sesuai
        if ($user->role === 'bendahara') {
            return app(\App\Http\Controllers\Bendahara\DashboardController::class)->index();
        }

        if ($user->role === 'wali_murid') {
            $anakList = $user->siswa()->get();

            $dataAnak = $anakList->map(function ($anak) {
                // Cek status pembayaran SPP bulan ini
                $sppBulanIniLunas = Pembayaran::where('id_siswa', $anak->id_siswa)
                    ->whereJsonContains('bulan', Carbon::now()->format('F'))
                    ->where('tahun', Carbon::now()->year)
                    ->where('status', 'diterima')
                    ->exists();
                
                // Hitung total tunggakan HANYA dari bulan-bulan yang telah lewat
                $totalTunggakan = Tunggakan::where('id_siswa', $anak->id_siswa)
                    ->where('status', 'belum_bayar')
                    ->where(function ($query) {
                        $query->where('tahun', '<', now()->year)
                              ->orWhere(function ($q) {
                                  $q->where('tahun', now()->year)
                                    ->where('bulan', '!=', now()->format('F')); // Logika dasar, perlu disempurnakan
                              });
                    })
                    ->sum('jumlah_tunggakan');

                // Logika ini perlu disempurnakan lagi nanti, untuk sementara kita nolkan jika tidak ada data
                // karena filter bulan di atas tidak akurat untuk perbandingan
                $totalTunggakan = Tunggakan::where('id_siswa', $anak->id_siswa)
                    ->where('status', 'belum_bayar')->sum('jumlah_tunggakan');


                return [
                    'id_siswa' => $anak->id_siswa,
                    'nama_siswa' => $anak->nama_siswa,
                    'kelas' => $anak->kelas,
                    'spp_bulan_ini_lunas' => $sppBulanIniLunas,
                    'total_tunggakan' => $totalTunggakan,
                ];
            });

            return view('wali.dashboard', ['dataAnak' => $dataAnak]);
        }

        if ($user->role === 'ketua_yayasan') {
            // Redirect ke route dashboard ketua yayasan yang baru kita buat
            return redirect()->route('ketua.dashboard');
        }

        // Default dashboard untuk role lain (misal: ketua_yayasan)
        return view('dashboard');
    }
}
