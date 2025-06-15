<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Guru;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::with('guru')->latest()->paginate(10);
        return view('siswa.index', compact('siswas'));
    }

    public function create()
    {
        $gurus = Guru::all();
        return view('siswa.create', compact('gurus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:100',
            'nis' => 'required|string|max:50|unique:siswa,nis',
            'id_guru' => 'nullable|exists:guru,id_guru',
        ]);

        Siswa::create($request->all());
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $gurus = Guru::all();
        return view('siswa.edit', compact('siswa', 'gurus'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $request->validate([
            'nama_siswa' => 'required|string|max:100',
            'nis' => 'required|string|max:50|unique:siswa,nis,' . $siswa->id_siswa . ',id_siswa',
            'id_guru' => 'nullable|exists:guru,id_guru',
        ]);

        $siswa->update($request->all());
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
    }
}
