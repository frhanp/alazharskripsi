<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Tunggakan;
use Carbon\Carbon;
use App\Jobs\SendTunggakanNotification;

class SendTunggakanReminders extends Command
{
    protected $signature = 'app:send-tunggakan-reminders';
    protected $description = 'Mengirim notifikasi pengingat untuk semua tunggakan yang belum lunas.';

    public function handle()
    {
        $this->info('Memulai proses pengiriman pengingat tunggakan...');

        // Ambil semua tunggakan yang statusnya 'belum_bayar'
        $tunggakans = Tunggakan::where('status', 'belum_bayar')->get();
        
        $pengingatTerkirim = 0;

        foreach ($tunggakans as $tunggakan) {
            // Logika agar tidak mengirim spam:
            // Hanya kirim jika belum pernah dikirim, ATAU jika pengingat terakhir sudah lebih dari 3 hari yang lalu.
            // Anda bisa sesuaikan jeda waktu (addDays(3)) sesuai kebutuhan.
            $bisaKirim = is_null($tunggakan->last_reminder_sent_at) || Carbon::parse($tunggakan->last_reminder_sent_at)->addDays(3)->isPast();

            if ($bisaKirim) {
                // Panggil Job yang sama dengan yang dipakai tombol manual bendahara
                SendTunggakanNotification::dispatch($tunggakan);
                
                // Update waktu pengiriman terakhir
                $tunggakan->update(['last_reminder_sent_at' => now()]);

                $this->line('Pengingat untuk ' . $tunggakan->siswa->nama_siswa . ' dijadwalkan untuk dikirim.');
                $pengingatTerkirim++;
            }
        }

        $this->info("Proses selesai. Total pengingat yang dikirim: " . $pengingatTerkirim);
        return 0;
    }
}
