<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Author::factory(5)->create()->each(function ($author) {
            $author->books()->saveMany(
                Book::factory(3)->make()
            )->each(function ($book) {
                $book->reviews()->saveMany(
                    Review::factory(2)->make()
                );
            });
        });
    }
}