<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $autores = Author::factory(5)->create();

        $libros = Book::factory(15)->make()->each(function ($libro) use ($autores) {
            $libro->author_id = $autores->random()->id;
            $libro->save();

            // Añadir entre 1 y 3 opiniones a cada libro
            Review::factory(rand(1, 3))->create([
                'book_id' => $libro->id,
            ]);
        });

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
