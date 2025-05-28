<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class ReviewController extends Controller
{
    public function index()
    {
        $reviews = \App\Models\Review::with('book.autor')->get();
        // book es el nombre de la funcion en el modelo Review que define la relación con el modelo Book
        // autor es el nombre de la funcion en el modelo Book que define la relación con el modelo Author.
        return view('review.index', compact('reviews')); // nombre_carpeta.nombre_vista
    }
    public function add()
    {
        $libros = Book::all(); // Obtener todos los libros
        return view('review.add', compact('libros'));
    }
    public function store(Request $request)
    {
        $book = new \App\Models\Review();
        $book->nombre_usuario = $request->input('nombre_usuario');
        $book->valoracion = $request->input('valoracion');
        $book->comentario = $request->input('comentario');
        $book->book_id = $request->input('book_id');
        $book->save();

        return redirect()->route('opiniones.index')->with('success', 'Autor creado exitosamente.');
    }
}
