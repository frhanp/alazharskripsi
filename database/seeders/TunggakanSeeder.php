<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengaturan;
use App\Models\Siswa;
use App\Models\Tunggakan;
use Carbon\Carbon;

class TunggakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Seeding tunggakan versi ringan (TK/SD)...');

        
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

        // Ambil 3 bulan terakhir dari bulan sekarang
        $bulanListAll = [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember',
        ];

        $bulanSaatIni = (int) now()->format('n');
        // Logika 3 bulan terakhir Anda sudah benar
        $bulanList = array_slice($bulanListAll, max(0, $bulanSaatIni - 3), 3); 

        $this->command->info('Bulan yang dipakai: ' . implode(', ', $bulanList));

        
        // 2. Ambil siswa DENGAN relasi kelas
        $siswaList = \App\Models\Siswa::with('kelas')->get();
        

        foreach ($siswaList as $siswa) {

            // Hanya 25% siswa yang punya tunggakan (random)
            if (mt_rand(1, 100) > 25) {
                continue; // lainnya dianggap lunas semua
            }

            
            // 3. Tentukan harga SPP berdasarkan jenjang siswa INI
            $jenjang = 'SD'; // Default jika siswa tidak punya kelas
            if ($siswa->kelas) {
                $jenjang = $siswa->kelas->getJenjang(); // 'TK' atau 'SD'
            }
            $jumlahSPP = ($jenjang === 'TK') ? $hargaSppTK : $hargaSppSD;
            

            // Siswa ini punya 1–3 bulan tunggakan random
            $bulanTunggakan = collect($bulanList)
                ->shuffle()
                ->take(mt_rand(1, 3));

            foreach ($bulanTunggakan as $bulan) {
                \App\Models\Tunggakan::create([
                    'id_siswa'           => $siswa->id_siswa,
                    'bulan'              => $bulan,
                    'tahun'              => $tahun,
                    'jumlah_tunggakan'   => $jumlahSPP, // 4. Gunakan harga yang benar
                    'status'             => 'belum_bayar',
                    'last_reminder_sent_at' => null,
                ]);
            }
        }

        $this->command->info('✅ Tunggakan versi ringan selesai!');
    }
}
