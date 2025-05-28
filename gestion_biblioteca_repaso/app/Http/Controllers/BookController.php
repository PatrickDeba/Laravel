<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;


class BookController extends Controller
{
    public function index()
    {
        $books = \App\Models\Book::with('autor')->get(); //autor es el nombre de la función en el modelo Book que define la relación con el modelo Author.
        return view('book.index', compact('books')); //nombre_carpeta.nombre_vista
    }
    public function add()
    {
        $autores = Author::all(); // Obtener todos los autores
        return view('book.add', compact('autores')); // Pasarlos a la vista
    }
    public function store(Request $request)
    {
        $book = new \App\Models\Book();
        $book->titulo = $request->input('titulo');
        $book->descripcion = $request->input('descripcion');
        $book->ano_publicacion = $request->input('ano_publicacion');
        $book->author_id = $request->input('autor_id'); 
        $book->save();

        return redirect()->route('libros.index')->with('success', 'Autor creado exitosamente.');
    }
}
