<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::create([
            'nama_guru' => 'Budi Santoso',
            'nip' => '1987654321',
            'mapel' => 'Matematika',
        ]);

        Guru::create([
            'nama_guru' => 'Siti Aminah',
            'nip' => '1987654322',
            'mapel' => 'Bahasa Indonesia',
        ]);
    }
}
