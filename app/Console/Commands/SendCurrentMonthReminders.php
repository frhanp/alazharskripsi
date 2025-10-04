<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Siswa;
use App\Models\Pembayaran;
use App\Jobs\SendCurrentMonthReminderNotification;


class SendCurrentMonthReminders extends Command
{
    protected $signature = 'app:send-current-month-reminders';
    protected $description = 'Mengirim pengingat untuk pembayaran SPP bulan berjalan yang belum lunas.';

    public function handle()
    {
        $this->info('Memulai proses pengiriman pengingat SPP bulan berjalan...');

        $bulanIni = Carbon::now()->format('F');
        $tahunIni = Carbon::now()->year;

        // Ambil semua siswa aktif
        $siswas = Siswa::all();
        $pengingatTerkirim = 0;

        foreach ($siswas as $siswa) {
            $sudahLunas = Pembayaran::where('id_siswa', $siswa->id_siswa)
                ->where('tahun', $tahunIni)
                ->where(function ($query) use ($bulanIni) {
                    // Cek jika formatnya JSON ATAU jika formatnya string biasa
                    $query->whereJsonContains('bulan', $bulanIni)
                          ->orWhere('bulan', $bulanIni);
                })
                ->where('status', 'diterima')
                ->exists();
            
            // Jika belum lunas, kirim pengingat
            if (!$sudahLunas) {
                SendCurrentMonthReminderNotification::dispatch($siswa);
                $this->line('Pengingat untuk ' . $siswa->nama_siswa . ' dijadwalkan untuk dikirim.');
                $pengingatTerkirim++;
            }
        }

        $this->info("Proses selesai. Total pengingat yang dijadwalkan: " . $pengingatTerkirim);
        return 0;
    }
}
