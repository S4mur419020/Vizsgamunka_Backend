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

    public function szekhely()
    {
        return $this->belongsTo(Szekhely::class, 'szekhely_id');
    }


    public function termekek()
    {
        return $this->hasMany(Termekek::class, 'telephely_id');
    }
}
