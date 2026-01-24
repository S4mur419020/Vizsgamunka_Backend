<?php

namespace Database\Seeders;

use App\Models\Termekek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TermekekSeeder extends Seeder
{
    public function run(): void
    {
        Termekek::insert([
            [
                'nev' => 'Nike Air Force 1',
                'kategoria_id' => 1,
                'marka_id' => 1,
                'nem' => 'ferfi',
                'anyag' => 'bőr',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nev' => 'Adidas Superstar',
                'kategoria_id' => 1,
                'marka_id' => 2,
                'nem' => 'no',
                'anyag' => 'textil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
