<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{

    public function definition(): array
    {
        return [
            'titulo' => $this->faker->title(),
            'descripcion' => $this->faker->paragraph(),
            'ano_publicacion' => $this->faker->date(),
            'author_id' => null, // lo sobreescribes en el seeder 
        ];
    }
}
