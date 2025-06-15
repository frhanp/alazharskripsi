<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    public $incrementing = true;

    protected $fillable = [
        'id_siswa', 'bulan', 'tahun', 'jumlah', 'metode',
        'bukti_transfer', 'status', 'verified_by', 'tanggal_verifikasi', 'catatan',
        'midtrans_order_id', 'midtrans_transaction_status', 'is_midtrans'
    ];

    protected $attributes = [
        'status' => 'belum_bayar'
    ];

    public function getBulanAttribute($value)
    {
        return explode(',', $value);
    }

    public function setBulanAttribute($value)
    {
        $this->attributes['bulan'] = is_array($value) ? implode(',', $value) : $value;
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    public function verifiedBy()
    {
        return $this->belongsTo(User::class, 'verified_by');
    }

    public function kwitansi()
    {
        return $this->hasOne(Kwitansi::class, 'id_pembayaran');
    }

    public function setStatusAttribute($value)
    {
        $allowed = ['belum_bayar', 'menunggu', 'diterima', 'ditolak'];
        $this->attributes['status'] = in_array($value, $allowed) ? $value : 'belum_bayar';
    }

    public function isMidtrans()
    {
        return $this->is_midtrans === true;
    }
}
