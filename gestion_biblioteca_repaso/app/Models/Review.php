<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Book;


class Review extends Model
{
    use HasFactory;
    public function book(){
        return $this->belongsTo(Book::class, 'book_id'); // Relacion N:1
    }
}
