<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TeamSeeder::class); // Llama al seeder de equipos
        Player::factory()->count(50)->create(); // Crea 50 equipos

        foreach (Player::all() as $player) {
            $player->age = rand(18, 40);
            $player->save();
        } // Asigna una edad aleatoria entre 18 y 40 a cada jugador

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
