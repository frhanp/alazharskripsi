<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Jobs\SendPasswordResetNotification;

class AkunWaliController extends Controller
{
    // Menampilkan daftar semua akun wali murid
    public function index(Request $request) // Tambahkan Request
    {
        // =======================================================
        // AWAL PERUBAHAN
        // =======================================================
        $query = User::where('role', 'wali_murid')->latest();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $walis = $query->paginate(15)->withQueryString();
        // =======================================================
        // AKHIR PERUBAHAN
        // =======================================================

        return view('akun.index', compact('walis'));
    }

    // Menampilkan form edit untuk akun wali murid
    public function edit(User $user)
    {
        return view('akun.edit', compact('user'));
    }

    // Memperbarui data akun wali murid
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'nomor_wa' => 'nullable|string|max:15',
        ]);

        $user->update($request->only('name', 'email', 'nomor_wa'));

        return redirect()->route('akun.index')->with('success', 'Data akun wali murid berhasil diperbarui.');
    }

    // Mereset password dari halaman manajemen
    public function resetPassword(User $user)
    {
        $newPassword = 'Spp' . rand(1000, 9999);
        $user->password = Hash::make($newPassword);
        $user->save();

        SendPasswordResetNotification::dispatch($user, $newPassword);

        return back()->with('success', 'Password untuk ' . $user->name . ' berhasil di-reset dan notifikasi telah dikirim.');
    }
}
