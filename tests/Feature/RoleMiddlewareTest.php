<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;


class RoleMiddlewareTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Menguji bahwa wali murid akan ditolak saat mengakses halaman bendahara.
     */
    public function test_wali_murid_tidak_bisa_mengakses_halaman_manajemen_kelas(): void
    {
        // 1. Buat user dengan peran 'wali_murid'
        $wali = User::factory()->create(['role' => 'wali_murid']);

        // 2. Login sebagai user tersebut
        $response = $this->actingAs($wali)
                         // 3. Coba akses halaman manajemen kelas
                         ->get(route('kelas.index'));

        // 4. Pastikan permintaan ditolak (Forbidden)
        $response->assertStatus(403);
    }

    /**
     * Menguji bahwa bendahara BISA mengakses halaman bendahara.
     */
    public function test_bendahara_bisa_mengakses_halaman_manajemen_kelas(): void
    {
        $bendahara = User::factory()->create(['role' => 'bendahara']);

        $response = $this->actingAs($bendahara)
                         ->get(route('kelas.index'));

        // Pastikan permintaan berhasil (OK)
        $response->assertStatus(200);
    }
}
