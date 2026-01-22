<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regisztracio extends Model
{
    /** @use HasFactory<\Database\Factories\RegisztracioFactory> */
    use HasFactory;

    protected $fillable = [
        'regisztracio_id',
        'felhasznalo_id',
        'datum',
        'felulet',
    ];
}
