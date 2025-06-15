<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tunggakan;
use App\Models\Siswa;

class TunggakanController extends Controller
{
    public function index()
    {
        $tunggakan = Tunggakan::with('siswa')->latest()->paginate(10);
        return view('tunggakan.index', compact('tunggakan'));
    }

    public function create()
    {
        $siswas = Siswa::all();
        return view('tunggakan.create', compact('siswas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_siswa' => 'required|exists:siswa,id_siswa',
            'bulan' => 'required|string',
            'tahun' => 'required|integer|min:2020|max:2030',
            'jumlah_tunggakan' => 'required|numeric|min:0',
        ]);

        Tunggakan::create($validated);

        return redirect()->route('tunggakan.index')->with('success', 'Tunggakan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $tunggakan = Tunggakan::findOrFail($id);
        $siswas = Siswa::all();

        return view('tunggakan.edit', compact('tunggakan', 'siswas'));
    }

    public function update(Request $request, $id)
    {
        $tunggakan = Tunggakan::findOrFail($id);

        $validated = $request->validate([
            'id_siswa' => 'required|exists:siswa,id_siswa',
            'bulan' => 'required|string',
            'tahun' => 'required|integer|min:2020|max:2030',
            'jumlah_tunggakan' => 'required|numeric|min:0',
            'status' => 'required|in:belum_bayar,lunas'
        ]);

        $tunggakan->update($validated);

        return redirect()->route('tunggakan.index')->with('success', 'Tunggakan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $tunggakan = Tunggakan::findOrFail($id);
        $tunggakan->delete();

        return redirect()->route('tunggakan.index')->with('success', 'Tunggakan berhasil dihapus.');
    }
}
