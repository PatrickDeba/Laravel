@extends('layouts.app')
@section('content')
    <h1>Equipos</h1>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Ciudad</th>
        </thead>
        <tbody>
            @foreach ($teams as $team)
                <tr>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->city }}</td>
                    <td>
                        <form action="{{ route('BorrarTeam', $team->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">❌</button>
                        </form>
                    </td>
                    <td> <button onclick="window.location='{{ route('EditarTeam', $team->id) }}'">✏️</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button onclick="window.location='{{ route('AñadirTeam') }}'">Añadir Equipo</button>
@endsection
