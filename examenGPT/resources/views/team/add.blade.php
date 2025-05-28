@extends('layouts.app')
@section('content')
    <h1>Añadir un Team</h1>
    <form action="{{ route('StoreTeam') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="city">Ciudad:</label>
            <input type="text" id="city" name="city" required>
        </div>
        <br>
        <button type="submit">Añadir Equipo</button>
    </form>
    <br>
    <br>
    <button onclick="window.location='{{ route('IndexTeam') }}'">Volver a la lista de Equipo</button>
@endsection
