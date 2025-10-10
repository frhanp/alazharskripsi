<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class LandingPageController extends Controller
{
    public function index()
    {
        // Ambil jumlah total siswa
        $jumlahSiswa = Siswa::count();
        
        // Kirim data ke view welcome
        return view('welcome', compact('jumlahSiswa'));
    }
}
