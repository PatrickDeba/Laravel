@extends('layouts.app')

@section('content')
    <h1>{{ $book->title }}</h1>

    <p><strong>Autor:</strong> {{ $book->author->name }}</p>
    <p><strong>Año:</strong> {{ $book->published_year }}</p>
    <p><strong>Descripción:</strong> {{ $book->description }}</p>

    <hr>

    <h2>Opiniones</h2>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach ($book->reviews as $review)
            <li>
                <strong>{{ $review->user_name }}</strong> — {{ $review->rating }}/5<br>
                {{ $review->comment }}
                <form action="{{ route('reviews.destroy', $review) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Eliminar opinión?')">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>

    <hr>

    <h3>Añadir opinión</h3>

    <form method="POST" action="{{ route('reviews.store', $book) }}">
        @csrf

        <label>Nombre:</label>
        <input type="text" name="user_name" value="{{ old('user_name') }}">
        @error('user_name') <div>{{ $message }}</div> @enderror

        <label>Puntuación (1-5):</label>
        <input type="number" name="rating" min="1" max="5" value="{{ old('rating') }}">
        @error('rating') <div>{{ $message }}</div> @enderror

        <label>Comentario:</label>
        <textarea name="comment">{{ old('comment') }}</textarea>
        @error('comment') <div>{{ $message }}</div> @enderror

        <button type="submit">Enviar opinión</button>
    </form>

    <br>
    <a href="{{ route('books.index') }}">← Volver a libros</a>
@endsection