<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kwitansi extends Model
{
    protected $table = 'kwitansi';
    protected $primaryKey = 'id_kwitansi';
    public $incrementing = true;

    protected $fillable = [
        'id_pembayaran', 'no_kwitansi', 'tanggal_terbit', 'file_kwitansi', 'status_kirim'
    ];

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'id_pembayaran');
    }
}
