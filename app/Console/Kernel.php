<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {

        // 1. Command SOP: Membuat data tunggakan bulan berjalan & kirim notif.
        $schedule->command('tunggakan:buat-bulan-berjalan')->dailyAt('01:00');

        // 2. Command Failsafe: Membuat data tunggakan lampau & kirim notif.
        $schedule->command('tunggakan:buat-lampau')->monthlyOn(2, '02:00');


        // Jalankan command setiap bulan pada tanggal 2, pukul 01:00 pagi
        // $schedule->command('app:generate-tunggakan')->dailyAt('01:00');
        // $schedule->command('app:send-tunggakan-reminders')->dailyAt('08:00');
        // $schedule->command('app:send-current-month-reminders')
        //     ->dailyAt('08:00')
        //     ->when(function () {
        //         return now()->day > 10;
        //     });
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
