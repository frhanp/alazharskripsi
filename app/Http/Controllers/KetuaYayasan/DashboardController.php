<?php

namespace App\Http\Controllers\KetuaYayasan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\Tunggakan;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Menampilkan dashboard eksekutif untuk Ketua Yayasan.
     */
    public function dashboard()
    {
        // --- DATA UNTUK KARTU STATISTIK ---
        $pemasukanTotal = Pembayaran::where('status', 'diterima')->sum('jumlah');
        $siswaAktif = Siswa::count();
        $totalTunggakan = Tunggakan::where('status', 'belum_bayar')->sum('jumlah_tunggakan');
        
        // Menghitung jumlah wali murid unik yang anaknya terdaftar
        $waliMuridAktif = Siswa::distinct('id_wali')->count('id_wali');

        // --- DATA UNTUK GRAFIK PIE STATUS PEMBAYARAN ---
        $statusPembayaran = Pembayaran::select('status', DB::raw('count(*) as total'))
            ->groupBy('status')
            ->pluck('total', 'status');

        // --- DATA UNTUK GRAFIK BATANG PEMASUKAN 12 BULAN ---
        $pemasukanPerBulan = Pembayaran::select(
                DB::raw('YEAR(tanggal_verifikasi) as year'),
                DB::raw('MONTH(tanggal_verifikasi) as month'),
                DB::raw('SUM(jumlah) as total')
            )
            ->where('status', 'diterima')
            ->where('tanggal_verifikasi', '>=', Carbon::now()->subYear())
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();
        
        $chartLabels = $pemasukanPerBulan->map(function($item) {
            return Carbon::create()->month($item->month)->format('M \''. substr($item->year, -2));
        });
        $chartData = $pemasukanPerBulan->pluck('total');

        return view('ketua.dashboard', compact(
            'pemasukanTotal',
            'siswaAktif',
            'waliMuridAktif', // Menggantikan guruAktif
            'totalTunggakan',
            'statusPembayaran',
            'chartLabels',
            'chartData'
        ));
    }
}
