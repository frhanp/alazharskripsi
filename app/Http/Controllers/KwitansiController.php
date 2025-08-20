<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kwitansi;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class KwitansiController extends Controller
{
    /**
     * Fungsi utama untuk membuat PDF, menyimpannya, dan mencatat ke database.
     * Ini akan menjadi pusat logika pembuatan kwitansi.
     *
     * @param Pembayaran $pembayaran
     * @return Kwitansi|null
     */

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

    public function generateAndSave($pembayaran)
    {
        $noKwitansi = 'KWT-' . date('Ymd') . '-' . uniqid();

        return Kwitansi::create([
            'id_pembayaran' => $pembayaran->id_pembayaran,
            'no_kwitansi' => $noKwitansi,
            'tanggal_terbit' => now(),
            'file_kwitansi' => 'kwitansi/' . uniqid() . '.pdf'
        ]);
    }
}
