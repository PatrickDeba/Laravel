@extends('layouts.app')

@section('content')
    <h1>Editar alumno</h1>

    <form method="POST" action="{{ route('alumnos.update', $alumno) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre', $alumno->nombre) }}">
        @error('nombre') <div>{{ $message }}</div> @enderror

        <label>Apellidos:</label>
        <input type="text" name="apellidos" value="{{ old('apellidos', $alumno->apellidos) }}">
        @error('apellidos') <div>{{ $message }}</div> @enderror

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $alumno->email) }}">
        @error('email') <div>{{ $message }}</div> @enderror

        <label>Teléfono:</label>
        <input type="text" name="telefono" value="{{ old('telefono', $alumno->telefono) }}">
        @error('telefono') <div>{{ $message }}</div> @enderror

        <label>Foto:</label>
        <input type="file" name="imagen">
        @error('imagen') <div>{{ $message }}</div> @enderror

        <button type="submit">Actualizar</button>
    </form>
@endsection