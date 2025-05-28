<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{

    public function run(): void
    {
        $teams = [
            [
                'name' => 'FC Barcelona',
                'city' => 'Barcelona',
            ],
            [
                'name' => 'Real Madrid',
                'city' => 'Madrid'
            ],
            [
                'name' => 'Atletico de Madrid',
                'city' => 'Madrid'
            ],
            [
                'name' => 'Valencia CF',
                'city' => 'Valencia'
            ],
            [
                'name' => 'Sevilla FC',
                'city' => 'Sevilla'
            ],
            [
                'name' => 'Athletic Club',
                'city' => 'Bilbao'
            ],
            [
                'name' => 'Real Sociedad',
                'city' => 'San Sebastián'
            ],
            [
                'name' => 'Real Betis',
                'city' => 'Sevilla'
            ]
        ];

        foreach ($teams as $team) {
            \App\Models\Team::create($team);
        }
    }
}
