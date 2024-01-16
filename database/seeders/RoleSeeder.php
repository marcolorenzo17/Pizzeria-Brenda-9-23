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
                'id' => 1,
                'nombre' => 'Jefe',
                'privilegios' => 'verres-canres-pagres-vercli-borval-borcom-estrec-pagrec-borrec-vercur',
            ],
        ];
        Role::insert($roles);
    }
}
