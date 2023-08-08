<?php

namespace Database\Seeders;

use App\Models\Ingrediente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredientes = [
            [
                'name' => 'Pizza Base GRANDE (Masa fresca, tomate y queso)',
                'price' => 6.50,
                'image' => 'img/ingredientes/basegrande.jpg',
                'type' => 'Base',
                'alergenos' => 'gluten',
                'habilitado' => true
            ],
            [
                'name' => 'Pizza Base PEQUEÑA (Masa fresca, tomate y queso)',
                'price' => 5,
                'image' => 'img/ingredientes/basepequeña.jpg',
                'type' => 'Base',
                'alergenos' => 'gluten',
                'habilitado' => true
            ],
            [
                'name' => 'Pizza Base SIN GLUTEN (Masa, tomate y queso)',
                'price' => 5,
                'image' => 'img/ingredientes/basesingluten.png',
                'type' => 'Base',
                'alergenos' => '',
                'habilitado' => true
            ],
            [
                'name' => 'Jamón York',
                'price' => 1.50,
                'image' => 'img/ingredientes/jamonyork.png',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos',
                'habilitado' => true
            ],
            [
                'name' => 'Pimientos',
                'price' => 1.50,
                'image' => 'img/ingredientes/pimientos.png',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true
            ],
            [
                'name' => 'Olivas negras',
                'price' => 1.50,
                'image' => 'img/ingredientes/olivasnegras.png',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true
            ],
            [
                'name' => 'Alcaparras',
                'price' => 1.50,
                'image' => 'img/ingredientes/alcaparras.png',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true
            ],
            [
                'name' => 'Bacon',
                'price' => 1.50,
                'image' => 'img/ingredientes/beicon.png',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos',
                'habilitado' => true
            ],
            [
                'name' => 'Cebolla',
                'price' => 1.50,
                'image' => 'img/ingredientes/cebolla.png',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true
            ],
            [
                'name' => 'Huevo',
                'price' => 1.50,
                'image' => 'img/ingredientes/huevo.png',
                'type' => 'Ingrediente',
                'alergenos' => 'huevos',
                'habilitado' => true
            ],
            [
                'name' => 'Salami',
                'price' => 1.50,
                'image' => 'img/ingredientes/salami.png',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos',
                'habilitado' => true
            ],
            [
                'name' => 'Chorizo',
                'price' => 1.50,
                'image' => 'img/ingredientes/chorizo.png',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos',
                'habilitado' => true
            ],
            [
                'name' => 'Champiñones frescos',
                'price' => 1.50,
                'image' => 'img/ingredientes/champiñones.png',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true
            ],
            [
                'name' => 'Salchichas',
                'price' => 1.50,
                'image' => 'img/ingredientes/salchichas.png',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos',
                'habilitado' => true
            ],
            [
                'name' => 'Hamburguesa',
                'price' => 1.50,
                'image' => 'img/ingredientes/hamburguesa.png',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos-gluten',
                'habilitado' => true
            ],
            [
                'name' => 'Atún',
                'price' => 1.50,
                'image' => 'img/ingredientes/atun.png',
                'type' => 'Ingrediente',
                'alergenos' => 'pescado',
                'habilitado' => true
            ],
            [
                'name' => 'Alcachofas',
                'price' => 1.50,
                'image' => 'img/ingredientes/alcachofas.png',
                'type' => 'Ingrediente',
                'alergenos' => 'dioxido',
                'habilitado' => true
            ],
            [
                'name' => 'Espárragos',
                'price' => 1.50,
                'image' => 'img/ingredientes/esparragos.png',
                'type' => 'Ingrediente',
                'alergenos' => 'dioxido',
                'habilitado' => true
            ],
            [
                'name' => 'Rodajas de tomate',
                'price' => 1.50,
                'image' => 'img/ingredientes/tomate.jpeg',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true
            ],
            [
                'name' => 'Rodajas de berenjena',
                'price' => 1.50,
                'image' => 'img/ingredientes/berenjena.jpg',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true
            ],
            [
                'name' => 'Ajo',
                'price' => 1.50,
                'image' => 'img/ingredientes/ajo.jpg',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true
            ],
            [
                'name' => 'Cebolla caramelizada',
                'price' => 1.50,
                'image' => 'img/ingredientes/cebollacaramel.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'lacteos',
                'habilitado' => true
            ],
            [
                'name' => 'Extra de tomate',
                'price' => 1.50,
                'image' => 'img/ingredientes/extratomate.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'dioxido',
                'habilitado' => true
            ],
            [
                'name' => 'Anchoas',
                'price' => 1.80,
                'image' => 'img/ingredientes/anchoas.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'pescado',
                'habilitado' => true
            ],
            [
                'name' => 'Pepperoni',
                'price' => 1.80,
                'image' => 'img/ingredientes/pepperoni.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos',
                'habilitado' => true
            ],
            [
                'name' => 'Roquefort',
                'price' => 1.80,
                'image' => 'img/ingredientes/roquefort.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'lacteos',
                'habilitado' => true
            ],
            [
                'name' => 'Extra de queso',
                'price' => 1.80,
                'image' => 'img/ingredientes/extraqueso.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'lacteos',
                'habilitado' => true
            ],
            [
                'name' => 'Piña',
                'price' => 1.80,
                'image' => 'img/ingredientes/piña.jpg',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true
            ],
            [
                'name' => 'Gambas',
                'price' => 1.80,
                'image' => 'img/ingredientes/gambas.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'crustaceos',
                'habilitado' => true
            ],
            [
                'name' => 'Carne picada',
                'price' => 1.80,
                'image' => 'img/ingredientes/carnepicada.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos-gluten-apio',
                'habilitado' => true
            ],
            [
                'name' => 'Pollo',
                'price' => 1.80,
                'image' => 'img/ingredientes/tirasdepollo.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos-gluten',
                'habilitado' => true
            ],
            [
                'name' => 'Rulo de cabra',
                'price' => 2.30,
                'image' => 'img/ingredientes/rulodecabra.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'lacteos',
                'habilitado' => true
            ],
            [
                'name' => 'Carne de taco',
                'price' => 2.30,
                'image' => 'img/ingredientes/carnedetaco.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos-gluten',
                'habilitado' => true
            ],
            [
                'name' => 'Palometa',
                'price' => 2.30,
                'image' => 'img/ingredientes/palometa.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'lacteos-pescado',
                'habilitado' => true
            ],
        ];
        Ingrediente::insert($ingredientes);
    }
}
