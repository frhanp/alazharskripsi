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

        $bulan = is_array($this->kwitansi->pembayaran->bulan) ? implode(', ', $this->kwitansi->pembayaran->bulan) : $this->kwitansi->pembayaran->bulan;
        $tahun = $this->kwitansi->pembayaran->tahun;
        $namaSiswa = $this->kwitansi->pembayaran->siswa->nama_siswa;
        $jumlah = number_format($this->kwitansi->pembayaran->jumlah, 0, ',', '.');

        // Link untuk download kwitansi
        $downloadUrl = route('kwitansi.download', $this->kwitansi->id_kwitansi);

        $message = "Yth. Wali Murid dari ananda {$namaSiswa},\n\n" .
                   "Terima kasih, pembayaran SPP bulan {$bulan} {$tahun} sebesar Rp {$jumlah} telah kami terima.\n\n" .
                   "Kwitansi digital dapat diunduh melalui tautan berikut:\n{$downloadUrl}\n\n" .
                   "Terima kasih.\n*Bendahara Al-Azhar 43 Gorontalo*";

        try {
            $response = Http::post('http://localhost:3000/send-message', [
                'number' => $wali->nomor_wa,
                'message' => $message,
            ]);

            if ($response->successful()) {
                $this->kwitansi->update(['status_kirim' => 'sent']);
                Log::info('Notifikasi WA berhasil dikirim ke ' . $wali->nomor_wa);
            } else {
                $this->kwitansi->update(['status_kirim' => 'failed']);
                Log::error('Gagal kirim notifikasi WA: ' . $response->body());
            }
        } catch (\Exception $e) {
            $this->kwitansi->update(['status_kirim' => 'failed']);
            Log::error('Exception saat kirim notifikasi WA: ' . $e->getMessage());
            // Melempar kembali exception agar job bisa di-retry jika dikonfigurasi
            $this->fail($e);
        }
    }
}
