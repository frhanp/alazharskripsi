<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kwitansi;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

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

    public function download(Kwitansi $kwitansi)
    {
        // 1. Ambil path lengkap dari database.
        // Contoh: "kwitansi/kwitansi-9-1755670818.pdf"
        $pathToFile = $kwitansi->file_kwitansi;

        // 2. Ambil HANYA nama filenya saja menggunakan basename().
        // Hasilnya: "kwitansi-9-1755670818.pdf"
        $fileName = basename($pathToFile);

        // 3. Panggil fungsi download dengan path absolut dan nama file.
        $fullPath = storage_path('app/public/' . $pathToFile);

        if (!file_exists($fullPath)) {
            abort(404, 'File kwitansi tidak ditemukan.');
        }

        return response()->download($fullPath, $fileName);
    }

    public function generateAndSave(Pembayaran $pembayaran): ?Kwitansi
    {
        if ($pembayaran->kwitansi) {
            return $pembayaran->kwitansi;
        }

        try {
            $pembayaran->load(['siswa.wali']);

            $noKwitansi = 'KW/' . now()->year . '/' . now()->month . '/' . $pembayaran->id_pembayaran;
            $kwitansi = Kwitansi::create([
                'id_pembayaran' => $pembayaran->id_pembayaran,
                'no_kwitansi' => $noKwitansi,
                'tanggal_terbit' => now(),
                'file_kwitansi' => '',
            ]);

            $data = [
                'pembayaran' => $pembayaran,
                'kwitansi' => $kwitansi,
            ];

            $pdf = PDF::loadView('kwitansi.template', $data);

            // ===================================================================
            // SOLUSI ULTIMATE: MENYIMPAN FILE SECARA LANGSUNG
            // ===================================================================

            $directoryName = 'kwitansi';
            $fileName = 'kwitansi-' . $pembayaran->id_pembayaran . '-' . time() . '.pdf';

            // Path relatif untuk disimpan di database
            $databasePath = $directoryName . '/' . $fileName;

            // Dapatkan path absolut dari root storage 'public' Anda
            $absoluteStoragePath = storage_path('app/public/' . $directoryName);

            // 1. Pastikan folder tujuan ada, menggunakan fungsi dasar PHP
            if (!file_exists($absoluteStoragePath)) {
                mkdir($absoluteStoragePath, 0775, true);
            }

            // 2. Simpan file menggunakan fungsi dasar PHP, bukan Storage Facade
            $fullPathToFile = $absoluteStoragePath . '/' . $fileName;
            file_put_contents($fullPathToFile, $pdf->output());

            // =iatas
            Log::info("File berhasil disimpan di: " . $fullPathToFile);

            // 3. Update database dengan path relatif yang benar
            $kwitansi->update(['file_kwitansi' => $databasePath]);

            // ===================================================================

            Log::info("Kwitansi berhasil dibuat untuk pembayaran ID {$pembayaran->id_pembayaran}.");
            return $kwitansi;
        } catch (\Exception $e) {
            Log::error("Gagal membuat kwitansi untuk pembayaran ID {$pembayaran->id_pembayaran}: " . $e->getMessage());
            Log::error($e->getTraceAsString());
            return null;
        }
    }
}
