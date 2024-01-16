<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'marco.lorenzo@iesdonana.org',
            'password' => bcrypt('UrMaiyorAdumono_17'),
            'admin' => true,
            'validado' => true,
            'role' => 'Jefe',
            'puntos' => 0,
            'restapuntos' => 0,
            'promocion' => false,
            'inmediato' => false,
            'direccion' => 'C/ Padre Lerchundi, 3',
            'telefono' => '638 42 12 54',
            'nuevo' => false,
            'id_role' => 1,
        ]);
    }
}
