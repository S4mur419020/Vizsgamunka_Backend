<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learazas extends Model
{
    /** @use HasFactory<\Database\Factories\LearazasFactory> */
    use HasFactory;

    protected $fillable = [
        'marka',
        'tipus',
        'akcio',
        'kezdodo_datum',
        'zaro_datum'
    ];
}
