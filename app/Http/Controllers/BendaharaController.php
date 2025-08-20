<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Kwitansi;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Http\Controllers\KwitansiController;

class BendaharaController extends Controller
{
    public function verifikasiPembayaran()
    {
        $pembayaranMenunggu = Pembayaran::where('status', 'menunggu')
            ->with('siswa')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('bendahara.verifikasi', compact('pembayaranMenunggu'));
    }

    public function detailPembayaran($id)
    {
        $pembayaran = Pembayaran::with('siswa')->findOrFail($id);
        return view('bendahara.detailpembayaran', compact('pembayaran'));
    }

    // Method prosesVerifikasi Anda akan menjadi pusat logika ACC
    public function prosesVerifikasi(Request $request, $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);

        $request->validate([
            'status' => 'required|in:diterima,ditolak',
            'catatan' => 'nullable|string|max:255'
        ]);

        $pembayaran->update([
            'status' => $request->status,
            'verified_by' => Auth::id(),
            'tanggal_verifikasi' => now(),
            'catatan' => $request->catatan
        ]);

        // =======================================================
        // PEMICU PEMBUATAN KWITANSI
        // =======================================================
        if ($pembayaran->status === 'diterima') {
            (new KwitansiController)->generateAndSave($pembayaran);
        }
        // =======================================================

        return redirect()->route('bendahara.verifikasi')
            ->with('success', 'Pembayaran berhasil diverifikasi');
    }
}
