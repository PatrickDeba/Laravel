@extends('layouts.app')
@section('content')
    <h1>Añadir un Libro</h1>
    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <div>
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" required>
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea>
        </div>
        <div>
            <label for="ano_publicacion">Año de Publicacion:</label>
            <input type="date" id="ano_publicacion" name="ano_publicacion" required>
        </div>
        <div>
            <label for="autor_id">Autor:</label>
            <select id="autor_id" name="autor_id" required>
                @foreach ($autores as $autor)
                    <option value="{{ $autor->id }}">{{ $autor->name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit">Añadir Autor</button>
    </form>
    <br>
    <br>
    <button onclick="window.location='{{ route('libros.index') }}'">Volver a la lista de Libros</button>
@endsection
