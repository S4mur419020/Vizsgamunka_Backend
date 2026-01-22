<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termekek extends Model
{
    /** @use HasFactory<\Database\Factories\TermekekFactory> */
    use HasFactory;
    protected $table = 'termekeks';

    protected $fillable = [
        'nev',
        'marka_id',
        'kategoria_nev',
        'leiras',
        'nem',
        'anyag',
        'elerheto',
        'ar',
        'kep',
    ];


    protected $casts = [
        'elerheto' => 'boolean',
    ];


    public function marka()
    {
        return $this->belongsTo(Markak::class, 'marka_id');
    }


    public function kategoria()
    {
        return $this->belongsTo(
            Kategoriak::class,
            'kategoria_nev',
            'megnevezes'
        );
    }


    public function valtozatok()
    {
        return $this->hasMany(
            Termek_valtozatok::class,
            'termek_id'
        );
    }
}
