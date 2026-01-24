<?php

namespace Database\Seeders;

use App\Models\Termek_valtozatok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TermekValtozatokSeeder extends Seeder
{
    public function run(): void
    {
        Termek_valtozatok::insert([
            [
                'termek_id' => 1,
                'nev' => 'Fehér – 42',
                'elerheto' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
