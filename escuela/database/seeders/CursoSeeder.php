<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{

    public function run()
    {
        // Insertaremos datos en la clase Curso
        $cursos = [
            [
                'nombre' => 'Matemáticas Básicas',
                'nivel' => 'Inicial',
                'horasAcademicas' => '40',
                'profesor_id' => 1
            ],
            [
                'nombre' => 'Ciencias Naturales Avanzadas',
                'nivel' => 'Avanzado',
                'horasAcademicas' => '60',
                'profesor_id' => 2
            ],
            [
                'nombre' => 'Historia Universal',
                'nivel' => 'Intermedio',
                'horasAcademicas' => '50',
                'profesor_id' => 3
            ]
        ];

        // Usar un bucle para crear los cursos
        foreach ($cursos as $data) {
            Curso::create($data);
        }
    }
}
