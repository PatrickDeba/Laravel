@extends('layouts.app')

@section('content')
    <h1>Autores</h1>

    <a href="{{ route('authors.create') }}">Nuevo autor</a>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach ($authors as $author)
            <li>
                {{ $author->name }} ({{ $author->country }})
                <a href="{{ route('authors.edit', $author) }}">Editar</a>
    
                <form action="{{ route('authors.destroy', $author) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Seguro que deseas eliminar este autor?')">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>

    {{ $authors->links() }}
@endsection