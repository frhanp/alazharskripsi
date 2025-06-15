<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Notification;
use Illuminate\Support\Facades\Log;
use App\Models\Pembayaran;

class MidtransWebhookController extends Controller
{
    public function handle(Request $request)
    {
        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Tangkap notifikasi
        $notif = new Notification();

        $transactionStatus = $notif->transaction_status;
        $orderId = $notif->order_id;

        // Cari pembayaran berdasarkan order_id
        $pembayaran = Pembayaran::where('order_id', $orderId)->first();

        if (!$pembayaran) {
            Log::warning("Order ID $orderId tidak ditemukan.");
            return response()->json(['message' => 'Pembayaran tidak ditemukan'], 404);
        }

        // Update status sesuai status Midtrans
        if ($transactionStatus == 'settlement') {
            $pembayaran->status = 'diterima';
        } elseif ($transactionStatus == 'pending') {
            $pembayaran->status = 'menunggu';
        } elseif (in_array($transactionStatus, ['deny', 'cancel', 'expire'])) {
            $pembayaran->status = 'ditolak';
        }

        $pembayaran->save();

        return response()->json(['message' => 'Notifikasi diproses'], 200);
    }
}
