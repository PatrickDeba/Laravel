<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profesor;
use App\Models\Curso;
use App\Models\Alumno;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Crear 5 profesores
        $profesores = Profesor::factory(5)->create();

        // Crear 10 cursos y asignar profesor aleatorio
        $cursos = Curso::factory(10)->make()->each(function ($curso) use ($profesores) {
            $curso->profesor_id = $profesores->random()->id;
            $curso->save();
        });

        // Crear 20 alumnos y matricularlos en 2 cursos aleatorios cada uno
        Alumno::factory(20)->create()->each(function ($alumno) use ($cursos) {
            $alumno->cursos()->attach($cursos->random(2));
        });
    }
}
