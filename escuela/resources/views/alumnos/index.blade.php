@extends('layouts.app')

@section('content')
    <h1>Alumnos</h1>

    <a href="{{ route('alumnos.create') }}">Nuevo alumno</a>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach ($alumnos as $alumno)
            <li>
                {{ $alumno->nombre }} {{ $alumno->apellidos }} ({{ $alumno->email }})
                <a href="{{ route('alumnos.edit', $alumno) }}">Editar</a>
    
                <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Seguro que deseas eliminar este alumno?')">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>

    {{ $alumnos->links() }}
@endsection
