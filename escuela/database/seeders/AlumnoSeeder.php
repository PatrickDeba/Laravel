<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    public function run()
    {
        // Usando Factory para crear 50 alumnos aleatorios
        Alumno::factory()->count(50)->create();
        // // Insertaremos datos en la clase Alumno
        // $alumnos = [
        //     [
        //         'nombre_ape' => 'Andoni Egaña',
        //         'edad' => 18,
        //         'telefono' => '658741112',
        //         'direccion' => 'Pozas, 33'
        //     ],
        //     [
        //         'nombre_ape' => 'Iñaki Larrinaga',
        //         'edad' => 20,
        //         'telefono' => '658775532',
        //         'direccion' => 'Rodriguez Arias, 54'
        //     ],
        //     [
        //         'nombre_ape' => 'Garazi Pascual',
        //         'edad' => 18,
        //         'telefono' => '699236859',
        //         'direccion' => 'Ornilla, 76'
        //     ]
        // ];

        // // Usar un bucle para crear los alumnos
        // foreach ($alumnos as $data) {
        //     Alumno::create($data);
        // }
    }
}
