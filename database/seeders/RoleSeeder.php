<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'nombre' => 'Jefe',
                'privilegios' => '1-2-3-4-5-6-7-8-9-10',
                'primero' => true,
                'nombreen' => 'Boss',
            ],
            [
                'nombre' => 'Trabajador',
                'privilegios' => '',
                'primero' => false,
                'nombreen' => 'Worker',
            ],
            [
                'nombre' => 'Cajero',
                'privilegios' => '1-2-3-5-6-8-9',
                'primero' => false,
                'nombreen' => 'Cashier',
            ],
            [
                'nombre' => 'Cocinero',
                'privilegios' => '5-6-7',
                'primero' => false,
                'nombreen' => 'Cook',
            ],
            [
                'nombre' => 'Plancha',
                'privilegios' => '5-6-7',
                'primero' => false,
                'nombreen' => 'Iron',
            ],
        ];
        Role::insert($roles);
    }
}
