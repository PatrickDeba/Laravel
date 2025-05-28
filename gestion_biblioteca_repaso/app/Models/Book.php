<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Author;
use App\Models\Review;

class Book extends Model
{
    use HasFactory;

    public function autor()
    {
        return $this->belongsTo(Author::class, 'author_id'); // Relacion N:1
    }

    public function review()
    {
        return $this->hasMany(Review::class ); // Relacion 1:N
    }
}
