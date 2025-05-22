<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'published_year' => $this->faker->year(),
            'author_id' => Author::inRandomOrder()->first()?->id ?? Author::factory(),
        ];
    }
}