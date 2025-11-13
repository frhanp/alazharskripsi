<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengaturan;
use App\Models\Siswa;
use App\Models\Tunggakan;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Log;


class TunggakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Seeding tunggakan & pembayaran lunas (TK/SD)...');

        // 1. Ambil KEDUA harga SPP
        $pengaturan = Pengaturan::whereIn('key', ['jumlah_spp_tk', 'jumlah_spp_sd'])
                                ->pluck('value', 'key');
        
        $hargaSppTK = (int) ($pengaturan['jumlah_spp_tk'] ?? 0);
        $hargaSppSD = (int) ($pengaturan['jumlah_spp_sd'] ?? 0);

        if ($hargaSppTK == 0 || $hargaSppSD == 0) {
            $this->command->error('Harga SPP TK/SD (jumlah_spp_tk / jumlah_spp_sd) belum di-set di tabel Pengaturan. Seeder dihentikan.');
            return;
        }
        
        $tahun = (int) now()->year;

        // Daftar semua bulan
        $bulanListAll = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember',
        ];

        $bulanSaatIni = (int) now()->format('n'); // Misal: November = 11

        // 2. Tentukan daftar bulan untuk TUNGGAKAN (3 bulan terakhir)
        $startIndexTunggakan = max(0, $bulanSaatIni - 3);
        $lengthTunggakan = min($bulanSaatIni, 3);
        $bulanListTunggakan = array_slice($bulanListAll, $startIndexTunggakan, $lengthTunggakan); 

        // 3. Tentukan daftar bulan untuk LUNAS (6 bulan terakhir)
        $startIndexLunas = max(0, $bulanSaatIni - 6);
        $lengthLunas = min($bulanSaatIni, 6);
        $bulanListLunas = array_slice($bulanListAll, $startIndexLunas, $lengthLunas);

        $this->command->info('Bulan Lunas (6 bln): ' . implode(', ', $bulanListLunas));
        $this->command->info('Bulan Nunggak (3 bln): ' . implode(', ', $bulanListTunggakan));

        // 4. Ambil siswa DENGAN relasi kelas
        $siswaList = \App\Models\Siswa::with('kelas')->get();

        // 5. Persiapan untuk data lunas
        $metodeList = ['langsung', 'transfer', 'midtrans'];
        // Ambil 1 ID bendahara untuk 'verified_by' (jika ada)
        $adminBendaharaId = User::where('role', 'bendahara')->value('id'); 
        if(!$adminBendaharaId) {
            // Jika tidak ada bendahara, pakai ID 1 (biasanya admin)
            $adminBendaharaId = User::first()->id ?? 1; 
        }

        foreach ($siswaList as $siswa) {

            // 6. Tentukan harga SPP berdasarkan jenjang siswa INI
            $jenjang = 'SD'; // Default jika siswa tidak punya kelas
            if ($siswa->kelas) {
                $jenjang = $siswa->kelas->getJenjang(); // 'TK' atau 'SD'
            }
            $jumlahSPP = ($jenjang === 'TK') ? $hargaSppTK : $hargaSppSD;

            // 75% LUNAS, 25% NUNGGAK
            if (mt_rand(1, 100) <= 75) {
                
                // --- INI SISWA LUNAS (75%) ---
                // Loop 6 bulan terakhir (sesuai permintaan)
                foreach ($bulanListLunas as $bulan) {
                    $metodeRandom = $metodeList[array_rand($metodeList)];
                    
                    // =======================================================
                    // PATOKAN: database/seeders/TunggakanSeeder.php
                    // AWAL PERUBAHAN (FIX Locale 'id')
                    // =======================================================
                    $tanggalVerifikasi = Carbon::createFromLocaleFormat('F, Y', 'id', "$bulan, $tahun")
                                                ->addDays(rand(5, 15));
                    // =======================================================
                    // AKHIR PERUBAHAN
                    // =======================================================

                    Pembayaran::create([
                        'id_siswa'           => $siswa->id_siswa,
                        'bulan'              => [$bulan], // Simpan sebagai array JSON
                        'tahun'              => $tahun,
                        'jumlah'             => $jumlahSPP,
                        'metode'             => $metodeRandom,
                        'status'             => 'diterima',
                        'verified_by'        => ($metodeRandom !== 'midtrans') ? $adminBendaharaId : null,
                        'tanggal_verifikasi' => $tanggalVerifikasi, // Gunakan variabel yang sudah di-parse
                        'is_midtrans'        => $metodeRandom === 'midtrans',
                    ]);
                }

            } else {
                
                // --- INI SISWA NUNGGAK (25%) ---
                // Loop 3 bulan terakhir (sesuai permintaan)
                $bulanTunggakan = collect($bulanListTunggakan)
                    ->shuffle()
                    ->take(mt_rand(1, count($bulanListTunggakan))); // Ambil 1 s/d 3 bulan random

                foreach ($bulanTunggakan as $bulan) {
                    Tunggakan::create([
                        'id_siswa'           => $siswa->id_siswa,
                        'bulan'              => $bulan,
                        'tahun'              => $tahun,
                        'jumlah_tunggakan'   => $jumlahSPP,
                        'status'             => 'belum_bayar',
                        'last_reminder_sent_at' => null,
                    ]);
                }
            }
        }

        $this->command->info('✅ Seeding tunggakan & pembayaran lunas selesai!');
    }
}
