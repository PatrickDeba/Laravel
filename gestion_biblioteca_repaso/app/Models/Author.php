<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Testing\Fluent\Concerns\Has;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'pais',
    ];
    public function book()
    {
        return $this->hasMany(Book::class); // Relacion 1:N
    }
}
