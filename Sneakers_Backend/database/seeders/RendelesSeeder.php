<?php

namespace Database\Seeders;

use App\Models\Rendeles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RendelesSeeder extends Seeder
{
    public function run(): void
    {
        Rendeles::insert([
            [
                'felhasznalo_id' => 1,    
                'fizetes_id' => 1,        
                'osszeg' => 19990,
                'allapot' => 'feldolgozás alatt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'felhasznalo_id' => 2,
                'fizetes_id' => 2,
                'osszeg' => 24990,
                'allapot' => 'feldolgozás alatt',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
