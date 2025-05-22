@extends('layouts.app')

@section('content')
    <h1>Libros</h1>

    <a href="{{ route('books.create') }}">Nuevo libro</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach ($books as $book)
            <li>
                {{ $book->title }} - {{ $book->author->name }} ({{ $book->published_year }})
                <a href="{{ route('books.edit', $book) }}">Editar</a>

                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        onclick="return confirm('¿Seguro que deseas eliminar este libro?')">Eliminar</button>
                </form>
                <a href="{{ route('books.show', $book) }}">Ver</a>
            </li>
        @endforeach
    </ul>

    {{ $books->links() }}
@endsection
