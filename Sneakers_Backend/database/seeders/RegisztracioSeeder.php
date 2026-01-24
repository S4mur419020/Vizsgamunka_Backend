<?php

namespace Database\Seeders;

use App\Models\Regisztracio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegisztracioSeeder extends Seeder
{
    public function run(): void
    {
        Regisztracio::insert([
            [
                'felhasznalo_id' => 1,
                'datum' => now(),
                'felulet' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'felhasznalo_id' => 2,
                'datum' => now(),
                'felulet' => 'mobile',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
