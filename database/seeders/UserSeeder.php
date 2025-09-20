<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Wali Murid Satu',
            'email' => 'wali@example.com',
            'password' => Hash::make('123'),
            'role' => 'wali_murid',
            'nomor_wa' => '085342513758',
        ]);

        User::create([
            'name' => 'Bendahara Sekolah',
            'email' => 'bendahara@example.com',
            'password' => Hash::make('123'),
            'role' => 'bendahara',
        ]);

        User::create([
            'name' => 'Ketua Yayasan',
            'email' => 'ketua@example.com',
            'password' => Hash::make('123'),
            'role' => 'ketua_yayasan',
        ]);
    }
}
