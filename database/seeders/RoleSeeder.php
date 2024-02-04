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
                'privilegios' => '1-2-3-4-5-6-7-8-9-10-11',
                'primero' => true,
                'nombreen' => 'Boss',
            ],
            [
                'nombre' => 'Trabajador',
                'privilegios' => '1',
                'primero' => false,
                'nombreen' => 'Worker',
            ],
            [
                'nombre' => 'Cajero',
                'privilegios' => '1-2-5-6-8-9-11',
                'primero' => false,
                'nombreen' => 'Cashier',
            ],
            [
                'nombre' => 'Cocinero',
                'privilegios' => '1-5-6-7',
                'primero' => false,
                'nombreen' => 'Cook',
            ],
            [
                'nombre' => 'Plancha',
                'privilegios' => '1-5-6-7',
                'primero' => false,
                'nombreen' => 'Iron',
            ],
        ];
        Role::insert($roles);
    }
}
