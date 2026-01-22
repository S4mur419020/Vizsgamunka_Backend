<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keszlet extends Model
{
    /** @use HasFactory<\Database\Factories\KeszletFactory> */
    use HasFactory;

    protected $fillable = [
        'cikkszan',
        'meretvalasztek',
        'szabvany',
        'mennyiseg'
    ];
}
