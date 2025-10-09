<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Pengaturan;
use App\Models\Siswa;
use App\Models\Pembayaran;
use App\Models\Tunggakan;


class GenerateTunggakan extends Command
{
    protected $signature = 'app:generate-tunggakan';
    protected $description = 'Mengecek pembayaran bulan berjalan dan membuat data tunggakan jika belum lunas setelah tanggal 10.';

    public function handle()
    {

        // 1. Cek apakah sudah melewati tanggal 10
        if (now()->day <= 10) {
            $this->info('Belum melewati tanggal 10, proses pembuatan tunggakan tidak dijalankan.');
            return 0; // Keluar dari command
        }

        $this->info('Memulai proses pembuatan tunggakan untuk bulan berjalan...');

        // 2. Tentukan periode bulan dan tahun yang akan dicek (bulan ini)
        $periode = Carbon::now();
        $bulanBerjalan = $periode->translatedFormat('F'); // Format nama bulan dalam Bahasa Indonesia
        $tahunBerjalan = $periode->year;

        // Ambil jumlah SPP dari pengaturan
        $jumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 0;

        // Ambil semua siswa aktif
        $siswas = Siswa::all();
        $tunggakanDibuat = 0;

        foreach ($siswas as $siswa) {
            // 3. Cek apakah siswa sudah lunas untuk bulan ini
            $sudahLunas = Pembayaran::where('id_siswa', $siswa->id_siswa)
                ->where('tahun', $tahunBerjalan)
                ->whereJsonContains('bulan', $bulanBerjalan)
                ->where('status', 'diterima')
                ->exists();

            // 4. Cek apakah tunggakan untuk periode ini sudah pernah dibuat
            $tunggakanSudahAda = Tunggakan::where('id_siswa', $siswa->id_siswa)
                ->where('bulan', $bulanBerjalan)
                ->where('tahun', $tahunBerjalan)
                ->exists();

            // Jika belum lunas DAN tunggakan belum pernah tercatat, maka buat tunggakan baru
            if (!$sudahLunas && !$tunggakanSudahAda) {
                Tunggakan::create([
                    'id_siswa' => $siswa->id_siswa,
                    'bulan' => $bulanBerjalan,
                    'tahun' => $tahunBerjalan,
                    'jumlah_tunggakan' => $jumlahSPP,
                    'status' => 'belum_bayar'
                ]);
                $this->line('Tunggakan dibuat untuk: ' . $siswa->nama_siswa . ' - ' . $bulanBerjalan . ' ' . $tahunBerjalan);
                $tunggakanDibuat++;
            }
        }

        $this->info("Proses selesai. Total tunggakan baru yang dibuat: " . $tunggakanDibuat);
        return 0;

        
    }
}

// class GenerateTunggakan extends Command
// {
//     protected $signature = 'app:generate-tunggakan';
//     protected $description = 'Mengecek pembayaran bulan lalu dan membuat data tunggakan jika belum lunas.';

//     public function handle()
//     {
//         $this->info('Memulai proses pembuatan tunggakan otomatis...');

//         // Tentukan periode bulan dan tahun yang akan dicek (bulan lalu)
//         $periode = Carbon::now()->subMonth();
//         $bulanLalu = $periode->format('F');
//         $tahunLalu = $periode->year;

//         // Ambil jumlah SPP dari pengaturan
//         $jumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 0;

//         // Ambil semua siswa aktif
//         $siswas = Siswa::all();
//         $tunggakanDibuat = 0;

//         foreach ($siswas as $siswa) {
//             // Cek apakah siswa sudah lunas untuk bulan lalu
//             $sudahLunas = Pembayaran::where('id_siswa', $siswa->id_siswa)
//                 ->where('tahun', $tahunLalu)
//                 // Cek apakah array 'bulan' mengandung bulan yang dicari
//                 ->whereJsonContains('bulan', $bulanLalu) 
//                 ->where('status', 'diterima')
//                 ->exists();
            
//             // Cek apakah tunggakan untuk periode ini sudah pernah dibuat
//             $tunggakanSudahAda = Tunggakan::where('id_siswa', $siswa->id_siswa)
//                 ->where('bulan', $bulanLalu)
//                 ->where('tahun', $tahunLalu)
//                 ->exists();

//             // Jika belum lunas DAN tunggakan belum pernah tercatat, maka buat tunggakan baru
//             if (!$sudahLunas && !$tunggakanSudahAda) {
//                 Tunggakan::create([
//                     'id_siswa' => $siswa->id_siswa,
//                     'bulan' => $bulanLalu,
//                     'tahun' => $tahunLalu,
//                     'jumlah_tunggakan' => $jumlahSPP,
//                     'status' => 'belum_bayar'
//                 ]);
//                 $this->line('Tunggakan dibuat untuk: ' . $siswa->nama_siswa . ' - ' . $bulanLalu . ' ' . $tahunLalu);
//                 $tunggakanDibuat++;
//             }
//         }

//         $this->info("Proses selesai. Total tunggakan baru yang dibuat: " . $tunggakanDibuat);
//         return 0;
//     }
// }
