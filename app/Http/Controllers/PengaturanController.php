<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan;
use Illuminate\Support\Facades\Artisan;
class PengaturanController extends Controller
{
    public function index()
    {
        $pengaturan = Pengaturan::all()->pluck('value', 'key');
        return view('pengaturan.index', compact('pengaturan'));
    }

    public function update(Request $request)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'jumlah_spp_tk' => 'required|numeric|min:0',
            'jumlah_spp_sd' => 'required|numeric|min:0',
            'midtrans_active' => 'required|in:true,false',
            'nomor_rekening' => 'nullable|string|max:255',
        ]);

        // Looping untuk menyimpan setiap pengaturan
        foreach ($validatedData as $key => $value) {
            // Hanya proses jika value tidak null. Jika null, ubah jadi string kosong.
            $valueToStore = $value ?? '';

            Pengaturan::updateOrCreate(
                ['key' => $key],
                ['value' => $valueToStore]
            );
        }

        // Hapus cache konfigurasi agar perubahan langsung diterapkan
        //Artisan::call('config:cache');

        return redirect()->route('pengaturan.index')->with('success', 'Pengaturan berhasil diperbarui.');
    }
}
