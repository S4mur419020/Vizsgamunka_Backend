<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nyelv extends Model
{
    /** @use HasFactory<\Database\Factories\NyelvFactory> */
    use HasFactory;

    protected $fillable = [
        'id',
        'kulcs_nev',
        'nyelv_kod',
        'penznem',

    ];
}
