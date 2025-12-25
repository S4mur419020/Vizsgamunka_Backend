<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoriak extends Model
{
    /** @use HasFactory<\Database\Factories\KategoriakFactory> */
    use HasFactory;
    protected $table = 'kategoriaks';

    protected $fillable = [
        'megnevezes',
    ];

    public function termekek()
    {
        return $this->hasMany(Termekek::class, 'kategoria_nev', 'megnevezes');
    }
}
