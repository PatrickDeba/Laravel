<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{

    public function definition(): array
    {
        return [
            'book_id' => null, // lo sobreescribes en el seeder
            'nombre_usuario' => $this->faker->name(),
            'valoracion' => $this->faker->numberBetween(1, 5),
            'comentario' => $this->faker->paragraph(),
        ];
    }
}
