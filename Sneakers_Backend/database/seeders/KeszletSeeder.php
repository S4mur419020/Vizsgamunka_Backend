<?php

namespace Database\Seeders;

use App\Models\Keszlet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeszletSeeder extends Seeder
{
    public function run(): void
    {
        Keszlet::insert([
            [
                'cikkszam' => 1,
                'meretvalasztek' => 42,
                'szabvany' => 'EU',
                'mennyiseg' => 15,
            ],
            [
                'cikkszam' => 2,
                'meretvalasztek' => 38,
                'szabvany' => 'EU',
                'mennyiseg' => 10,
            ],
        ]);
    }
}
