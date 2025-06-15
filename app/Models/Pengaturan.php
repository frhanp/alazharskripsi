<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $table = 'pengaturan';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'key', 'value'
    ];

    public static function getValue(string $key, $default = null)
    {
        return optional(static::where('key', $key)->first())->value ?? $default;
    }

    public static function isMidtransActive(): bool
    {
        return static::getValue('midtrans_active', 'false') === 'true';
    }
}
