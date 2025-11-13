<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pengaturan;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void // Tambahkan return type
    {
        
        
        // Hapus key 'jumlah_spp' yang lama jika ada
        Pengaturan::where('key', 'jumlah_spp')->delete();

        // Siapkan data pengaturan default
        $pengaturan = [
            [
                'key' => 'jumlah_spp_tk',
                'value' => '500000', // Ganti default harga TK di sini
            ],
            [
                'key' => 'jumlah_spp_sd',
                'value' => '700000', // Ganti default harga SD di sini
            ],
            [
                'key' => 'midtrans_active',
                'value' => 'false',
            ],
            [
                'key' => 'nomor_rekening',
                'value' => 'BSI 123456789 a/n YAYASAN ALAZHAR', // Ganti default rekening
            ],
        ];

        // Masukkan ke database
        foreach ($pengaturan as $setting) {
            // Gunakan updateOrCreate agar seeder bisa dijalankan berkali-kali
            Pengaturan::updateOrCreate(
                ['key' => $setting['key']],
                ['value' => $setting['value']]
            );
        }
        
    }
}
