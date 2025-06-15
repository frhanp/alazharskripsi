<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pengaturan;
use App\Models\Pembayaran;
use Midtrans\Config;
use Midtrans\Snap;

class MidtransController extends Controller
{
    //PENGECEKAN PEMBAYARAN MIDTRANS

    public function showForm($id_siswa)
{
    $siswa = Siswa::findOrFail($id_siswa);
    $jumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 700000;

    return view('pembayaran.midtrans', compact('siswa', 'jumlahSPP'));
}

public function createMidtrans(Request $request, $id_siswa)
{
    $siswa = Siswa::findOrFail($id_siswa);

    // Validasi: bulan harus array, setiap elemen string dan valid bulan
    $request->validate([
        'bulan' => 'required|array|min:1',
        'bulan.*' => 'string|in:Januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember',
        'tahun' => 'required|integer',
    ]);

    $jumlahSPP = Pengaturan::where('key', 'jumlah_spp')->value('value') ?? 700000;

    // Hitung total bayar = harga per bulan * jumlah bulan
    $totalBayar = $jumlahSPP * count($request->bulan);

    // Setup Midtrans config
    Config::$serverKey = config('midtrans.server_key');
    Config::$isProduction = config('midtrans.is_production');
    Config::$isSanitized = true;
    Config::$is3ds = true;

    $orderId = 'SISWA-' . $siswa->id_siswa . '-' . time();

    $params = [
        'transaction_details' => [
            'order_id' => $orderId,
            'gross_amount' => $totalBayar,
        ],
        'customer_details' => [
            'first_name' => $siswa->nama_siswa,
        ],
    ];

    $snapToken = Snap::getSnapToken($params);

    // Simpan pembayaran, buat satu record per bulan
    foreach ($request->bulan as $bulan) {
        Pembayaran::create([
            'id_siswa' => $siswa->id_siswa,
            'bulan' => $bulan,
            'tahun' => $request->tahun,
            'jumlah' => $jumlahSPP,
            'metode' => 'midtrans',
            'status' => 'menunggu',
            'midtrans_order_id' => $orderId,
            'midtrans_transaction_status' => 'pending',
            'is_midtrans' => true,
        ]);
    }

    return response()->json(['snapToken' => $snapToken]);
}


}
