<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Kwitansi;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;

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

        if ($request->status === 'diterima') {
            $this->buatKwitansi($pembayaran);
        }

        return redirect()->route('bendahara.verifikasi')
            ->with('success', 'Pembayaran berhasil diverifikasi');
    }

    protected function buatKwitansi(Pembayaran $pembayaran)
    {
        $noKwitansi = 'KWT-' . date('Ymd') . '-' . uniqid();

        return Kwitansi::create([
            'id_pembayaran' => $pembayaran->id_pembayaran,
            'no_kwitansi' => $noKwitansi,
            'tanggal_terbit' => now(),
            'file_kwitansi' => $this->generateKwitansiFile($pembayaran)
        ]);
    }

    protected function generateKwitansiFile(Pembayaran $pembayaran)
    {
        return 'kwitansi/' . uniqid() . '.pdf';
    }
}
