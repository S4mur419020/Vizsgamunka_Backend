<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meret extends Model
{
    /** @use HasFactory<\Database\Factories\MeretFactory> */
    use HasFactory;

    protected $fillable = [
        'meretvalasztek',
    ];
}
