<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName(),
            'apellidos' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->optional()->phoneNumber(),
            'imagen' => null, // puedes poner una imagen genérica o dejarlo como null
        ];
    }
}