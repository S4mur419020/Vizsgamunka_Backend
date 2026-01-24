<?php

namespace Database\Seeders;

use App\Models\Felhasznalo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FelhasznaloSeeder extends Seeder
{
    public function run(): void
    {
        Felhasznalo::insert([
            [
                'felhasznalo_id' => 1,
                'nev' => 'Teszt Felhasznalo 1',
                'email' => 'teszt1@example.com',
                'jelszo' => bcrypt('password'),
                'telefonszam' => '0612345678',
                'regisztracio_datuma' => now(),
                'aktiv' => true,
                'nyelv_id' => 1,
                'szekhely_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'felhasznalo_id' => 2,
                'nev' => 'Teszt Felhasznalo 2',
                'email' => 'teszt2@example.com',
                'jelszo' => bcrypt('password'),
                'telefonszam' => '0612345679',
                'regisztracio_datuma' => now(),
                'aktiv' => true,
                'nyelv_id' => 1,
                'szekhely_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
