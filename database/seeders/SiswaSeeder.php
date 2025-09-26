<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Guru;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cari user wali murid (pastikan sudah ada di seeder User)
        $waliIds = User::where('role', 'wali_murid')->pluck('id');

        if ($waliIds->isEmpty()) {
            $this->command->info('Tidak ada wali murid ditemukan, silakan jalankan UserSeeder terlebih dahulu.');
            return;
        }

        // =======================================================
        // PATOKAN: database/seeders/SiswaSeeder.php
        // AWAL PERUBAHAN
        // =======================================================

        // Buat data siswa dummy tanpa 'id_guru'
        Siswa::create([
            'nis' => '123456789',
            'nama_siswa' => 'Ahmad Fauzi',
            'kelas' => '10A',
            'id_wali' => $waliIds->random(),
        ]);

        Siswa::create([
            'nis' => '987654321',
            'nama_siswa' => 'Dewi Lestari',
            'kelas' => '10B',
            'id_wali' => $waliIds->random(),
        ]);

        // =======================================================
        // AKHIR PERUBAHAN
        // =======================================================
    }
}
