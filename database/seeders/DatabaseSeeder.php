<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wisata;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {



Wisata::create([
    'nama' => 'Curug Cimahi',
    'deskripsi' => 'Curug dengan air terjun pelangi yang indah.',
    'latitude' => -6.8297,
    'longitude' => 107.5793,
]);

Wisata::create([
    'nama' => 'Farmhouse Lembang',
    'deskripsi' => 'Tempat wisata dengan nuansa Eropa dan peternakan mini.',
    'latitude' => -6.8179,
    'longitude' => 107.6169,
]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
