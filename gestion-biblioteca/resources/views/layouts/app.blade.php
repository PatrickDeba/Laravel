<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión Biblioteca</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 2rem; }
        nav a { margin-right: 1rem; text-decoration: none; font-weight: bold; }
        main { margin-top: 2rem; }
    </style>
</head>
<body>

    <nav>
        <a href="{{ route('authors.index') }}">Autores</a>
        <a href="{{ route('books.index') }}">Libros</a>
    </nav>

    <main>
        @yield('content')
    </main>

</body>
</html>