<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Felhasznalo extends Model
{
    /** @use HasFactory<\Database\Factories\FelhasznaloFactory> */
    use HasFactory;

    protected $fillable = [
        'felhasznalo_id',
        'nev',
        'email',
        'jelszo',
        'telefonszam',
        'regisztracio_datuma',
        'aktiv',
        'nyelv_id',
        'szekhely',
    ];
}
