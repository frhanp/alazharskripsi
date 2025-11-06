<?php

namespace App\Helpers;

class TerbilangHelper
{
    private static $angka = [
        '', 'satu', 'dua', 'tiga', 'empat', 'lima',
        'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas'
    ];

    public static function convert($nilai)
    {
        $hasil = ''; // Variabel untuk menampung hasil sementara

        if ($nilai < 12) {
            $hasil = self::$angka[$nilai];
        } elseif ($nilai < 20) {
            $hasil = self::convert($nilai - 10) . ' belas';
        } elseif ($nilai < 100) {
            $hasil = self::convert(floor($nilai / 10)) . ' puluh ' . self::convert($nilai % 10);
        } elseif ($nilai < 200) {
            $hasil = 'seratus ' . self::convert($nilai - 100);
        } elseif ($nilai < 1000) {
            $hasil = self::convert(floor($nilai / 100)) . ' ratus ' . self::convert($nilai % 100);
        } elseif ($nilai < 2000) {
            $hasil = 'seribu ' . self::convert($nilai - 1000);
        } elseif ($nilai < 1000000) {
            $hasil = self::convert(floor($nilai / 1000)) . ' ribu ' . self::convert($nilai % 1000);
        } elseif ($nilai < 1000000000) {
            $hasil = self::convert(floor($nilai / 1000000)) . ' juta ' . self::convert($nilai % 1000000);
        }

        // =======================================================
        // PERUBAHAN DI SINI
        // =======================================================
        // 1. Ganti spasi ganda/lebih menjadi satu spasi.
        // 2. Hapus spasi di awal dan akhir string.
        return trim(preg_replace('/\s+/', ' ', $hasil));
        // =======================================================
    }
}