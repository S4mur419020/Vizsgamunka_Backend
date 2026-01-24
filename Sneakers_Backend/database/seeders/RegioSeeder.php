<?php

namespace Database\Seeders;

use App\Models\Regio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class RegioSeeder extends Seeder
{
    public function run(): void
    {
        Regio::insert([
            ['nev' => 'Európa', 'created_at' => now(), 'updated_at' => now()],
            ['nev' => 'USA', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}


