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
            // 1. Buat record kwitansi di database terlebih dahulu
            $pembayaran->load(['siswa']);
            $noKwitansi = 'KW/' . now()->year . '/' . now()->month . '/' . $pembayaran->id_pembayaran;
            $kwitansi = Kwitansi::create([
                'id_pembayaran' => $pembayaran->id_pembayaran,
                'no_kwitansi' => $noKwitansi,
                'tanggal_terbit' => now(),
                'file_kwitansi' => '', // Kosongkan dulu, akan diisi nanti

            ]);

            // 2. Tentukan path template dan path output
            $templatePath = storage_path('app/templates/kwitansi_template.docx');
            if (!file_exists($templatePath)) {
                Log::error("Template kwitansi tidak ditemukan di: " . $templatePath);
                return null;
            }

            $directoryName = 'kwitansi';
            // Ubah ekstensi file menjadi .docx
            $fileName = 'kwitansi-' . $pembayaran->id_pembayaran . '-' . time() . '.docx';
            $databasePath = $directoryName . '/' . $fileName;
            $fullOutputPath = storage_path('app/public/' . $databasePath);

            // Pastikan direktori output ada
            Storage::disk('public')->makeDirectory($directoryName);

            // 3. Proses template dengan PhpWord
            $templateProcessor = new TemplateProcessor($templatePath);

            // 4. Siapkan data dan isi placeholder
            $bulanText = is_array($pembayaran->bulan) ? implode(', ', $pembayaran->bulan) : $pembayaran->bulan;
            // CATATAN: Fungsi terbilang butuh library tambahan seperti `terbilang/terbilang`.
            // Untuk sementara kita tampilkan angka saja.
            $terbilangText = ucwords(TerbilangHelper::convert($pembayaran->jumlah)) . ' Rupiah';


            $templateProcessor->setValue('no_kwitansi', $kwitansi->no_kwitansi);
            $templateProcessor->setValue('tanggal_terbit', Carbon::parse($kwitansi->tanggal_terbit)->translatedFormat('d F Y'));
            $templateProcessor->setValue('nama_siswa', $pembayaran->siswa->nama_siswa);
            $templateProcessor->setValue('nis_siswa', $pembayaran->siswa->nis ?? '-');
            $templateProcessor->setValue('bulan_pembayaran', $bulanText);
            $templateProcessor->setValue('tahun_pembayaran', $pembayaran->tahun);
            $templateProcessor->setValue('jumlah_rupiah', number_format($pembayaran->jumlah, 0, ',', '.'));
            $templateProcessor->setValue('jumlah_terbilang', $terbilangText);


            // 5. Simpan file .docx yang sudah diisi
            $templateProcessor->saveAs($fullOutputPath);

            // 6. Update record kwitansi dengan path file yang baru
            $kwitansi->update(['file_kwitansi' => $databasePath]);
            SendWhatsappNotification::dispatch($kwitansi);

            

            Log::info("Kwitansi .docx berhasil dibuat untuk pembayaran ID {$pembayaran->id_pembayaran}.");
            return $kwitansi;
        } catch (\Exception $e) {
            Log::error("Gagal membuat kwitansi untuk pembayaran ID {$pembayaran->id_pembayaran}: " . $e->getMessage());
            Log::error($e->getTraceAsString());
            // Jika gagal, hapus record kwitansi yang mungkin sudah terbuat
            if (isset($kwitansi) && $kwitansi->exists) {
                $kwitansi->delete();
            }
            return null;
        }
    }
}
