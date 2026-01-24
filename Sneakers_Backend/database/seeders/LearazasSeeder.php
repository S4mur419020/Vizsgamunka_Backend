<?php

namespace Database\Seeders;

use App\Models\Learazas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LearazasSeeder extends Seeder
{
    public function run(): void
    {
        Learazas::insert([
            [
                'marka' => 'Nike',
                'tipus' => 'Sport',
                'akcio_szazalek' => 20,
                'kezdo_datum' => now(),
                'zaro_datum' => now()->addWeek(),
            ]
        ]);
    }
}
