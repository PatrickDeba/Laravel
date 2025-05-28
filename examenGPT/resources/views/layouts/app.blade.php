<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Paterson')</title>
</head>

<body class="bg-gray-100 text-gray-800">
    {{-- @if (!request()->routeIs('login.form')) --}}
    @include('partials.menu')
    {{-- @endif --}}

    <!-- Contenido de la página -->
    <main class="p-6">
        @yield('content')
    </main>
    
    @include('partials.footer')
</body>

</html>
