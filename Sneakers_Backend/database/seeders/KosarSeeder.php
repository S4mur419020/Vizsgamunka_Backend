<?php

namespace Database\Seeders;

use App\Models\Kosar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KosarSeeder extends Seeder
{
    public function run(): void
    {
        Kosar::insert([
            [
                'felhasznalo_id' => 1,
                'termek_id' => 1,
                'meret_id' => 42,
                'mennyiseg' => 2,
                'hozzaadas_datum' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
