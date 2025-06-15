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
        $wali = User::where('role', 'wali_murid')->first();

        // Cari guru
        $guru = Guru::first();

        if (!$wali || !$guru) {
            $this->command->error('Seeder gagal: User wali murid atau guru belum tersedia.');
            return;
        }

        Siswa::create([
            'nis' => '123456789',
            'nama_siswa' => 'Ahmad Fauzi',
            'kelas' => '10A',
            'id_wali' => $wali->id,
            'id_guru' => $guru->id_guru,
        ]);

        Siswa::create([
            'nis' => '987654321',
            'nama_siswa' => 'Dewi Lestari',
            'kelas' => '10B',
            'id_wali' => $wali->id,
            'id_guru' => $guru->id_guru,
        ]);
    }
}
