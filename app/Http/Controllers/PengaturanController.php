<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan;
class PengaturanController extends Controller
{
    public function index()
    {
        $pengaturan = Pengaturan::all()->pluck('value', 'key');
        return view('pengaturan.index', compact('pengaturan'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'midtrans_active' => 'required|in:true,false'
        ]);

        Pengaturan::updateOrCreate(['key' => 'midtrans_active'], ['value' => $request->midtrans_active]);

        return redirect()->back()->with('success', 'Pengaturan berhasil diperbarui.');
    }
}
