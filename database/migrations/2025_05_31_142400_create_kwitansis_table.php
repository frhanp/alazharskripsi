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
        Schema::create('kwitansi', function (Blueprint $table) {
            $table->increments('id_kwitansi');
            $table->unsignedInteger('id_pembayaran');
            $table->string('no_kwitansi', 50)->unique();
            $table->date('tanggal_terbit');
            $table->string('file_kwitansi', 255);
            $table->enum('status_kirim', ['pending', 'sent', 'failed'])->default('pending');
            $table->timestamps();
        
            $table->foreign('id_pembayaran')->references('id_pembayaran')->on('pembayaran')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kwitansis');
    }
};
