<?php

namespace Database\Seeders;

use App\Models\Szekhely;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SzekhelySeeder extends Seeder
{
    public function run(): void
    {
        Szekhely::insert([
            [
                'id' => 1,            
                'nev' => 'Budapest Központ',
                'cim' => 'Fő utca 1',
                'orszag' => 'Magyarország',
                'varos' => 'Budapest',
                'iranyitoszam' => '1011',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
