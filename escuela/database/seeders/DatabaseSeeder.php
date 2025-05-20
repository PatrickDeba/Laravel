<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AlumnoSeeder;
use Database\Seeders\ProfesorSeeder;
use Database\Seeders\CursoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llamamos a los seeders en orden
        $this->call([
            AlumnoSeeder::class,
            ProfesorSeeder::class,
            CursoSeeder::class,
        ]);
    }
}