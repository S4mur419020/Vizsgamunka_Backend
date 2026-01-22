<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modositas extends Model
{
    /** @use HasFactory<\Database\Factories\ModositasFactory> */
    use HasFactory;

    protected $fillable = [
        'id',
        'felhasznalo_id',
        'modositas_ideje',
        'tabla_neve',
        'rekord_id',
        'muvelet_tipus',
        'valtozasok',
    ];
}
