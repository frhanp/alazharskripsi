<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Pembayaran;


class SendRejectionNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $pembayaran;

    public function __construct(Pembayaran $pembayaran)
    {
        $this->pembayaran = $pembayaran;
    }

    public function handle(): void
    {
        $this->pembayaran->load('siswa.wali');
        $wali = $this->pembayaran->siswa->wali;

        if (!$wali || !$wali->nomor_wa) {
            Log::warning("Job Penolakan Gagal: Tidak ada nomor WA untuk wali dari siswa: " . $this->pembayaran->siswa->nama_siswa);
            return;
        }

        $bulan = is_array($this->pembayaran->bulan) ? implode(', ', $this->pembayaran->bulan) : $this->pembayaran->bulan;
        $alasan = $this->pembayaran->catatan_verifikasi ?? 'Tidak ada alasan spesifik.';

        $message = "Yth. Wali Murid dari ananda {$this->pembayaran->siswa->nama_siswa},\n\n" .
                   "Dengan hormat, kami informasikan bahwa unggahan bukti pembayaran SPP Anda untuk bulan *{$bulan} {$this->pembayaran->tahun}* telah **DITOLAK**.\n\n" .
                   "Alasan: *{$alasan}*\n\n" .
                   "Silakan login ke portal untuk mengunggah ulang bukti pembayaran yang benar.\n\n" .
                   "Terima kasih.\n*Bendahara Al-Azhar 43 Gorontalo*";

        try {
            Http::post('http://localhost:3000/send-message', [
                'number' => $wali->nomor_wa,
                'message' => $message,
            ]);
            Log::info('Notifikasi penolakan berhasil dikirim ke ' . $wali->nomor_wa);
        } catch (\Exception $e) {
            Log::error('Exception saat kirim notifikasi penolakan: ' . $e->getMessage());
            $this->fail($e);
        }
    }
}
