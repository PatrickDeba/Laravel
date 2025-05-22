@extends('layouts.app')

@section('content')
    <h1>Editar autor</h1>

    <form method="POST" action="{{ route('authors.update', $author) }}">
        @csrf
        @method('PUT')

        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{ old('name', $author->name) }}">
        @error('name') <div>{{ $message }}</div> @enderror

        <label for="country">País:</label>
        <input type="text" name="country" value="{{ old('country', $author->country) }}">
        @error('country') <div>{{ $message }}</div> @enderror

        <button type="submit">Actualizar</button>
    </form>
@endsection