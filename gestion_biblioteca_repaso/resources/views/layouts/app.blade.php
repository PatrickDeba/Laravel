<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca</title>
</head>
<body>


<div style="width: 100%; margin: 0 auto 1rem auto; display: flex; justify-content: space-around; background: #fff; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-radius: 0.5rem; padding: 0.5rem;">
    <a href="{{ route('autores.index') }}" style="color: #2563eb; font-weight: 600; text-decoration: none;" onmouseover="this.style.textDecoration='underline';this.style.color='#1e40af';" onmouseout="this.style.textDecoration='none';this.style.color='#2563eb';">Ver Autores</a>
    <a href="{{ route('libros.index') }}" style="color: #16a34a; font-weight: 600; text-decoration: none;" onmouseover="this.style.textDecoration='underline';this.style.color='#166534';" onmouseout="this.style.textDecoration='none';this.style.color='#16a34a';">Ver Libros</a>
    <a href="{{ route('opiniones.index') }}" style="color: #7c3aed; font-weight: 600; text-decoration: none;" onmouseover="this.style.textDecoration='underline';this.style.color='#5b21b6';" onmouseout="this.style.textDecoration='none';this.style.color='#7c3aed';">Ver Opiniones</a>
</div>
@yield('content')
</body>
</html>