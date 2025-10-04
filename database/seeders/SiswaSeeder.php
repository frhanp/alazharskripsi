<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Guru;
use Illuminate\Support\Facades\Hash;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     $this->command->info('Memulai proses seeding data siswa lengkap...');

    //     $dataSiswa = [
    //         // Kelas 1
    //         ['kelas' => 'Kelas 1', 'nama' => 'Ataya Aizza Aldhitri'],
    //         ['kelas' => 'Kelas 1', 'nama' => 'Kirana Zhafira Komendangi'],
    //         ['kelas' => 'Kelas 1', 'nama' => 'Andi Khalifah Nazril Mappa'],
    //         ['kelas' => 'Kelas 1', 'nama' => 'Qyandra Almahyra Saleh'],
    //         ['kelas' => 'Kelas 1', 'nama' => 'Keenan El-Shahzad Muhamad Yusuf'],
    //         ['kelas' => 'Kelas 1', 'nama' => 'Rayya Kamila Alhaddar'],
    //         ['kelas' => 'Kelas 1', 'nama' => 'Muh. Hanif Botutihe'],
    //         ['kelas' => 'Kelas 1', 'nama' => 'Freya Alannah Corleon'],
    //         ['kelas' => 'Kelas 1', 'nama' => 'Munzir Alhasni'],
    //         ['kelas' => 'Kelas 1', 'nama' => 'Azzahra Varisha Mokoginta'],
    //         ['kelas' => 'Kelas 1', 'nama' => 'Nizar Ali Alhasni'],
    //         // Kelas 2
    //         ['kelas' => 'Kelas 2', 'nama' => 'Andi Aqilah Azzahra'],
    //         ['kelas' => 'Kelas 2', 'nama' => 'Rizkia Amirah Assegaf'],
    //         ['kelas' => 'Kelas 2', 'nama' => 'Rafka Rahmatullah Buse'],
    //         ['kelas' => 'Kelas 2', 'nama' => 'Medina Zareen Aldhitri'],
    //         ['kelas' => 'Kelas 2', 'nama' => 'Adreena Naira Malika'],
    //         ['kelas' => 'Kelas 2', 'nama' => 'Andi Muhammad Bilal Risal'],
    //         // Kelas 3
    //         ['kelas' => 'Kelas 3', 'nama' => 'Ghina Adzkiya Naray'],
    //         ['kelas' => 'Kelas 3', 'nama' => 'Amzar Abyandra Ashari'],
    //         ['kelas' => 'Kelas 3', 'nama' => 'Arya Dzaky Pradana'],
    //         ['kelas' => 'Kelas 3', 'nama' => 'Adella Dewi Kartika'],
    //         ['kelas' => 'Kelas 3', 'nama' => 'Naura Afifah Zakiya'],
    //         ['kelas' => 'Kelas 3', 'nama' => 'Nur Magfirah. P. Sunge'],
    //         ['kelas' => 'Kelas 3', 'nama' => 'Riesgita Keinnara Rissanto'],
    //         ['kelas' => 'Kelas 3', 'nama' => 'Luna El Janah Carleon'],
    //         // Kelas 4
    //         ['kelas' => 'Kelas 4', 'nama' => 'Abrizam Khaliv Makarawo'],
    //         ['kelas' => 'Kelas 4', 'nama' => 'Alvaren Rafelo Jevier Ismail'],
    //         ['kelas' => 'Kelas 4', 'nama' => 'Muhammad Davin Aldiza'],
    //         ['kelas' => 'Kelas 4', 'nama' => 'Muh. Rafandra Sangoensekamdo Sitorus'],
    //         ['kelas' => 'Kelas 4', 'nama' => 'Muhammad Shohat Murad'],
    //         ['kelas' => 'Kelas 4', 'nama' => 'Maria Megaswarna El Farid'],
    //         ['kelas' => 'Kelas 4', 'nama' => 'Rajendra Brijaya'],
    //         ['kelas' => 'Kelas 4', 'nama' => 'Syakira Aurelia Hasni'],
    //         ['kelas' => 'Kelas 4', 'nama' => 'Ahmad Ashraf Bahmid'],
    //         ['kelas' => 'Kelas 4', 'nama' => 'Abdullah Baihaqi Nasir'],
    //         ['kelas' => 'Kelas 4', 'nama' => 'Ahmad Al Ghazali Zain'],
    //         ['kelas' => 'Kelas 4', 'nama' => 'Anandita Calista Putri Z. Duma'],
    //         ['kelas' => 'Kelas 4', 'nama' => 'Fathimatuz Zahrah Assegaf'],
    //         ['kelas' => 'Kelas 4', 'nama' => 'Muhammad Ghiyats Alfattah Hulukati'],
    //         ['kelas' => 'Kelas 4', 'nama' => 'Muhammad Abrar Rizky'],
    //         ['kelas' => 'Kelas 4', 'nama' => 'Syakira Nafisyah Patuti'],
    //         ['kelas' => 'Kelas 4', 'nama' => 'Qiana Aqila Mahreen'],
    //         ['kelas' => 'Kelas 4', 'nama' => 'Andi Lara Alana Risal'],
    //         // Kelas 5
    //         ['kelas' => 'Kelas 5', 'nama' => 'Alfarizki Putra Daud'],
    //         ['kelas' => 'Kelas 5', 'nama' => 'Aldrich Kenzi Rahman'],
    //         ['kelas' => 'Kelas 5', 'nama' => 'Alivia Nakra Thafana Assagaf'],
    //         ['kelas' => 'Kelas 5', 'nama' => 'Chairunnisa Salsabila Pakaya'],
    //         ['kelas' => 'Kelas 5', 'nama' => 'Ibrahim Rafasya Mahanggi'],
    //         ['kelas' => 'Kelas 5', 'nama' => 'Khairul Najib Botutihe'],
    //         ['kelas' => 'Kelas 5', 'nama' => 'Muhammad Alkhalifi Zikri Hady'],
    //         ['kelas' => 'Kelas 5', 'nama' => 'Nadiyah Ramadhani Monoarfa'],
    //         ['kelas' => 'Kelas 5', 'nama' => 'Rehan Al Falah Uli'],
    //         ['kelas' => 'Kelas 5', 'nama' => 'Raffa Inayah S. Utina'],
    //         ['kelas' => 'Kelas 5', 'nama' => 'Siti Naafilah Kanaya Monoarfa'],
    //         ['kelas' => 'Kelas 5', 'nama' => 'Shofia Karundeng'],
    //         // Kelas 6
    //         ['kelas' => 'Kelas 6', 'nama' => 'Fathina Kayyis Kamila'],
    //         ['kelas' => 'Kelas 6', 'nama' => 'Abidzar Ramadhan Busyaeri Putra'],
    //         ['kelas' => 'Kelas 6', 'nama' => 'Azka Alvaro Rahman'],
    //         ['kelas' => 'Kelas 6', 'nama' => 'Ariefah Maulidya'],
    //         ['kelas' => 'Kelas 6', 'nama' => 'Fatiya Kayyis Kafiya'],
    //         ['kelas' => 'Kelas 6', 'nama' => 'Moh. Dwi Patjan Husain'],
    //         ['kelas' => 'Kelas 6', 'nama' => 'Morino Rocci Andana Darmawan'],
    //         ['kelas' => 'Kelas 6', 'nama' => 'Razka Alzidan Ashari'],
    //         ['kelas' => 'Kelas 6', 'nama' => 'Muhammad Farizky Mubarakh'],
    //         // TK
    //         ['kelas' => 'TK A', 'nama' => 'Raffasyah Kasyafani Rizqullah F. Mohammad'],
    //         ['kelas' => 'TK A', 'nama' => 'Rania Khairina Putri Hemuto'],
    //         ['kelas' => 'TK A', 'nama' => 'Fatimah Humaira'],
    //         ['kelas' => 'TK A', 'nama' => 'Ayunda Sastra Abdullah'],
    //         ['kelas' => 'TK A', 'nama' => 'Khoirul Hanif Amili'],
    //         ['kelas' => 'TK A', 'nama' => 'Moh. Samir Nasri Alamri'],
    //         ['kelas' => 'TK A', 'nama' => 'Syakiel Pontoh'],
    //         ['kelas' => 'TK B', 'nama' => 'Qalesya Althea Rianto'],
    //         ['kelas' => 'TK B', 'nama' => 'Hanna Khumairah Setiawan'],
    //         ['kelas' => 'TK B', 'nama' => 'Muhamad Alwi Diko'],
    //         ['kelas' => 'TK B', 'nama' => 'Shelina Ramadhan Bakri'],
    //     ];

    //     $nisCounter = 25001; // NIS awal, bisa disesuaikan

    //     foreach ($dataSiswa as $data) {
    //         $namaSiswa = $data['nama'];
    //         $emailName = preg_replace('/[^a-zA-Z0-9]/', '', $namaSiswa);

    //         // Buat Akun "Wali Murid Bayangan"
    //         $wali = User::create([
    //             'name'     => 'Wali Murid dari ' . $namaSiswa,
    //             'email'    => 'wali.' . strtolower($emailName) . '@gmail.com',
    //             'password' => Hash::make('password'),
    //             'role'     => 'wali_murid',
    //         ]);

    //         // Buat Data Siswa
    //         Siswa::create([
    //             'nama_siswa' => $namaSiswa,
    //             'kelas'      => $data['kelas'],
    //             'nis'        => $nisCounter++,
    //             'id_wali'    => $wali->id,
    //         ]);
    //     }

    //     $this->command->info('Proses seeding ' . count($dataSiswa) . ' data siswa selesai.');
    // }


    public function run(): void
    {
        $this->command->info('Memulai proses seeding data siswa dummy...');

        $dataSiswa = [
            ['kelas' => 'Kelas 1', 'nama' => 'Siswa Dummy 1'],
            ['kelas' => 'Kelas 1', 'nama' => 'Siswa Dummy 2'],
            ['kelas' => 'Kelas 2', 'nama' => 'Siswa Dummy 3'],
            ['kelas' => 'Kelas 2', 'nama' => 'Siswa Dummy 4'],
            ['kelas' => 'Kelas 3', 'nama' => 'Siswa Dummy 5'],
            ['kelas' => 'Kelas 4', 'nama' => 'Siswa Dummy 6'],
            ['kelas' => 'Kelas 5', 'nama' => 'Siswa Dummy 7'],
            ['kelas' => 'Kelas 6', 'nama' => 'Siswa Dummy 8'],
            ['kelas' => 'TK A',   'nama' => 'Siswa Dummy 9'],
            ['kelas' => 'TK B',   'nama' => 'Siswa Dummy 10'],
        ];

        $nisCounter = 1001; // NIS awal dummy

        foreach ($dataSiswa as $data) {
            $namaSiswa = $data['nama'];
            $emailName = strtolower(str_replace(' ', '', $namaSiswa));

            // Buat akun Wali Dummy
            $wali = User::create([
                'name'     => 'Wali dari ' . $namaSiswa,
                'email'    => 'wali.' . $emailName . '@example.com',
                'password' => Hash::make('password'),
                'role'     => 'wali_murid',
                
            ]);

            // Buat Data Siswa Dummy
            Siswa::create([
                'nama_siswa' => $namaSiswa,
                'kelas'      => $data['kelas'],
                'nis'        => $nisCounter++,
                'id_wali'    => $wali->id,
            ]);
        }

        $this->command->info('Proses seeding dummy selesai: ' . count($dataSiswa) . ' siswa dibuat.');
    }
}
