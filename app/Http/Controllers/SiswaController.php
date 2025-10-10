<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Jobs\SendPasswordResetNotification;
use App\Models\Kelas;
use Illuminate\Support\Facades\Auth;


class SiswaController extends Controller
{
    public function index(Request $request)
{
    // Perbaikan 1: Tambahkan 'kelas' ke eager loading untuk efisiensi
    $query = Siswa::with(['wali', 'kelas'])->latest();

    if ($request->filled('search')) {
        $search = $request->search;
        $query->where(function ($q) use ($search) {
            $q->where('nama_siswa', 'like', "%{$search}%")
                ->orWhere('nis', 'like', "%{$search}%");
        });
    }

    // Logika filter yang sudah benar, mencari 'id_kelas'
    if ($request->filled('id_kelas')) {
        $query->where('id_kelas', $request->id_kelas);
    }

    $siswas = $query->paginate(15)->withQueryString();
    
    // Perbaikan 2: Ambil opsi filter dari tabel 'kelas'
    $kelasOptions = Kelas::orderBy('nama')->get();

    return view('siswa.index', compact('siswas', 'kelasOptions'));
}


    public function create()
    {
        $walis = User::where('role', 'wali_murid')->orderBy('name')->get();
        $kelas = Kelas::orderBy('nama')->get();
        return view('siswa.create', compact('walis', 'kelas')); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:100',
            'nis' => 'required|string|max:50|unique:siswa,nis',
            'id_kelas' => 'required|exists:kelas,id',
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
                'nomor_wa' => 'nullable|string|max:20',
            ]);

            $wali = User::create([
                'name' => $request->nama_wali,
                'email' => $request->email_wali,
                'password' => Hash::make($request->password_wali),
                'role' => 'wali_murid',
                'nomor_wa' => $request->nomor_wa,
            ]);
            $id_wali = $wali->id;
        }

        // Buat data siswa dengan id_wali yang sudah ditentukan
        Siswa::create(array_merge($request->only('nama_siswa', 'nis', 'id_kelas', 'alamat', 'latitude', 'longitude'), ['id_wali' => $id_wali], ['nomor_wa' => $request->nomor_wa]));

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $walis = User::where('role', 'wali_murid')->orderBy('name')->get();
        $kelas = Kelas::orderBy('nama')->get();
        return view('siswa.edit', compact('siswa', 'walis', 'kelas'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $request->validate([
            'nama_siswa' => 'required|string|max:100',
            'nis' => 'required|string|max:50|unique:siswa,nis,' . $siswa->id_siswa . ',id_siswa',
            'id_kelas' => 'required|exists:kelas,id',
            'id_wali' => 'required|exists:users,id',
            'nomor_wa' => 'nullable|string|max:20',
        ]);
        
        $siswa->update($request->all());
        $siswa->wali->update(['nomor_wa' => $request->nomor_wa]);
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

    public function editAlamat(Siswa $siswa)
    {
        // Pastikan hanya wali murid yang bersangkutan yang bisa akses
        if ($siswa->id_wali !== Auth::id()) {
            abort(403, 'Akses Ditolak');
        }

        return view('wali.edit-alamat', compact('siswa'));
    }

    /**
     * Memproses update alamat oleh wali murid.
     */
    public function updateAlamat(Request $request, Siswa $siswa)
    {
        
        if ($siswa->id_wali !== Auth::id()) {
            abort(403, 'Akses Ditolak');
        }

        $request->validate([
            'alamat' => 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        $siswa->update($request->only('alamat', 'latitude', 'longitude'));

        return redirect()->route('profile.edit')->with('success', 'Alamat ' . $siswa->nama_siswa . ' berhasil diperbarui.');
    }
}
