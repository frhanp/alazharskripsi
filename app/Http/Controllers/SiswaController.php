<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Jobs\SendPasswordResetNotification;


class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::latest()->paginate(10); // Relasi 'guru' dihapus
        return view('siswa.index', compact('siswas'));
    }

    public function create()
    {
        $walis = User::where('role', 'wali_murid')->orderBy('name')->get();
        return view('siswa.create', compact('walis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:100',
            'nis' => 'required|string|max:50|unique:siswa,nis',
            'kelas' => 'required|string|max:20',
            'wali_option' => 'required|in:existing,new', // Pilihan metode
        ]);

        $id_wali = null;

        // Jika bendahara memilih "wali yang sudah ada"
        if ($request->wali_option === 'existing') {
            $request->validate(['id_wali' => 'required|exists:users,id']);
            $id_wali = $request->id_wali;
        } 
        // Jika bendahara memilih "buat akun wali baru"
        else {
            $request->validate([
                'nama_wali' => 'required|string|max:255',
                'email_wali' => 'required|string|lowercase|email|max:255|unique:'.User::class.',email',
                'password_wali' => ['required', Rules\Password::defaults()],
            ]);

            $wali = User::create([
                'name' => $request->nama_wali,
                'email' => $request->email_wali,
                'password' => Hash::make($request->password_wali),
                'role' => 'wali_murid',
            ]);
            $id_wali = $wali->id;
        }

        // Buat data siswa dengan id_wali yang sudah ditentukan
        Siswa::create(array_merge($request->only('nama_siswa', 'nis', 'kelas', 'alamat', 'latitude', 'longitude'), ['id_wali' => $id_wali]));

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $walis = User::where('role', 'wali_murid')->orderBy('name')->get();
        return view('siswa.edit', compact('siswa', 'walis'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $request->validate([
            'nama_siswa' => 'required|string|max:100',
            'nis' => 'required|string|max:50|unique:siswa,nis,' . $siswa->id_siswa . ',id_siswa',
            'kelas' => 'required|string|max:20',
            'id_wali' => 'required|exists:users,id',
        ]);
        
        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
    }

    public function resetPassword(Siswa $siswa)
    {
        // Pastikan siswa memiliki wali yang tertaut
        if (!$siswa->wali) {
            return back()->with('error', 'Siswa ini tidak memiliki akun wali murid yang tertaut.');
        }

        $wali = $siswa->wali;
        
        // Buat password baru yang acak
        $newPassword = 'Spp' . rand(1000, 9999);

        // Update password di database
        $wali->password = Hash::make($newPassword);
        $wali->save();

        // Kirim notifikasi berisi password baru ke wali murid
        SendPasswordResetNotification::dispatch($wali, $newPassword);

        return back()->with('success', 'Password untuk wali murid ' . $wali->name . ' berhasil di-reset dan telah dikirimkan melalui WhatsApp.');
    }
}
