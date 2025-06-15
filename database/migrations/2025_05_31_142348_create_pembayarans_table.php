<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->increments('id_pembayaran');
            $table->unsignedInteger('id_siswa');
            $table->string('bulan');
            $table->integer('tahun');
            $table->decimal('jumlah', 15, 2);
            $table->enum('metode', ['transfer', 'langsung', 'midtrans'])->nullable();
            $table->string('bukti_transfer', 255)->nullable();
            $table->enum('status', ['belum_bayar', 'menunggu', 'diterima', 'ditolak'])->default('belum_bayar');
            $table->unsignedBigInteger('verified_by')->nullable();
            $table->date('tanggal_verifikasi')->nullable();
            $table->text('catatan')->nullable();
        
            // Kolom untuk Midtrans
            $table->string('midtrans_order_id', 100)->nullable();
            $table->string('midtrans_transaction_status', 50)->nullable();
            $table->boolean('is_midtrans')->default(false);
        
            $table->timestamps();
        
            $table->foreign('id_siswa')->references('id_siswa')->on('siswa')->onDelete('cascade');
            $table->foreign('verified_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
