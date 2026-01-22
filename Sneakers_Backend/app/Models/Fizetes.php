<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fizetes extends Model
{
    /** @use HasFactory<\Database\Factories\FizetesFactory> */
    use HasFactory;

    protected $fillable = [
        'fizetesimod_id',
        'fizetesi_mod',
        'tranzakcio_id',
        'statusz',
        'datum',
        'felhasznalo_id',
    ];
}
