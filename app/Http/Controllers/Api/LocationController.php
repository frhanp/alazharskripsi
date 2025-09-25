<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class LocationController extends Controller
{
    public function index()
    {
        // Ambil data guru yang memiliki koordinat
        // $gurus = Guru::whereNotNull('latitude')
        //     ->whereNotNull('longitude')
        //     ->get()
        //     ->map(function ($guru) {
        //         return [
        //             'nama' => $guru->nama_guru,
        //             'tipe' => 'guru',
        //             'info' => "Alamat: " . ($guru->alamat ?? '-'), // Info tambahan
        //             'latitude' => $guru->latitude,
        //             'longitude' => $guru->longitude,
        //         ];
        //     });

        // Ambil data siswa yang memiliki koordinat
        $siswas = Siswa::with('wali')->whereNotNull('latitude') // Eager load relasi wali
            ->whereNotNull('longitude')
            ->get()
            ->map(function ($siswa) {
                return [
                    'nama' => $siswa->nama_siswa,
                    'tipe' => 'siswa',
                    // Info tambahan untuk siswa
                    'info' => "Kelas: {$siswa->kelas}<br>Wali: {$siswa->wali->name}<br>Alamat: " . ($siswa->alamat ?? '-'),
                    'latitude' => $siswa->latitude,
                    'longitude' => $siswa->longitude,
                ];
            });

        // Gabungkan kedua data menjadi satu
        $locations = $siswas;

        // Kembalikan sebagai response JSON
        return response()->json($locations);
    }
}
