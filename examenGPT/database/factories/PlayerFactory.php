<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Team;

class PlayerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'position' => $this->faker->randomElement(['Goalkeeper', 'Defender', 'Midfielder', 'Forward']),
            'team_id' => Team::inRandomOrder()->first()->id,
            'imagen' => $this->faker->randomElement(['img1.jpg', 'img2.jpeg']),
        ];
    }
}
