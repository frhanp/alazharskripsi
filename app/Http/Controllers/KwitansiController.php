<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kwitansi;
class KwitansiController extends Controller
{
    public function index()
    {
        $kwitansi = Kwitansi::with('pembayaran.siswa')->latest()->paginate(10);
        return view('kwitansi.index', compact('kwitansi'));
    }

    public function show($id)
    {
        $kwitansi = Kwitansi::with('pembayaran.siswa')->findOrFail($id);
        return view('kwitansi.show', compact('kwitansi'));
    }

    public function download($id)
    {
        $kwitansi = Kwitansi::findOrFail($id);
        $path = storage_path('app/public/' . $kwitansi->file_kwitansi);

        if (!file_exists($path)) {
            abort(404, 'File kwitansi tidak ditemukan.');
        }

        return response()->download($path, $kwitansi->no_kwitansi . '.pdf');
    }
}
