@extends('layouts.app')

@section('content')
    <h1>Crear nuevo alumno</h1>

    <form method="POST" action="{{ route('alumnos.store') }}" enctype="multipart/form-data">
        @csrf

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}">
        @error('nombre') <div>{{ $message }}</div> @enderror

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" value="{{ old('apellidos') }}">
        @error('apellidos') <div>{{ $message }}</div> @enderror

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email') <div>{{ $message }}</div> @enderror

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" value="{{ old('telefono') }}">
        @error('telefono') <div>{{ $message }}</div> @enderror

        <label for="imagen">Foto (opcional):</label>
        <input type="file" name="imagen">
        @error('imagen') <div>{{ $message }}</div> @enderror

        <button type="submit">Guardar</button>
    </form>
@endsection
