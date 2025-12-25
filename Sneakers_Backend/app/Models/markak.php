<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Markak extends Model
{
    /** @use HasFactory<\Database\Factories\MarkakFactory> */
    use HasFactory;
    protected $table = 'markaks';

    protected $fillable = [
        'nev',
    ];

    public function termekek()
    {
        return $this->hasMany(Termekek::class, 'marka_id');
    }
}
