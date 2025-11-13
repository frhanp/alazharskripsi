<?php

namespace App\Http\Controllers\Bendahara;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Tunggakan;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function index()
    {
        // 1. Kartu Statistik: Pemasukan terverifikasi bulan ini
        $pemasukanBulanIni = Pembayaran::where('status', 'diterima')
            ->whereYear('tanggal_verifikasi', now()->year)
            ->whereMonth('tanggal_verifikasi', now()->month)
            ->sum('jumlah');

        // 2. Kartu Statistik: Menunggu Verifikasi
        $menungguVerifikasi = Pembayaran::where('status', 'menunggu')
            ->where('is_midtrans', false)
            ->count();

        // 3. Kartu Statistik: Total Tunggakan
        $totalTunggakan = Tunggakan::where('status', 'belum_bayar')->sum('jumlah_tunggakan');

        // 4. Kartu Statistik: Siswa Aktif
        $siswaAktif = Siswa::count();

        // 5. Daftar "Perlu Tindakan": 5 pembayaran menunggu verifikasi
        $perluTindakan = Pembayaran::where('status', 'menunggu')
            ->with('siswa')
            ->latest()
            ->take(5)
            ->get();
            
        // 6. Aktivitas Terbaru: 5 pembayaran terakhir yang diterima
        $aktivitasTerbaru = Pembayaran::where('status', 'diterima')
            ->with('siswa')
            ->latest('tanggal_verifikasi')
            ->take(5)
            ->get();

        // 7. Data untuk Grafik Pemasukan 6 Bulan Terakhir
        $chartData = Pembayaran::select(
                DB::raw('YEAR(tanggal_verifikasi) as year'),
                DB::raw('MONTH(tanggal_verifikasi) as month'),
                DB::raw('SUM(jumlah) as total')
            )
            ->where('status', 'diterima')
            ->where('tanggal_verifikasi', '>=', Carbon::now()->subMonths(6))
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();

        $labels = $chartData->map(function($item) {
            return Carbon::create()->month($item->month)->format('F');
        });
        $data = $chartData->pluck('total');

        return view('bendahara.dashboard', compact(
            'pemasukanBulanIni',
            'menungguVerifikasi',
            'totalTunggakan',
            'siswaAktif',
            'perluTindakan',
            'aktivitasTerbaru',
            'labels',
            'data'
        ));
    }
}
