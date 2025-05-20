<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profesor;

class ProfesorSeeder extends Seeder
{

    public function run()
    {
        // Insertaremos datos en la clase Profesor
        $profesores = [
            [
                'nombreApellido' => 'Juan Pérez',
                'profesion' => 'Matemáticas',
                'gradoAcademico' => 'Licenciado en Educación',
                'telefono' => '654123987'
            ],
            [
                'nombreApellido' => 'Marta Gómez',
                'profesion' => 'Ciencias Naturales',
                'gradoAcademico' => 'Doctora en Biología',
                'telefono' => '658745236'
            ],
            [
                'nombreApellido' => 'Carlos López',
                'profesion' => 'Historia',
                'gradoAcademico' => 'Licenciado en Historia',
                'telefono' => '657894321'
            ]
        ];

        // Usar un bucle para crear los profesores
        foreach ($profesores as $data) {
            Profesor::create($data);
        }
    }
}
