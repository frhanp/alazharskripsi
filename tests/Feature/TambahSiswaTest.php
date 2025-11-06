<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Kelas;

class TambahSiswaTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Menguji fungsionalitas tambah siswa baru beserta akun walinya.
     */
    public function test_bendahara_berhasil_menambahkan_siswa_baru_dengan_wali_baru(): void
    {
        // 1. Siapkan data awal
        $bendahara = User::factory()->create(['role' => 'bendahara']);
        $kelas = Kelas::create(['nama' => '1A']);

        // 2. Siapkan data yang akan dikirim melalui form
        $siswaData = [
            'nama_siswa' => 'Siswa Uji Coba',
            'nis' => '12345',
            'id_kelas' => $kelas->id,
            'wali_option' => 'new', // Kita uji skenario membuat wali baru
            'nama_wali' => 'Wali Uji Coba',
            'email_wali' => 'wali.baru@example.com',
            'password_wali' => 'password123',
        ];

        // 3. Login sebagai bendahara dan kirim request POST seolah-olah dari form
        $this->actingAs($bendahara)
             ->post(route('siswa.store'), $siswaData);

        // 4. Verifikasi hasilnya
        // Cek apakah data siswa baru ada di tabel 'siswa'
        $this->assertDatabaseHas('siswa', [
            'nama_siswa' => 'Siswa Uji Coba',
            'nis' => '12345'
        ]);

        // Cek apakah data wali baru ada di tabel 'users'
        $this->assertDatabaseHas('users', [
            'name' => 'Wali Uji Coba',
            'email' => 'wali.baru@example.com',
            'role' => 'wali_murid'
        ]);
    }
}
