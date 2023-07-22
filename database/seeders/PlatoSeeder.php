<?php

namespace Database\Seeders;

use App\Models\Plato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $platos = [
            [
                'nombre_plato' => 'Pizza Base Grande',
                'precio' => '19.95',
                'disponibilidad' => 't',
                'foto' => 'bbqbb'
            ]
        ];
        Plato::insert($platos);
    }
}
