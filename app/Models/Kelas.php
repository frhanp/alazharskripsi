<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $fillable = ['nama'];

    public function siswas()
    {
        return $this->hasMany(Siswa::class, 'id_kelas');
    }

    public function getJenjang(): string
    {
        // Jika nama kelas mengandung "TK" (case-insensitive)
        if (Str::contains($this->nama, 'TK', true)) {
            return 'TK';
        }

        // Jika tidak, kita anggap itu SD
        return 'SD';
    }
}
