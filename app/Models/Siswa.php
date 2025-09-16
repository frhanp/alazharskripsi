<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    public $incrementing = true;

    protected $fillable = [
        'nis', 'nama_siswa', 'kelas', 'id_wali', 'id_guru', 'alamat', 'latitude', 'longitude'
    ];

    public function wali()
    {
        return $this->belongsTo(User::class, 'id_wali');
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id_siswa');
    }
}
