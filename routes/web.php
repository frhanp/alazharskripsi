<?php

use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\MidtransWebhookController;
use App\Http\Controllers\BendaharaController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\KwitansiController;
use App\Http\Controllers\PemetaanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Bendahara\DashboardController as BendaharaDashboardController; // Beri alias
use App\Http\Controllers\KetuaYayasan\DashboardController as KetuaYayasanDashboardController;
use App\Http\Controllers\TunggakanController;
use App\Http\Controllers\PilihMetodeController;
use App\Http\Controllers\LaporanController;
Route::get('/', function () {
    return view('welcome');
});

// MENJADI SEPERTI INI
Route::get('/dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::resource('guru', GuruController::class)->except(['show']);
    Route::resource('siswa', SiswaController::class)->except(['show']);
    Route::get('/riwayat', [RiwayatController::class, 'index'])
        ->middleware('role:wali_murid,bendahara,ketua_yayasan') // <-- KUNCINYA DI SINI
        ->name('riwayat.index');

    Route::get('/kwitansi/download/{kwitansi}', [KwitansiController::class, 'download'])->name('kwitansi.download');
});

Route::post('/midtrans/token', [PembayaranController::class, 'snapToken'])->name('midtrans.token');

Route::middleware(['auth', 'role:bendahara'])->group(function () {
    Route::get('/pembayaran/manual/create', [PembayaranController::class, 'createManual'])->name('pembayaran.manual.create');
    Route::post('/pembayaran/manual/store', [PembayaranController::class, 'storeManual'])->name('pembayaran.manual.store');
    //Route::get('/pembayaran/manual', [BendaharaController::class, 'indexManual'])->name('pembayaran.manual.index');

    //PENGECEKAN PEMBAYARAN
    Route::get('pembayaran/verifikasi', [PembayaranController::class, 'indexVerifikasi'])->name('pembayaran.verifikasi');
    Route::patch('pembayaran/verifikasi/{id}', [PembayaranController::class, 'updateVerifikasi'])->name('pembayaran.verifikasi.update');
    Route::get('/bendahara/dashboard', [BendaharaDashboardController::class, 'index'])->name('bendahara.dashboard');

    Route::get('/tunggakan', [TunggakanController::class, 'index'])->name('tunggakan.index');
    Route::post('/tunggakan/{id_tunggakan}/send-reminder', [TunggakanController::class, 'sendReminder'])->name('tunggakan.send-reminder');
});

Route::middleware(['auth', 'role:wali_murid'])->group(function () {
    Route::get('/upload-transfer', [PembayaranController::class, 'createUpload'])->name('pembayaran.upload.create');
    Route::post('/upload-transfer', [PembayaranController::class, 'storeUpload'])->name('pembayaran.upload.store');
    Route::get('/pembayaran/{siswa}/pilih-metode', [PilihMetodeController::class, 'index'])->name('pembayaran.pilih-metode');

    //Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat.index');



    // Route GET: tampilkan form bulan/tahun + tombol bayar
    Route::get('/pembayaran/midtrans/{id_siswa}', [MidtransController::class, 'showForm'])
        ->name('pembayaran.midtrans.form');


    // Route POST: proses Midtrans + tampilkan Snap
    Route::post('/pembayaran/midtrans/{id_siswa}', [MidtransController::class, 'createMidtrans'])
        ->name('pembayaran.midtrans');
});
Route::post('/midtrans/callback', [MidtransWebhookController::class, 'handle']);




Route::get('/pembayaran', [PaymentController::class, 'showPaymentPage'])->name('payment.page');
Route::post('/payment/token', [PaymentController::class, 'createTransaction'])->name('payment.token');
Route::get('/api/locations', [LocationController::class, 'index'])->name('api.locations');
Route::get('/pemetaan', [PemetaanController::class, 'index'])->name('pemetaan.index');


Route::middleware(['auth', 'role:ketua_yayasan'])->prefix('ketua')->name('ketua.')->group(function () {
    Route::get('/dashboard', [KetuaYayasanDashboardController::class, 'dashboard'])->name('dashboard');
    // Nanti kita tambahkan route untuk laporan di sini\
});


// Grup baru untuk fitur yang bisa diakses oleh Bendahara DAN Ketua Yayasan
Route::middleware(['auth', 'role:bendahara,ketua_yayasan'])->group(function () {
    // Semua route terkait laporan dipindahkan ke sini
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('/laporan/pdf', [LaporanController::class, 'exportPdf'])->name('laporan.export.pdf');
    Route::get('/laporan/excel', [LaporanController::class, 'exportExcel'])->name('laporan.export.excel');
});
require __DIR__ . '/auth.php';
