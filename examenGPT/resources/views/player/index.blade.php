@extends('layouts.app')
@section('content')
    <h1>Jugadores</h1>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Equipo</th>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->team->name }}</td>
                    <td><button onclick="window.location='{{ route('VerDetalles', $player->id) }}'">Ver Detalles</button>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
