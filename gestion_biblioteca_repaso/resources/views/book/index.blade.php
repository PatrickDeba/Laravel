@extends('layouts.app')
@section('content')
    <h1>Lista de Libros</h1>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book->titulo }} ({{ $book->ano_publicacion }}) escrita por {{ $book->autor->name }}</li>
        @endforeach
    </ul>
    <button onclick="window.location='{{ route('libros.add') }}'">Añadir Libro</button>
@endsection
