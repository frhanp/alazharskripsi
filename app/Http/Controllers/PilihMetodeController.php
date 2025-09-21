<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Tunggakan;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengaturan;

class PilihMetodeController extends Controller
{
    public function index(Request $request, Siswa $siswa)
    {
        if ($siswa->id_wali !== Auth::user()->id) {
            abort(403, 'Akses Ditolak');
        }

        $totalTunggakan = Tunggakan::where('id_siswa', $siswa->id_siswa)
            ->where('status', 'belum_bayar')
            ->sum('jumlah_tunggakan');
        
        // =======================================================
        // PATOKAN: app/Http/Controllers/PilihMetodeController.php
        // AWAL PERUBAHAN
        // =======================================================
        // Pastikan variabel ini selalu terdefinisi
        $menunggakQuery = http_build_query($request->query());
        // =======================================================
        // AKHIR PERUBAHAN
        // =======================================================
        
        $midtransAktif = Pengaturan::where('key', 'midtrans_active')->value('value') === 'true';

        return view('pembayaran.pilih-metode', compact('siswa', 'totalTunggakan', 'menunggakQuery', 'midtransAktif'));
    }
}
