<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class KelasController extends Controller
{
    public function index(Request $request)
    {
        $query = Kelas::query();

        if ($request->filled('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        $kelas = $query->orderBy('nama')->paginate(15);
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:kelas,nama',
        ]);

        Kelas::create($request->only('nama'));

        return redirect()->route('kelas.index')->with('success', 'Kelas baru berhasil ditambahkan.');
    }

    public function edit(Kelas $kela)
    {
        // Variabel harus $kela karena 'kelas' adalah nama resource
        return view('kelas.edit', ['kelas' => $kela]);
    }

    public function update(Request $request, Kelas $kela)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255', Rule::unique('kelas')->ignore($kela->id)],
        ]);

        $kela->update($request->only('nama'));

        return redirect()->route('kelas.index')->with('success', 'Nama kelas berhasil diperbarui.');
    }

    public function destroy(Kelas $kela)
    {
        // Cek apakah ada siswa yang masih terdaftar di kelas ini
        if ($kela->siswas()->exists()) {
            return back()->with('error', 'Gagal! Kelas ini tidak dapat dihapus karena masih ada siswa di dalamnya.');
        }

        $kela->delete();

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus.');
    }
}
