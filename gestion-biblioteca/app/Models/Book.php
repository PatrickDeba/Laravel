<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'description', 'published_year', 'author_id'];

    public function author()
    {
        return $this->belongsTo(Author::class); // un libro pertenece a un autor -> relacion N:1
    }

    public function reviews()
    {
        return $this->hasMany(Review::class); // un libro puede tener muchas reseñas -> relacion 1:N
    }
}
