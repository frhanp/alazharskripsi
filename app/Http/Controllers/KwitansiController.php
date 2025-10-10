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
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;




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

        $kwitansi = null;
        $fullDocxOutputPath = null;

        try {
            $pembayaran->load(['siswa.wali']);

            $noKwitansi = 'KW/' . now()->year . '/' . now()->month . '/' . $pembayaran->id_pembayaran;
            $kwitansi = Kwitansi::create([
                'id_pembayaran' => $pembayaran->id_pembayaran,
                'no_kwitansi' => $noKwitansi,
                'tanggal_terbit' => now(),
                'file_kwitansi' => '',
            ]);

            $templatePath = storage_path('app/templates/kwitansi_template.docx');
            if (!file_exists($templatePath)) {
                throw new \Exception("Template .docx tidak ditemukan.");
            }

            $directoryName = 'kwitansi';
            Storage::disk('public')->makeDirectory($directoryName);

            $docxFileName = 'kwitansi-' . $pembayaran->id_pembayaran . '-' . time() . '.docx';
            $fullDocxOutputPath = storage_path('app/public/' . $directoryName . '/' . $docxFileName);

            $templateProcessor = new TemplateProcessor($templatePath);
            $bulanText = is_array($pembayaran->bulan) ? implode(', ', $pembayaran->bulan) : $pembayaran->bulan;
            $terbilangText = ucwords(TerbilangHelper::convert($pembayaran->jumlah)) . ' Rupiah';

            $templateProcessor->setValue('no_kwitansi', $kwitansi->no_kwitansi);
            $templateProcessor->setValue('tanggal_terbit', Carbon::parse($kwitansi->tanggal_terbit)->translatedFormat('d F Y'));
            $templateProcessor->setValue('nama_siswa', $pembayaran->siswa->nama_siswa);
            $templateProcessor->setValue('nama_wali', $pembayaran->siswa->wali->name ?? 'Wali Murid');
            $templateProcessor->setValue('nis_siswa', $pembayaran->siswa->nis ?? '-');
            $templateProcessor->setValue('bulan_pembayaran', $bulanText);
            $templateProcessor->setValue('tahun_pembayaran', $pembayaran->tahun);
            $templateProcessor->setValue('jumlah_rupiah', number_format($pembayaran->jumlah, 0, ',', '.'));
            $templateProcessor->setValue('jumlah_terbilang', $terbilangText);

            $templateProcessor->saveAs($fullDocxOutputPath);

            $outputDirectory = storage_path('app/public/' . $directoryName);
            $sofficePath = 'C:\Program Files\LibreOffice\program\soffice.exe';

            $process = new Process([$sofficePath, '--headless', '--convert-to', 'pdf', '--outdir', $outputDirectory, $fullDocxOutputPath]);
            // Beri batas waktu eksekusi, misal 15 detik
            $process->setTimeout(15);
            $process->run();

            // =======================================================
            // PERUBAHAN UTAMA: Validasi yang lebih ketat
            // =======================================================
            $pdfFileName = str_replace('.docx', '.pdf', $docxFileName);
            $fullPdfPath = storage_path('app/public/' . $directoryName . '/' . $pdfFileName);

            // Cek apakah prosesnya sukses DAN file PDF benar-benar ada
            if (!$process->isSuccessful() || !file_exists($fullPdfPath)) {
                // Log error yang lebih detail untuk kita periksa nanti
                Log::error('Konversi PDF gagal. Exit Code: ' . $process->getExitCode() . ' | Pesan: ' . $process->getErrorOutput());

                // Lemparkan exception untuk menghentikan proses & membatalkan semuanya
                throw new \Exception('Gagal mengonversi file ke PDF. Proses konversi tidak menghasilkan file output.');
            }


            $pdfDatabasePath = $directoryName . '/' . $pdfFileName;
            $kwitansi->update(['file_kwitansi' => $pdfDatabasePath]);
            $kwitansi->fresh();

            if (file_exists($fullDocxOutputPath)) {
                unlink($fullDocxOutputPath);
            }

            SendWhatsappNotification::dispatch($kwitansi);

            Log::info("Kwitansi .pdf (dari .docx) berhasil dibuat untuk pembayaran ID {$pembayaran->id_pembayaran}.");
            return $kwitansi;
        } catch (\Exception $e) {
            // Bagian ini akan menangkap error dari throw di atas
            Log::error("Gagal total membuat kwitansi: " . $e->getMessage());
            if ($kwitansi && $kwitansi->exists) {
                $kwitansi->delete();
            }
            if ($fullDocxOutputPath && file_exists($fullDocxOutputPath)) {
                unlink($fullDocxOutputPath);
            }
            return null;
        }
    }
}
