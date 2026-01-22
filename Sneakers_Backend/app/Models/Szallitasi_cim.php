<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szallitasi_cim extends Model
{
    /** @use HasFactory<\Database\Factories\SzallitasiCimFactory> */
    use HasFactory;

    protected $fillable = [
        'szallitasi_cim_id',
        'felhasznalo_id',
        'orszag',
        'iranyitoszam',
        'varos',
        'utca_szam',
        'megjegyzes'
    ];
}
