<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendeles_tetel extends Model
{
    /** @use HasFactory<\Database\Factories\RendelesTetelFactory> */
    use HasFactory;

    protected $fillable = [
        'rendelestetel_id',
        'rendeles_id',
        'termek_id',
        'meret_id',
        'mennyiseg',
        'egyseg_ar',
        'fizetes_id',
        'telephely_id'
    ];
}
