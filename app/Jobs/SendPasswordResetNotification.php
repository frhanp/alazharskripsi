<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\User;


class SendPasswordResetNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $newPassword;

    public function __construct(User $user, string $newPassword)
    {
        $this->user = $user;
        $this->newPassword = $newPassword;
    }

    public function handle(): void
    {
        if (!$this->user->nomor_wa) {
            Log::warning("Job Gagal: Tidak ada nomor WA untuk user: " . $this->user->name);
            return;
        }

        $message = "Yth. Bpk/Ibu {$this->user->name},\n\n" .
                   "Password untuk akun SPP Anda telah di-reset oleh admin.\n\n" .
                   "Email: *{$this->user->email}*\n" .
                   "Password Baru: *{$this->newPassword}*\n\n" .
                   "Mohon segera login dan ganti password Anda melalui menu 'Profil' untuk keamanan.\n\n" .
                   "Terima kasih.\n*Bendahara Al-Azhar 43 Gorontalo*";

        try {
            // Asumsi service WhatsApp Anda berjalan di localhost:3000
            Http::post('http://localhost:3000/send-message', [
                'number' => $this->user->nomor_wa,
                'message' => $message,
            ]);
            Log::info('Notifikasi reset password berhasil dikirim ke ' . $this->user->name);
        } catch (\Exception $e) {
            Log::error('Exception saat kirim notifikasi reset password: ' . $e->getMessage());
            $this->fail($e);
        }
    }
}
