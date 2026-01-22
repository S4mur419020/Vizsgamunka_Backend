<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ar extends Model
{
    /** @use HasFactory<\Database\Factories\ArFactory> */
    use HasFactory;

    protected $fillable = [
        'akcio',
        'osszeg',
    ];
}
