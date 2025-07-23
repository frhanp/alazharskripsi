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
        // 1. Ambil payload notifikasi dan server key
        $notificationPayload = $request->all();
        $serverKey = config('services.midtrans.server_key'); // Pastikan ini ada di config/services.php

        // 2. Validasi Signature Key (Lebih Aman)
        $orderId = $notificationPayload['order_id'] ?? null;
        $statusCode = $notificationPayload['status_code'] ?? null;
        $grossAmount = $notificationPayload['gross_amount'] ?? null;
        
        // Buat string untuk di-hash
        $stringToHash = $orderId . $statusCode . $grossAmount . $serverKey;
        $calculatedSignature = hash('sha512', $stringToHash);

        // Bandingkan signature
        if (empty($notificationPayload['signature_key']) || $calculatedSignature !== $notificationPayload['signature_key']) {
            Log::error("Webhook Midtrans: Signature tidak valid untuk Order ID '$orderId'.");
            return response()->json(['message' => 'Invalid signature'], 403);
        }

        // 3. Proses Notifikasi Setelah Signature Valid
        $transactionStatus = $notificationPayload['transaction_status'];
        $fraudStatus = $notificationPayload['fraud_status'] ?? null;

        // Cari pembayaran berdasarkan 'midtrans_order_id' (Sesuai ERD Anda)
        $pembayaran = Pembayaran::where('midtrans_order_id', $orderId)->first();

        if (!$pembayaran) {
            // Abaikan notifikasi tes dari dashboard Midtrans
            if (str_starts_with($orderId, 'payment_notif_test_')) {
                return response()->json(['message' => 'Notifikasi tes diterima dan diabaikan.'], 200);
            }
            // Jika transaksi asli tidak ditemukan, catat sebagai error
            Log::error("Webhook Midtrans: Pembayaran dengan Order ID '$orderId' tidak ditemukan.");
            return response()->json(['message' => 'Pembayaran tidak ditemukan'], 404);
        }

        // 4. Update Status Pembayaran (Sesuai Status Proyek Anda)
        if ($transactionStatus == 'capture') {
            if ($fraudStatus == 'accept') {
                $pembayaran->status = 'diterima';
            }
        } elseif ($transactionStatus == 'settlement') {
            $pembayaran->status = 'diterima';
        } elseif ($transactionStatus == 'pending') {
            $pembayaran->status = 'menunggu';
        } elseif (in_array($transactionStatus, ['deny', 'cancel', 'expire'])) {
            $pembayaran->status = 'ditolak';
        }
        
        // Simpan perubahan
        $pembayaran->save();
        
        Log::info("Webhook Midtrans: Status untuk Order ID '$orderId' berhasil diupdate menjadi '$pembayaran->status'.");

        return response()->json(['message' => 'Webhook berhasil diproses'], 200);
    }
}
