<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Tunggakan;
use Illuminate\Support\Facades\Auth;

class PilihMetodeController extends Controller
{
    public function index(Siswa $siswa)
    {
        // Pastikan siswa ini milik wali murid yang login
        if ($siswa->id_wali !== Auth::user()->id) {
            abort(403, 'Akses Ditolak');
        }

        $totalTunggakan = Tunggakan::where('id_siswa', $siswa->id_siswa)
            ->where('status', 'belum_bayar')
            ->sum('jumlah_tunggakan');
            
        return view('pembayaran.pilih-metode', compact('siswa', 'totalTunggakan'));
    }
}
