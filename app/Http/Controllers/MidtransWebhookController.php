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
        // 1. Validasi Signature Key (Bagian ini sudah benar)
        $notificationPayload = $request->all();
        $serverKey = env('MIDTRANS_SERVER_KEY');
        $orderId = $notificationPayload['order_id'] ?? null;
        $statusCode = $notificationPayload['status_code'] ?? null;
        $grossAmount = $notificationPayload['gross_amount'] ?? null;

        $stringToHash = $orderId . $statusCode . $grossAmount . $serverKey;
        $calculatedSignature = hash('sha512', $stringToHash);

        if (empty($notificationPayload['signature_key']) || $calculatedSignature !== $notificationPayload['signature_key']) {
            Log::error("Webhook Midtrans: Signature tidak valid untuk Order ID '$orderId'.");
            return response()->json(['message' => 'Invalid signature'], 403);
        }

        // 2. Tentukan status baru dan ambil tipe pembayaran dari notifikasi
        $transactionStatus = $notificationPayload['transaction_status'];
        $fraudStatus = $notificationPayload['fraud_status'] ?? null;
        // Ambil payment_type, beri nilai default 'midtrans' jika tidak ada
        $paymentType = $notificationPayload['payment_type'] ?? 'midtrans';
        $newStatus = null;

        if ($transactionStatus == 'capture' || $transactionStatus == 'settlement') {
            if ($fraudStatus == 'accept') {
                $newStatus = 'diterima';
            }
        } elseif ($transactionStatus == 'pending') {
            $newStatus = 'menunggu';
        } elseif (in_array($transactionStatus, ['deny', 'cancel', 'expire'])) {
            $newStatus = 'ditolak';
        }

        // 3. Jika ada status baru, siapkan data dan lakukan update
        if ($newStatus) {
            // Siapkan data dasar untuk diupdate
            $updateData = [
                'status' => $newStatus,
                'midtrans_transaction_status' => $transactionStatus
            ];

            // --- INI REVISINYA ---
            // Jika pembayaran berhasil, update juga kolom 'metode'
            if ($newStatus === 'diterima') {
                $updateData['metode'] = $paymentType;
            }
            // --- AKHIR REVISI ---

            $updatedRows = Pembayaran::where('midtrans_order_id', $orderId)->update($updateData);

            if ($updatedRows > 0) {
                Log::info("Webhook Midtrans: $updatedRows baris untuk Order ID '$orderId' berhasil diupdate.");
            } else {
                if (str_starts_with($orderId, 'payment_notif_test_')) {
                    return response()->json(['message' => 'Notifikasi tes diterima dan diabaikan.'], 200);
                }
                Log::warning("Webhook Midtrans: Tidak ada baris yang diupdate untuk Order ID '$orderId'.");
            }
        }

        return response()->json(['message' => 'Webhook berhasil diproses'], 200);
    }
    
}
