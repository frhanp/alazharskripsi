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
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id_siswa');
            $table->string('nis', 20)->nullable();
            $table->string('nama_siswa', 100);
            $table->string('kelas', 20);
            $table->unsignedBigInteger('id_wali');
            $table->unsignedInteger('id_guru')->nullable();
            $table->timestamps();
        
            $table->foreign('id_wali')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_guru')->references('id_guru')->on('guru')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
