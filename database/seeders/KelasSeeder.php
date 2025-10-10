<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = [
            '1A',
            '1B',
            '1C',
            '2A',
            '2B',
            '2C',
            '3A',
            '3B',
            '3C',
            '4A',
            '4B',
            '4C',
            '5A',
            '5B',
            '5C',
            '6A',
            '6B',
            '6C',
            'TK A',
            'TK B',
        ];

        foreach ($kelas as $namaKelas) {
            Kelas::create(['nama' => $namaKelas]);
        }
    }
}
