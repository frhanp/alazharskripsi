<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Tunggakan;

class SendTunggakanNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $tunggakan;

    public function __construct(Tunggakan $tunggakan)
    {
        $this->tunggakan = $tunggakan;
    }

    public function handle(): void
    {
        // Pastikan relasi sudah di-load
        $this->tunggakan->load('siswa.wali');
        $wali = $this->tunggakan->siswa->wali;
        $siswa = $this->tunggakan->siswa;

        if (!$wali || !$wali->nomor_wa) {
            Log::warning("Job Gagal: Tidak ada nomor WA untuk wali dari siswa: " . $siswa->nama_siswa);
            return;
        }

        $jumlah = number_format($this->tunggakan->jumlah_tunggakan, 0, ',', '.');
        
        $message = "Yth. Bpk/Ibu Wali Murid dari {$siswa->nama_siswa},\n\n" .
                   "Dengan hormat, kami ingin menginformasikan bahwa masih terdapat tunggakan SPP yang belum diselesaikan untuk:\n\n" .
                   "Bulan: *{$this->tunggakan->bulan} {$this->tunggakan->tahun}*\n" .
                   "Jumlah: *Rp {$jumlah}*\n\n" .
                   "Mohon untuk dapat segera menyelesaikan administrasi tersebut. Jika sudah melakukan pembayaran, mohon abaikan pesan ini.\n\n" .
                   "Terima kasih.\n*Bendahara Al-Azhar 43 Gorontalo*";

        try {
            $response = Http::post('http://localhost:3000/send-message', [
                'number' => $wali->nomor_wa,
                'message' => $message,
            ]);

            if ($response->successful()) {
                Log::info('Notifikasi tunggakan berhasil dikirim ke ' . $wali->nomor_wa);
            } else {
                Log::error('Gagal kirim notifikasi tunggakan: ' . $response->body());
            }
        } catch (\Exception $e) {
            Log::error('Exception saat kirim notifikasi tunggakan: ' . $e->getMessage());
            $this->fail($e);
        }
    }
}
