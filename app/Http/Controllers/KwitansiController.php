<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kwitansi;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use PhpOffice\PhpWord\TemplateProcessor; // Ganti PDF dengan TemplateProcessor
use Carbon\Carbon; // Tambahkan untuk format tanggal
use App\Helpers\TerbilangHelper;
use App\Jobs\SendWhatsappNotification;


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

    public function download(Kwitansi $kwitansi)
    {
        $pathToFile = $kwitansi->file_kwitansi;
        $fileName = basename($pathToFile);
        $fullPath = storage_path('app/public/' . $pathToFile);

        if (!file_exists($fullPath)) {
            abort(404, 'File kwitansi tidak ditemukan.');
        }

        return response()->download($fullPath, $fileName);
    }

    /**
     * Fungsi utama untuk membuat DOCX, menyimpannya, dan mencatat ke database.
     *
     * @param Pembayaran $pembayaran
     * @return Kwitansi|null
     */
    public function generateAndSave(Pembayaran $pembayaran): ?Kwitansi
    {
        if ($pembayaran->kwitansi) {
            return $pembayaran->kwitansi;
        }

        try {
            // =======================================================
            // AWAL PERUBAHAN
            // =======================================================
            
            // 1. Muat relasi siswa beserta walinya
            $pembayaran->load(['siswa.wali']);
            
            // =======================================================
            // AKHIR PERUBAHAN
            // =======================================================
            
            $noKwitansi = 'KW/' . now()->year . '/' . now()->month . '/' . $pembayaran->id_pembayaran;
            $kwitansi = Kwitansi::create([
                'id_pembayaran' => $pembayaran->id_pembayaran,
                'no_kwitansi' => $noKwitansi,
                'tanggal_terbit' => now(),
                'file_kwitansi' => '', // Kosongkan dulu, akan diisi nanti
            ]);
    
            $templatePath = storage_path('app/templates/kwitansi_template.docx');
            if (!file_exists($templatePath)) {
                Log::error("Template kwitansi tidak ditemukan di: " . $templatePath);
                return null;
            }
    
            $directoryName = 'kwitansi';
            $fileName = 'kwitansi-' . $pembayaran->id_pembayaran . '-' . time() . '.docx';
            $databasePath = $directoryName . '/' . $fileName;
            $fullOutputPath = storage_path('app/public/' . $databasePath);
    
            Storage::disk('public')->makeDirectory($directoryName);
    
            $templateProcessor = new TemplateProcessor($templatePath);
    
            $bulanText = is_array($pembayaran->bulan) ? implode(', ', $pembayaran->bulan) : $pembayaran->bulan;
            $terbilangText = ucwords(TerbilangHelper::convert($pembayaran->jumlah)) . ' Rupiah';
    
            $templateProcessor->setValue('no_kwitansi', $kwitansi->no_kwitansi);
            $templateProcessor->setValue('tanggal_terbit', Carbon::parse($kwitansi->tanggal_terbit)->translatedFormat('d F Y'));
            $templateProcessor->setValue('nama_siswa', $pembayaran->siswa->nama_siswa);
            
            // =======================================================
            // AWAL PERUBAHAN
            // =======================================================
            // Tambahkan variabel nama_wali di sini
            $templateProcessor->setValue('nama_wali', $pembayaran->siswa->wali->name ?? 'Wali Murid');
            // =======================================================
            // AKHIR PERUBAHAN
            // =======================================================
            
            $templateProcessor->setValue('nis_siswa', $pembayaran->siswa->nis ?? '-');
            $templateProcessor->setValue('bulan_pembayaran', $bulanText);
            $templateProcessor->setValue('tahun_pembayaran', $pembayaran->tahun);
            $templateProcessor->setValue('jumlah_rupiah', number_format($pembayaran->jumlah, 0, ',', '.'));
            $templateProcessor->setValue('jumlah_terbilang', $terbilangText);
    
            $templateProcessor->saveAs($fullOutputPath);
    
            $kwitansi->update(['file_kwitansi' => $databasePath]);
            SendWhatsappNotification::dispatch($kwitansi);
    
            Log::info("Kwitansi .docx berhasil dibuat untuk pembayaran ID {$pembayaran->id_pembayaran}.");
            return $kwitansi;
            
        } catch (\Exception $e) {
            Log::error("Gagal membuat kwitansi untuk pembayaran ID {$pembayaran->id_pembayaran}: " . $e->getMessage());
            Log::error($e->getTraceAsString());
            if (isset($kwitansi) && $kwitansi->exists) {
                $kwitansi->delete();
            }
            return null;
        }
    }
}
