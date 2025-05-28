@extends('layouts.app')
@section('content')
    <h1>Lista de Autores</h1>

    <ul>
        @foreach ($authors as $author)
            <li>
                {{ $author->name }} ({{ $author->pais }})
                <button onclick="window.location='{{ route('autores.edit', $author->id) }}'">✏️</button>
                <form action="{{ route('autores.destroy', $author->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">❌</button>
                </form>
            </li>
        @endforeach
    </ul>

    <button onclick="window.location='{{ route('autores.add') }}'">Añadir Autor</button>
@endsection
