<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Book;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, Book $book)
    {
        $request->validate([
            'user_name' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
        ]);

        $book->reviews()->create($request->all());

        return redirect()->route('books.show', $book)->with('success', 'Opinión añadida correctamente.');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return back()->with('success', 'Opinión eliminada.');
    }
}