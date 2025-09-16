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
        // Diperbaiki menjadi 'guru' (singular)
        Schema::table('guru', function (Blueprint $table) {
            $table->string('alamat')->nullable()->after('mapel');
            $table->decimal('latitude', 10, 7)->nullable()->after('alamat');
            $table->decimal('longitude', 10, 7)->nullable()->after('latitude');
        });

        // Diperbaiki menjadi 'siswa' (singular)
        Schema::table('siswa', function (Blueprint $table) {
            $table->string('alamat')->nullable()->after('kelas');
            $table->decimal('latitude', 10, 7)->nullable()->after('alamat');
            $table->decimal('longitude', 10, 7)->nullable()->after('latitude');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Diperbaiki menjadi 'guru' (singular)
        Schema::table('guru', function (Blueprint $table) {
            $table->dropColumn(['alamat', 'latitude', 'longitude']);
        });

        // Diperbaiki menjadi 'siswa' (singular)
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropColumn(['alamat', 'latitude', 'longitude']);
        });
    }
};
