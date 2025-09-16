<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $primaryKey = 'id_guru';
    public $incrementing = true;

    protected $fillable = [
        'nama_guru', 'nip', 'mapel', 'alamat', 'latitude', 'longitude'
    ];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_guru');
    }
}
