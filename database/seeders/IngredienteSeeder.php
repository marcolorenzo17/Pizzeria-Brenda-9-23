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
                'type' => 'Base'
            ],
            [
                'name' => 'Pizza Base PEQUEÑA (Masa fresca, tomate y queso)',
                'price' => 5,
                'image' => 'img/ingredientes/basepequeña.jpg',
                'type' => 'Base'
            ],
            [
                'name' => 'Pizza Base SIN GLUTEN (Masa, tomate y queso)',
                'price' => 5,
                'image' => 'img/ingredientes/basesingluten.png',
                'type' => 'Base'
            ],
            [
                'name' => 'Jamón York',
                'price' => 1.50,
                'image' => 'img/ingredientes/jamonyork.png',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Pimientos',
                'price' => 1.50,
                'image' => 'img/ingredientes/pimientos.png',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Olivas negras',
                'price' => 1.50,
                'image' => 'img/ingredientes/olivasnegras.png',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Alcaparras',
                'price' => 1.50,
                'image' => 'img/ingredientes/alcaparras.png',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Bacon',
                'price' => 1.50,
                'image' => 'img/ingredientes/beicon.png',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Cebolla',
                'price' => 1.50,
                'image' => 'img/ingredientes/cebolla.png',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Huevo',
                'price' => 1.50,
                'image' => 'img/ingredientes/huevo.png',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Salami',
                'price' => 1.50,
                'image' => 'img/ingredientes/salami.png',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Chorizo',
                'price' => 1.50,
                'image' => 'img/ingredientes/chorizo.png',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Champiñones frescos',
                'price' => 1.50,
                'image' => 'img/ingredientes/champiñones.png',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Salchichas',
                'price' => 1.50,
                'image' => 'img/ingredientes/salchichas.png',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Hamburguesa',
                'price' => 1.50,
                'image' => 'img/ingredientes/hamburguesa.png',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Atún',
                'price' => 1.50,
                'image' => 'img/ingredientes/atun.png',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Alcachofas',
                'price' => 1.50,
                'image' => 'img/ingredientes/alcachofas.png',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Espárragos',
                'price' => 1.50,
                'image' => 'img/ingredientes/alcachofas.png',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Rodajas de tomate',
                'price' => 1.50,
                'image' => 'img/ingredientes/tomate.jpeg',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Rodajas de berenjena',
                'price' => 1.50,
                'image' => 'img/ingredientes/berenjena.jpg',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Ajo',
                'price' => 1.50,
                'image' => 'img/ingredientes/ajo.jpg',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Cebolla caramelizada',
                'price' => 1.50,
                'image' => 'img/ingredientes/cebollacaramel.jpg',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Extra de tomate',
                'price' => 1.50,
                'image' => 'img/ingredientes/extratomate.jpg',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Anchoas',
                'price' => 1.80,
                'image' => 'img/ingredientes/anchoas.jpg',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Pepperoni',
                'price' => 1.80,
                'image' => 'img/ingredientes/pepperoni.jpg',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Roquefort',
                'price' => 1.80,
                'image' => 'img/ingredientes/roquefort.jpg',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Extra de queso',
                'price' => 1.80,
                'image' => 'img/ingredientes/extraqueso.jpg',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Piña',
                'price' => 1.80,
                'image' => 'img/ingredientes/piña.jpg',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Gambas',
                'price' => 1.80,
                'image' => 'img/ingredientes/gambas.jpg',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Carne picada',
                'price' => 1.80,
                'image' => 'img/ingredientes/carnepicada.jpg',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Pollo',
                'price' => 1.80,
                'image' => 'img/ingredientes/tirasdepollo.jpg',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Rulo de cabra',
                'price' => 2.30,
                'image' => 'img/ingredientes/rulodecabra.jpg',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Carne de taco',
                'price' => 2.30,
                'image' => 'img/ingredientes/carnedetaco.jpg',
                'type' => 'Ingrediente'
            ],
            [
                'name' => 'Palometa',
                'price' => 2.30,
                'image' => 'img/ingredientes/palometa.jpg',
                'type' => 'Ingrediente'
            ],
        ];
        Ingrediente::insert($ingredientes);
    }
}
