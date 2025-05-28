@extends('layouts.app')
@section('content')
<h1>Detalles del Jugador: {{$player->name}}</h1>

<img src="{{ asset('storage/imagenes/' . $player->imagen) }}" alt="Foto de {{ $player->name }}" style="max-width: 200px;">
<!-- hay que poner el comando 'php artisan storage:link'
para que la ruta lleve a la carpeta /storage/app/public/imagenes -->

<p><strong>Equipo:</strong> {{ $player->team->name }}</p>
<p><strong>Posición:</strong> {{ $player->position }}</p>
<p><strong>Edad:</strong> {{ $player->age }}</p>

@endsection