<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Siswa;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PembayaranExport;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
    $query = Pembayaran::query()->with('siswa');

        // Terapkan filter berdasarkan input
        if ($request->filled('start_date')) {
            $query->whereDate('tanggal_verifikasi', '>=', $request->start_date);
        }
        if ($request->filled('end_date')) {
            $query->whereDate('tanggal_verifikasi', '<=', $request->end_date);
        }
        if ($request->filled('id_siswa')) {
            $query->where('id_siswa', $request->id_siswa);
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $laporan = $query->latest('tanggal_verifikasi')->paginate(20)->withQueryString();
        $siswa = Siswa::orderBy('nama_siswa')->get();

        return view('laporan.index', compact('laporan', 'siswa'));
    }

    public function exportPdf(Request $request)
    {
        // Logika query sama persis dengan method index
        $query = Pembayaran::query()->with('siswa');
        if ($request->filled('start_date')) {
            $query->whereDate('tanggal_verifikasi', '>=', $request->start_date);
        }
        if ($request->filled('end_date')) {
            $query->whereDate('tanggal_verifikasi', '<=', $request->end_date);
        }
        if ($request->filled('id_siswa')) {
            $query->where('id_siswa', $request->id_siswa);
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        $laporan = $query->latest('tanggal_verifikasi')->get();

        // Buat PDF
        $pdf = Pdf::loadView('laporan.pdf', compact('laporan', 'request'));
        return $pdf->download('laporan-pembayaran-' . date('Y-m-d') . '.pdf');
    }

    public function exportExcel(Request $request)
    {
        return Excel::download(new PembayaranExport($request), 'laporan-pembayaran-' . date('Y-m-d') . '.xlsx');
    }
}
