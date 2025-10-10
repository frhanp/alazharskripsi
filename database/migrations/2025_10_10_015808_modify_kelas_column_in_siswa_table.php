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
        Schema::table('siswa', function (Blueprint $table) {
            // Tambahkan kolom foreign key baru setelah kolom nis
            $table->foreignId('id_kelas')->nullable()->after('nis')->constrained('kelas');
            // Hapus kolom 'kelas' yang lama
            $table->dropColumn('kelas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('siswa', function (Blueprint $table) {
            // Kembalikan kolom 'kelas' jika di-rollback
            $table->string('kelas')->after('nis');
            // Hapus foreign key dan kolomnya
            $table->dropForeign(['id_kelas']);
            $table->dropColumn('id_kelas');
        });
    }
};
