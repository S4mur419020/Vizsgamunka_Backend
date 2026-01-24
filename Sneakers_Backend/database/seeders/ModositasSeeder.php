<?php

namespace Database\Seeders;

use App\Models\Modositas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModositasSeeder extends Seeder
{
    public function run(): void
    {
        Modositas::insert([
            [
                'felhasznalo_id' => 1,
                'modositas_ideje' => now(),
                'tabla_nev' => 'felhasznalos',
                'rekord_id' => 1,
                'muvelet_tipus' => 'update',
                'valtozasok' => 'Profil adat módosítva',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
