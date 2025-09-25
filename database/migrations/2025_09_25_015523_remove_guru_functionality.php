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
            // Cek nama constraint foreign key Anda di database, mungkin berbeda
            // Nama defaultnya adalah: nama_tabel_nama_kolom_foreign
            $table->dropForeign(['id_guru']);
            $table->dropColumn('id_guru');
        });

        // Hapus tabel guru
        Schema::dropIfExists('guru');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Logika untuk mengembalikan jika migrasi di-rollback
        Schema::create('guru', function (Blueprint $table) {
            $table->increments('id_guru');
            $table->string('nama_guru', 100);
            $table->string('nip', 50)->nullable();
            $table->string('mapel', 100)->nullable();
            $table->timestamps();
            $table->string('alamat')->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
        });

        Schema::table('siswa', function (Blueprint $table) {
            $table->unsignedInteger('id_guru')->nullable()->after('id_wali');
            $table->foreign('id_guru')->references('id_guru')->on('guru')->onDelete('set null');
        });
    }
};
