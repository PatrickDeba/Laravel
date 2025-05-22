@extends('layouts.app')

@section('content')
    <h1>Crear nuevo autor</h1>

    <form method="POST" action="{{ route('authors.store') }}">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name') <div>{{ $message }}</div> @enderror

        <label for="country">País:</label>
        <input type="text" name="country" value="{{ old('country') }}">
        @error('country') <div>{{ $message }}</div> @enderror

        <button type="submit">Guardar</button>
    </form>
@endsection