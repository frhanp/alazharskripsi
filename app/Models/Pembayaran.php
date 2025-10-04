<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    public $incrementing = true;

    protected $fillable = [
        'id_siswa',
        'bulan',
        'tahun',
        'jumlah',
        'metode',
        'bukti_transfer',
        'status',
        'verified_by',
        'tanggal_verifikasi',
        'catatan',
        'midtrans_order_id',
        'midtrans_transaction_status',
        'is_midtrans',
        'snap_token'
    ];

    protected $casts = [
        'bulan' => 'array',
    ];

    protected $attributes = [
        'status' => 'belum_bayar'
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        // Event ini akan berjalan setiap kali record Pembayaran DIBUAT
        static::created(function (Pembayaran $pembayaran) {
            // Jika pembayaran baru langsung berstatus 'diterima' (misal: input manual)
            if ($pembayaran->status === 'diterima') {
                self::updateTunggakanLunas($pembayaran);
            }
        });

        // Event ini akan berjalan setiap kali record Pembayaran DIUPDATE
        static::updated(function (Pembayaran $pembayaran) {
            // Cek jika kolom 'status' baru saja diubah menjadi 'diterima'
            if ($pembayaran->wasChanged('status') && $pembayaran->status === 'diterima') {
                self::updateTunggakanLunas($pembayaran);
            }
        });
    }

    /**
     * Fungsi terpusat untuk mengupdate status tunggakan menjadi lunas.
     */
    public static function updateTunggakanLunas(Pembayaran $pembayaran)
    {
        // Karena 'bulan' bisa jadi array, kita proses satu per satu
        foreach ($pembayaran->bulan as $bulan) {
            Tunggakan::where('id_siswa', $pembayaran->id_siswa)
                ->where('bulan', $bulan)
                ->where('tahun', $pembayaran->tahun)
                ->where('status', 'belum_bayar')
                ->update(['status' => 'lunas']);
        }
    }

    /**
     * Helper untuk memastikan 'bulan' selalu array.
     */
    public function getBulanArray()
    {
        $bulanValue = $this->attributes['bulan'];
        return is_array($bulanValue) ? $bulanValue : explode(',', $bulanValue);
    }

    public function getBulanAttribute($value)
    {
        $decoded = json_decode($value, true);

        if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
            return $decoded;
        }

        // fallback kalau value bukan JSON valid
        return $value ? explode(',', $value) : [];
    }


    public function setBulanAttribute($value)
    {
        if (is_null($value)) {
            $this->attributes['bulan'] = json_encode([]);
        } elseif (is_array($value)) {
            $this->attributes['bulan'] = json_encode($value);
        } else {
            // kalau input string "Januari,Februari"
            $this->attributes['bulan'] = json_encode(explode(',', $value));
        }
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
