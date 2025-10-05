<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Siswa;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'nomor_wa'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime'
    ];

    public function isBendahara(): bool
    {
        return $this->role === 'bendahara';
    }

    public function isWaliMurid(): bool
    {
        return $this->role === 'wali_murid';
    }

    public function isKetuaYayasan(): bool
    {
        return $this->role === 'ketua_yayasan';
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_wali');
    }

    public function verifikasiPembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'verified_by');
    }
}
