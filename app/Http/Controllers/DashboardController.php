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
            // Ambil semua anak dari wali murid yang login, beserta relasi tunggakan
            $anakList = $user->siswa()->with('tunggakan')->get();

            $dataAnak = $anakList->map(function ($anak) {
                // Cek status pembayaran SPP bulan ini
                $sppBulanIniLunas = Pembayaran::where('id_siswa', $anak->id_siswa)
                    ->where('bulan', Carbon::now()->format('F'))
                    ->where('tahun', Carbon::now()->year)
                    ->where('status', 'diterima')
                    ->exists();
                
                // Hitung total tunggakan dari relasi
                $totalTunggakan = $anak->tunggakan->where('status', 'belum_bayar')->sum('jumlah_tunggakan');

                return [
                    'id_siswa' => $anak->id_siswa,
                    'nama_siswa' => $anak->nama_siswa,
                    'kelas' => $anak->kelas,
                    'spp_bulan_ini_lunas' => $sppBulanIniLunas,
                    'total_tunggakan' => $totalTunggakan,
                ];
            });

            // Kirim data ke view baru khusus wali murid
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
