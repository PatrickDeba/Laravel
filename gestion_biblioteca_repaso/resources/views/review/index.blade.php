@extends('layouts.app')
@section('content')
    <h1>Lista de opiniones</h1>
    <ul>
        @foreach ($reviews as $review)
            <li>
                <strong>{{ $review->book->titulo }}</strong> - {{ $review->book->autor->name }}:
                {{ $review->comentario }} ({{ $review->valoracion }}/5)
            </li>
        @endforeach
    </ul>
    <button onclick="window.location='{{ route('opiniones.add') }}'">Añadir Opinion</button>
@endsection
