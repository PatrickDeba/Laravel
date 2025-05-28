@extends('layouts.app')

@section('content')
    <h1>Detalles del Autor</h1>
    <form method="POST" action="{{ route('autores.update', $author->id) }}">
        @csrf
        @method('PUT') <!-- Importante: Laravel usa esto para diferenciar PUT -->

        <strong>Nombre:</strong>
        <input type="text" name="name" value="{{ $author->name }}"><br>

        <strong>País:</strong>
        <input type="text" name="pais" value="{{ $author->pais }}"><br><br>

        <button type="submit">Aceptar</button>
    </form>

    <a href="{{ route('autores.index') }}">Volver a la lista</a>
@endsection
