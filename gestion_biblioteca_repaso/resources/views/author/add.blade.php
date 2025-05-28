@extends('layouts.app')
@section('content')
    <h1>Añadir un Autor</h1>
    <form action="{{ route('autores.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="pais">País:</label>
            <input type="text" id="pais" name="pais" required>
        </div>
        <br>
        <button type="submit">Añadir Autor</button>
    </form>
    <br>
    <br>
    <button onclick="window.location='{{ route('autores.index') }}'">Volver a la lista de Autores</button>
@endsection
