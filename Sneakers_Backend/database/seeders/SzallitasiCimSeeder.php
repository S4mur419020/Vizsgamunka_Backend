<?php

namespace Database\Seeders;

use App\Models\Szallitasi_cim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SzallitasiCimSeeder extends Seeder
{
    public function run(): void
    {
        Szallitasi_cim::insert([
            [
                'felhasznalo_id' => 1,
                'orszag' => 'Magyarország',
                'iranyitoszam' => '1011',
                'varos' => 'Budapest',
                'utca_szam' => 'Teszt utca 5.',
                'megjegyzes' => 'Teszt cím megjegyzés',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'felhasznalo_id' => 2,
                'orszag' => 'Magyarország',
                'iranyitoszam' => '4024',
                'varos' => 'Debrecen',
                'utca_szam' => 'Minta utca 10.',
                'megjegyzes' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
