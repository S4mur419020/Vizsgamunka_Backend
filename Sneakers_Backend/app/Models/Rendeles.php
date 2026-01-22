<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendeles extends Model
{
    /** @use HasFactory<\Database\Factories\RendelesFactory> */
    use HasFactory;

    protected $fillable = [
        'felhasznalo_id',
        'szallitasi_cim_id',
        'ar',
        'status', 
        'fizetes_mod',
        'datum',
    ];

    
    public function felhasznalo() {
        return $this->belongsTo(User::class, 'felhasznalo_id');
    }

    
    public function szallitasiCim() {
        return $this->belongsTo(Szallitasi_cim::class, 'szallitasi_cim_id');
    }

    
    public function tetel() {
        return $this->hasMany(Rendeles_tetel::class, 'rendeles_id');
    }
}
