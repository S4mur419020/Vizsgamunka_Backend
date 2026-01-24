<?php

namespace Database\Seeders;

use App\Models\Meret;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MeretSeeder extends Seeder
{
    public function run(): void
    {
        Meret::insert([
            ['meretvalasztek' => 36, 'created_at' => now(), 'updated_at' => now()],
            ['meretvalasztek' => 37, 'created_at' => now(), 'updated_at' => now()],
            ['meretvalasztek' => 38, 'created_at' => now(), 'updated_at' => now()],
            ['meretvalasztek' => 39, 'created_at' => now(), 'updated_at' => now()],
            ['meretvalasztek' => 40, 'created_at' => now(), 'updated_at' => now()],
            ['meretvalasztek' => 41, 'created_at' => now(), 'updated_at' => now()],
            ['meretvalasztek' => 42, 'created_at' => now(), 'updated_at' => now()],
            ['meretvalasztek' => 43, 'created_at' => now(), 'updated_at' => now()],
            ['meretvalasztek' => 44, 'created_at' => now(), 'updated_at' => now()],
            ['meretvalasztek' => 45, 'created_at' => now(), 'updated_at' => now()],
            ['meretvalasztek' => 46, 'created_at' => now(), 'updated_at' => now()],
            ['meretvalasztek' => 47, 'created_at' => now(), 'updated_at' => now()],
            ['meretvalasztek' => 48, 'created_at' => now(), 'updated_at' => now()],
            ['meretvalasztek' => 49, 'created_at' => now(), 'updated_at' => now()],
            ['meretvalasztek' => 50, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
