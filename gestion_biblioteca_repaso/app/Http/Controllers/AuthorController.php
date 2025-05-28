<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = \App\Models\Author::all();
        return view('author.index', compact('authors')); // nombre_carpeta.nombre_vista
    }
    public function add()
    {
        return view('author.add');
    }
    public function store(Request $request)
    {
        $author = new \App\Models\Author();
        $author->name = $request->input('name');
        $author->pais = $request->input('pais');
        $author->save();

        return redirect()->route('autores.index')->with('success', 'Autor creado exitosamente.');
    }

    public function edit($id)
    {
        $author = \App\Models\Author::findOrFail($id);
        return view('author.edit', compact('author'));
    }
    public function update(Request $request, $id)
    {
        $author = \App\Models\Author::findOrFail($id);
        $author->name = $request->input('name');
        $author->pais = $request->input('pais');
        $author->save();

        return redirect()->route('autores.index')->with('success', 'Autor actualizado correctamente.');
    }
    public function destroy($id)
    {
        $author = \App\Models\Author::findOrFail($id);
        $author->delete();

        return redirect()->route('autores.index')->with('success', 'Autor eliminado correctamente.');
    }
}
