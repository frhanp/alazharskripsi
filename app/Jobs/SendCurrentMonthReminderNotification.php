<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Siswa;

use Carbon\Carbon;


class SendCurrentMonthReminderNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $siswa;

    public function __construct(Siswa $siswa)
    {
        $this->siswa = $siswa;
    }

    public function handle(): void
    {
        $this->siswa->load('wali');
        $wali = $this->siswa->wali;

        if (!$wali || !$wali->nomor_wa) {
            Log::warning("Job Gagal: Tidak ada nomor WA untuk wali dari siswa: " . $this->siswa->nama_siswa);
            return;
        }

        $bulanIni = Carbon::now()->translatedFormat('F');
        $tahunIni = Carbon::now()->year;
        
        $message = "Yth. Bpk/Ibu Wali Murid dari ananda {$this->siswa->nama_siswa},\n\n" .
                   "Dengan hormat, kami ingin mengingatkan bahwa pembayaran SPP untuk bulan *{$bulanIni} {$tahunIni}* telah melewati tanggal jatuh tempo.\n\n" .
                   "Mohon untuk dapat segera menyelesaikan administrasi pembayaran. Anda dapat melakukan pembayaran melalui aplikasi.\n\n" .
                   "Terima kasih atas perhatian dan kerjasamanya.\n*Bendahara Al-Azhar 43 Gorontalo*";

            try {
            Http::post('http://localhost:3000/send-message', [
                'number' => $wali->nomor_wa,
                'message' => $message,
            ]);
            Log::info("Pengingat SPP bulan berjalan berhasil dikirim ke " . $wali->name);
        } catch (\Exception $e) {
            Log::error("Exception saat kirim pengingat bulan berjalan: " . $e->getMessage());
            $this->fail($e);
        }              
        Log::info("Pengingat SPP bulan berjalan berhasil dikirim ke " . $wali->name);
    }
}
