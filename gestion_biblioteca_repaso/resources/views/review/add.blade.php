@extends('layouts.app')
@section('content')
    <h1>Añadir una Review</h1>
    <form action="{{ route('opiniones.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre_usuario">Nombre Usuario:</label>
            <input type="text" id="nombre_usuario" name="nombre_usuario" required>
        </div>
        <div>
            <label for="valoracion">Valoracion:</label>
            <input type="range" id="valoracion" name="valoracion" min="1" max="5" required>
        </div>
        <div>
            <label for="book_id">Libro:</label>
            <select id="book_id" name="book_id" required>
                @foreach ($libros as $libro)
                    <option value="{{ $libro->id }}">{{ $libro->titulo }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="comentario">Comentario:</label>
            <textarea id="comentario" name="comentario" required></textarea>
        </div>
        <br>
        <button type="submit">Añadir Opinion</button>
    </form>
    <br>
    <br>
    <button onclick="window.location='{{ route('opiniones.index') }}'">Volver a la lista de Opiniones</button>
@endsection
