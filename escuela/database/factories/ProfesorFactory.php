<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesorFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName(),
            'apellidos' => $this->faker->lastName(),
            'profesion' => $this->faker->randomElement([
                'Lengua', 'Matemáticas', 'Inglés', 'Historia', 'Biología', 'Tecnología'
            ]),
        ];
    }
}