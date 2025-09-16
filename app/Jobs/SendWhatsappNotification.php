<?php

namespace App\Jobs;

use App\Models\Kwitansi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;


class SendWhatsappNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $kwitansi;

    public function __construct(Kwitansi $kwitansi)
    {
        $this->kwitansi = $kwitansi;
    }

    public function handle(): void
    {
        $this->kwitansi->load('pembayaran.siswa.wali');
        $wali = $this->kwitansi->pembayaran->siswa->wali;

        if (!$wali || !$wali->nomor_wa) {
            Log::warning("Tidak ada nomor WA untuk wali murid siswa: " . $this->kwitansi->pembayaran->siswa->nama_siswa);
            $this->kwitansi->update(['status_kirim' => 'failed']);
            return;
        }

        // Buat URL publik ke file kwitansi
        $fileUrl = asset('storage/' . $this->kwitansi->file_kwitansi);

        // Siapkan caption (teks pendamping) untuk file
        $bulan = is_array($this->kwitansi->pembayaran->bulan) ? implode(', ', $this->kwitansi->pembayaran->bulan) : $this->kwitansi->pembayaran->bulan;
        $namaSiswa = $this->kwitansi->pembayaran->siswa->nama_siswa;
        $tahun = $this->kwitansi->pembayaran->tahun;

        $caption = "Yth. Wali Murid dari ananda {$namaSiswa},\n\n" .
            "Terima kasih, pembayaran SPP bulan *{$bulan} {$tahun}* telah kami terima. Berikut kami lampirkan kwitansinya.\n\n" .
            "Terima kasih.\n*Bendahara Al-Azhar 43 Gorontalo*";

        // Ini blok try...catch final Anda
        try {
            $response = Http::post('http://localhost:3000/send-message', [
                'number' => $wali->nomor_wa,
                'fileUrl' => $fileUrl, // Data yang dikirim sekarang URL file
                'fileName' => basename($this->kwitansi->file_kwitansi), // Beserta nama filenya
                'caption' => $caption, // Dan juga caption
            ]);

            if ($response->successful()) {
                $this->kwitansi->update(['status_kirim' => 'sent']);
                Log::info('Notifikasi WA (file) berhasil dikirim ke ' . $wali->nomor_wa);
            } else {
                $this->kwitansi->update(['status_kirim' => 'failed']);
                Log::error('Gagal kirim notifikasi WA (file): ' . $response->body());
            }
        } catch (\Exception $e) {
            $this->kwitansi->update(['status_kirim' => 'failed']);
            Log::error('Exception saat kirim notifikasi WA (file): ' . $e->getMessage());
            $this->fail($e);
        }
    }
}
