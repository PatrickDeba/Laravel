@extends('layouts.app')

@section('content')
    <h1>Crear nuevo libro</h1>

    <form method="POST" action="{{ route('books.store') }}">
        @csrf

        <label>Título:</label>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title') <div>{{ $message }}</div> @enderror

        <label>Descripción:</label>
        <textarea name="description">{{ old('description') }}</textarea>
        @error('description') <div>{{ $message }}</div> @enderror

        <label>Año de publicación:</label>
        <input type="number" name="published_year" value="{{ old('published_year') }}">
        @error('published_year') <div>{{ $message }}</div> @enderror

        <label>Autor:</label>
        <select name="author_id">
            @foreach($authors as $author)
                <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>
                    {{ $author->name }}
                </option>
            @endforeach
        </select>
        @error('author_id') <div>{{ $message }}</div> @enderror

        <button type="submit">Guardar</button>
    </form>
@endsection