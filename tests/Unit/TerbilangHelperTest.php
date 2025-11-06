<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Helpers\TerbilangHelper;

class TerbilangHelperTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_nominal_besar_berhasil_dikonversi(): void
    {
        $angka = 700000;
        $expected = 'tujuh ratus ribu';
        $hasil = TerbilangHelper::convert($angka);
        $this->assertEquals($expected, $hasil);
    }

    /**
     * Menguji konversi angka dengan belasan.
     */
    public function test_nominal_dengan_belasan_berhasil_dikonversi(): void
    {
        $angka = 15500;
        $expected = 'lima belas ribu lima ratus';
        $hasil = TerbilangHelper::convert($angka);
        $this->assertEquals($expected, $hasil);
    }
}
