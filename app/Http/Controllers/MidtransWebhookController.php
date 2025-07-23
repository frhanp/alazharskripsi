<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Notification;
use Illuminate\Support\Facades\Log;
use App\Models\Pembayaran;

class MidtransWebhookController extends Controller
{

    // app/Http/Controllers/MidtransWebhookController.php

    public function handle(Request $request)
    {
        // Gunakan try-catch untuk menangkap error fatal dan mencegah webhook dinonaktifkan
        try {
            // 1. Validasi Signature Key
            $notificationPayload = $request->all();
            $serverKey = env('MIDTRANS_SERVER_KEY');
            $orderId = $notificationPayload['order_id'] ?? null;
            $statusCode = $notificationPayload['status_code'] ?? null;
            $grossAmount = $notificationPayload['gross_amount'] ?? null;

            $stringToHash = $orderId . $statusCode . $grossAmount . $serverKey;
            $calculatedSignature = hash('sha512', $stringToHash);

            if (empty($notificationPayload['signature_key']) || $calculatedSignature !== $notificationPayload['signature_key']) {
                Log::error("Webhook Gagal: Signature tidak valid untuk Order ID '$orderId'.");
                return response()->json(['message' => 'Invalid signature'], 403);
            }

            // 2. Tentukan status baru dan ambil tipe pembayaran dari notifikasi
            $transactionStatus = $notificationPayload['transaction_status'];
            $fraudStatus = $notificationPayload['fraud_status'] ?? null;
            $paymentType = $notificationPayload['payment_type'] ?? 'midtrans'; // Ambil metode pembayaran
            $newStatus = null;

            if (($transactionStatus == 'capture' || $transactionStatus == 'settlement') && $fraudStatus == 'accept') {
                $newStatus = 'diterima';
            } elseif ($transactionStatus == 'pending') {
                $newStatus = 'menunggu';
            } elseif (in_array($transactionStatus, ['deny', 'cancel', 'expire'])) {
                $newStatus = 'ditolak';
            }

            // 3. Jika ada status baru, siapkan data dan lakukan update
            if ($newStatus) {
                $updateData = [
                    'status' => $newStatus,
                    'midtrans_transaction_status' => $transactionStatus
                ];

                // Jika pembayaran berhasil, update juga kolom 'metode' dengan data spesifik
                if ($newStatus === 'diterima') {
                    $updateData['metode'] = $paymentType;
                }

                $updatedRows = Pembayaran::where('midtrans_order_id', $orderId)->update($updateData);

                if ($updatedRows > 0) {
                    Log::info("Webhook Berhasil: $updatedRows baris untuk Order ID '$orderId' diupdate.");
                } else {
                    Log::warning("Webhook Info: Tidak ada baris yang diupdate untuk Order ID '$orderId'. Mungkin sudah diupdate atau notifikasi tes.");
                }
            }

            return response()->json(['message' => 'Webhook berhasil diproses'], 200);
        } catch (\Exception $e) {
            // Jika terjadi error fatal apa pun, catat ke log untuk debugging
            Log::error('WEBHOOK_FATAL_ERROR: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine());
            // Kirim respons 500, tapi jangan sampai Midtrans menonaktifkan webhook
            return response()->json(['message' => 'Terjadi kesalahan internal pada server.'], 500);
        }
    }
}
