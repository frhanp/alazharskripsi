<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tunggakan extends Model
{
    protected $table = 'tunggakan';
    protected $primaryKey = 'id_tunggakan';
    public $incrementing = true;

    protected $fillable = [
        'id_siswa', 'bulan', 'tahun', 'jumlah_tunggakan', 'status', 'last_reminder_sent_at'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}

