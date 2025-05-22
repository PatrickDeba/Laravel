<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->words(2, true), // Ejemplo: “Programación Avanzada”
            'nivel' => $this->faker->randomElement(['ESO', 'Bachillerato', 'FP', 'Primaria']),
            // No ponemos 'profesor_id' porque lo asignamos manualmente en DatabaseSeeder
        ];
    }
}