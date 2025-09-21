<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;

class RiwayatController extends Controller
{
    /**
     * Menampilkan halaman riwayat pembayaran yang cerdas.
     * Tampilannya akan beradaptasi berdasarkan peran pengguna yang login.
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        // Selalu ambil data pembayaran beserta relasi siswa dan kwitansinya
        $query = Pembayaran::query()->with(['siswa', 'kwitansi']);

        // Filter data berdasarkan peran pengguna
        if ($user->role === 'wali_murid') {
            // Jika wali murid, hanya tampilkan data anak-anaknya
            $siswaIds = Siswa::where('id_wali', $user->id)->pluck('id_siswa');
            $query->whereIn('id_siswa', $siswaIds);
        }
        // Jika bendahara atau ketua_yayasan, tidak perlu filter tambahan, mereka bisa melihat semua.

        // Terapkan filter dari form pencarian jika ada
        if ($request->filled('siswa')) {
            $query->where('id_siswa', $request->siswa);
        }
        if ($request->filled('tahun')) {
            $query->where('tahun', $request->tahun);
        }
        if ($request->filled('metode')) {
            $query->where('metode', $request->metode);
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('status') && $request->status !== '') {
            $query->where('status', $request->status);
        }

        // Ambil data yang sudah difilter dan diurutkan, lalu paginasi
        $pembayaran = $query->orderBy('created_at', 'desc')->paginate(10);

        // Siapkan data untuk dropdown filter siswa
        // Jika wali murid, dropdown hanya berisi nama anaknya.
        // Jika bendahara, dropdown berisi semua siswa.
        $siswa = ($user->role === 'wali_murid')
            ? Siswa::where('id_wali', $user->id)->orderBy('nama_siswa')->get()
            : Siswa::orderBy('nama_siswa')->get();

        // Kirim semua data yang dibutuhkan ke satu view yang sama
        return view('riwayat.index', compact('pembayaran', 'siswa'));
    }
}
