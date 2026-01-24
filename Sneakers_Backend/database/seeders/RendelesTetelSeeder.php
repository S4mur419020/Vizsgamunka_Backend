<?php

namespace Database\Seeders;

use App\Models\Rendeles_tetel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RendelesTetelSeeder extends Seeder
{
    public function run(): void
    {
        Rendeles_tetel::insert([
            [
                'rendeles_id' => 1,
                'termek_id' => 1,
                'meret_id' => 36,
                'mennyiseg' => 2,
                'egyseg_ar' => 19990,  // ← itt az ar helyett
                'fizetes_id' => 1,
                'telephely_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rendeles_id' => 2,
                'termek_id' => 2,
                'meret_id' => 37,
                'mennyiseg' => 1,
                'egyseg_ar' => 24990,
                'fizetes_id' => 1,
                'telephely_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
