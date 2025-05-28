@extends('layouts.app')

@section('content')
    <h1>Detalles del Team</h1>
    <form method="POST" action="{{ route('UpdateTeam', $team->id) }}">
        @csrf
        @method('PUT') <!-- Importante: Laravel usa esto para diferenciar PUT -->

        <strong>Nombre:</strong>
        <input type="text" name="name" value="{{ $team->name }}"><br>

        <strong>Ciudad:</strong>
        <input type="text" name="city" value="{{ $team->city }}"><br><br>

        <button type="submit">Aceptar</button>
    </form>

    <a href="{{ route('IndexTeam') }}">Volver a la lista</a>
@endsection
