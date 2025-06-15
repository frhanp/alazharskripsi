<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    public function index(Request $request)
    {
        $wali = Auth::user();

        // Query awal, tampil berdasarkan siswa yang dimiliki wali
        $query = Pembayaran::with('siswa')
            ->whereHas('siswa', function ($q) use ($wali) {
                $q->where('id_wali', $wali->id);
            });

        // Filter berdasarkan siswa
        if ($request->filled('siswa')) {
            $query->where('id_siswa', $request->siswa);
        }
        
        // Filter berdasarkan tahun
        if ($request->filled('tahun')) {
            $query->where('tahun', $request->tahun);
        }
        
        // Filter berdasarkan metode
        if ($request->filled('metode')) {
            $query->where('metode', $request->metode);
        }
        
        $pembayaran = $query->paginate(10)->withQueryString();

        $siswa = $wali->siswa; // daftar siswa untuk filter

        return view('riwayat.index', compact('pembayaran', 'siswa'));
    }
}
