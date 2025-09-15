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
        if ($nilai < 12) {
            return self::$angka[$nilai];
        }
        if ($nilai < 20) {
            return self::convert($nilai - 10) . ' belas';
        }
        if ($nilai < 100) {
            return self::convert($nilai / 10) . ' puluh ' . self::convert($nilai % 10);
        }
        if ($nilai < 200) {
            return 'seratus ' . self::convert($nilai - 100);
        }
        if ($nilai < 1000) {
            return self::convert($nilai / 100) . ' ratus ' . self::convert($nilai % 100);
        }
        if ($nilai < 2000) {
            return 'seribu ' . self::convert($nilai - 1000);
        }
        if ($nilai < 1000000) {
            return self::convert($nilai / 1000) . ' ribu ' . self::convert($nilai % 1000);
        }
        if ($nilai < 1000000000) {
            return self::convert($nilai / 1000000) . ' juta ' . self::convert($nilai % 1000000);
        }
        return '';
    }
}