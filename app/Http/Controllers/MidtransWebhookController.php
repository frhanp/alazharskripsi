<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Notification;
use Illuminate\Support\Facades\Log;
use App\Models\Pembayaran;
use App\Http\Controllers\KwitansiController;

class MidtransWebhookController extends Controller
{

    public function handle(Request $request)
    {
        // 1. Validasi Signature Key (Sudah Benar)
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

        // 2. Tentukan status baru berdasarkan notifikasi
        $transactionStatus = $notificationPayload['transaction_status'];
        $fraudStatus = $notificationPayload['fraud_status'] ?? null;
        $newStatus = null;

        if ($transactionStatus == 'capture') {
            if ($fraudStatus == 'accept') {
                $newStatus = 'diterima';
            }
        } elseif ($transactionStatus == 'settlement') {
            $newStatus = 'diterima';
        } elseif ($transactionStatus == 'pending') {
            $newStatus = 'menunggu';
        } elseif (in_array($transactionStatus, ['deny', 'cancel', 'expire'])) {
            $newStatus = 'ditolak';
        }

        // 3. Jika ada status baru, lakukan update ke database
        if ($newStatus) {
            // --- INI BAGIAN YANG DIPERBAIKI ---
            // Lakukan update ke SEMUA record pembayaran yang cocok dengan order_id
            $updatedRows = Pembayaran::where('midtrans_order_id', $orderId)->update([
                'status' => $newStatus,
                'midtrans_transaction_status' => $transactionStatus // Simpan juga status asli dari Midtrans
            ]);
            // --- AKHIR PERBAIKAN ---

            if ($updatedRows > 0) {
                Log::info("Webhook Midtrans: $updatedRows baris untuk Order ID '$orderId' berhasil diupdate menjadi '$newStatus'.");

                // Buat kwitansi jika status berubah jadi 'diterima'
                if ($newStatus === 'diterima') {
                    $pembayaranList = Pembayaran::where('midtrans_order_id', $orderId)->get();
                    foreach ($pembayaranList as $pembayaran) {
                        (new KwitansiController)->generateAndSave($pembayaran);
                    }
                    Log::info("Webhook Midtrans: Kwitansi otomatis dibuat untuk Order ID '$orderId'.");
                }
            } else {
                // Abaikan notifikasi tes dari dashboard Midtrans
                if (str_starts_with($orderId, 'payment_notif_test_')) {
                    return response()->json(['message' => 'Notifikasi tes diterima dan diabaikan.'], 200);
                }
                Log::warning("Webhook Midtrans: Tidak ada baris yang diupdate untuk Order ID '$orderId'. Mungkin sudah diupdate sebelumnya atau tidak ditemukan.");
            }
        }

        return response()->json(['message' => 'Webhook berhasil diproses'], 200);
    }
}
