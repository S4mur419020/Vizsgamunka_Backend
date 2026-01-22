<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kosar extends Model
{
    /** @use HasFactory<\Database\Factories\KosarFactory> */
    use HasFactory;

    protected $fillable = [
        'kosar_id',
        'felhasznalo_id',
        'termek_id',
        'meret_id',
        'mennyiseg',
        'hozzaadas_datuma',
        
    ];
}
