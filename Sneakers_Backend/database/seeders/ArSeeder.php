<?php

namespace Database\Seeders;

use App\Models\ar;
use App\Models\Learazas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArSeeder extends Seeder
{
    public function run(): void
    {
        $akcio = Learazas::first()->akcio;

        ar::insert([
            [
                'akcio' => $akcio,
                'osszeg' => 19990,
                'vip' => false,
            ]
        ]);
    }
}
