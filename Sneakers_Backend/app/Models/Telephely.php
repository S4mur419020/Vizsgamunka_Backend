<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telephely extends Model
{
    /** @use HasFactory<\Database\Factories\TelephelyFactory> */
    use HasFactory;

    protected $fillable = [
        'id',
        'szekhely_id',
        'nev',
        'tipus',
        'cim',
    ];
}
