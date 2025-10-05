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
        Schema::table('pengaturan', function (Blueprint $table) {
            // Ubah panjang kolom 'value' menjadi 100 karakter
            $table->string('value', 100)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengaturan', function (Blueprint $table) {
            // Kembalikan panjang kolom 'value' ke 50 jika migrasi di-rollback
            $table->string('value', 50)->change();
        });
    }
};
