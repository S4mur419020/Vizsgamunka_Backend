<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ar extends Model
{
    /** @use HasFactory<\Database\Factories\ArFactory> */
    use HasFactory;


    protected $primaryKey = 'akcio';
    public $incrementing = false;

    protected $fillable = [
        'akcio',
        'osszeg',
        'vip',
    ];

    protected $casts = [
        'osszeg' => 'integer',
        'vip' => 'boolean',
    ];

    public function learazas()
    {
        return $this->hasOne(Learazas::class, 'akcio', 'akcio');
    }
}
