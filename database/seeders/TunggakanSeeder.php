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
        $this->command->info('Seeding tunggakan versi ringan...');

        $jumlahSPP = (int) (Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 700000);
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
        $bulanList = array_slice($bulanListAll, max(0, $bulanSaatIni - 3), 3); // 3 bulan terakhir

        $this->command->info('Bulan yang dipakai: ' . implode(', ', $bulanList));

        $siswaList = \App\Models\Siswa::all();

        foreach ($siswaList as $siswa) {

            // Hanya 25% siswa yang punya tunggakan (random)
            if (mt_rand(1, 100) > 25) {
                continue; // lainnya dianggap lunas semua
            }

            // Siswa ini punya 1–3 bulan tunggakan random
            $bulanTunggakan = collect($bulanList)
                ->shuffle()
                ->take(mt_rand(1, 3));

            foreach ($bulanTunggakan as $bulan) {
                \App\Models\Tunggakan::create([
                    'id_siswa'          => $siswa->id_siswa,
                    'bulan'             => $bulan,
                    'tahun'             => $tahun,
                    'jumlah_tunggakan'  => $jumlahSPP,
                    'status'            => 'belum_bayar',
                    'last_reminder_sent_at' => null,
                ]);
            }
        }

        $this->command->info('✅ Tunggakan versi ringan selesai!');
    }
}
