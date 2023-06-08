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
                'alergenos' => 'img/alergenos/gluten.png'
            ],
            [
                'name' => 'Pizza Base PEQUEÑA (Masa fresca, tomate y queso)',
                'price' => 5,
                'image' => 'img/ingredientes/basepequeña.jpg',
                'type' => 'Base',
                'alergenos' => 'img/alergenos/gluten.png'
            ],
            [
                'name' => 'Pizza Base SIN GLUTEN (Masa, tomate y queso)',
                'price' => 5,
                'image' => 'img/ingredientes/basesingluten.png',
                'type' => 'Base',
                'alergenos' => ''
            ],
            [
                'name' => 'Jamón York',
                'price' => 1.50,
                'image' => 'img/ingredientes/jamonyork.png',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/soja-lacteos.png'
            ],
            [
                'name' => 'Pimientos',
                'price' => 1.50,
                'image' => 'img/ingredientes/pimientos.png',
                'type' => 'Ingrediente',
                'alergenos' => ''
            ],
            [
                'name' => 'Olivas negras',
                'price' => 1.50,
                'image' => 'img/ingredientes/olivasnegras.png',
                'type' => 'Ingrediente',
                'alergenos' => ''
            ],
            [
                'name' => 'Alcaparras',
                'price' => 1.50,
                'image' => 'img/ingredientes/alcaparras.png',
                'type' => 'Ingrediente',
                'alergenos' => ''
            ],
            [
                'name' => 'Bacon',
                'price' => 1.50,
                'image' => 'img/ingredientes/beicon.png',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/soja-lacteos.png'
            ],
            [
                'name' => 'Cebolla',
                'price' => 1.50,
                'image' => 'img/ingredientes/cebolla.png',
                'type' => 'Ingrediente',
                'alergenos' => ''
            ],
            [
                'name' => 'Huevo',
                'price' => 1.50,
                'image' => 'img/ingredientes/huevo.png',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/huevos.png'
            ],
            [
                'name' => 'Salami',
                'price' => 1.50,
                'image' => 'img/ingredientes/salami.png',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/soja-lacteos.png'
            ],
            [
                'name' => 'Chorizo',
                'price' => 1.50,
                'image' => 'img/ingredientes/chorizo.png',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/soja-lacteos.png'
            ],
            [
                'name' => 'Champiñones frescos',
                'price' => 1.50,
                'image' => 'img/ingredientes/champiñones.png',
                'type' => 'Ingrediente',
                'alergenos' => ''
            ],
            [
                'name' => 'Salchichas',
                'price' => 1.50,
                'image' => 'img/ingredientes/salchichas.png',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/soja-lacteos.png'
            ],
            [
                'name' => 'Hamburguesa',
                'price' => 1.50,
                'image' => 'img/ingredientes/hamburguesa.png',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/soja-lacteos-gluten.png'
            ],
            [
                'name' => 'Atún',
                'price' => 1.50,
                'image' => 'img/ingredientes/atun.png',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/pescado.png'
            ],
            [
                'name' => 'Alcachofas',
                'price' => 1.50,
                'image' => 'img/ingredientes/alcachofas.png',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/dioxido.png'
            ],
            [
                'name' => 'Espárragos',
                'price' => 1.50,
                'image' => 'img/ingredientes/esparragos.png',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/dioxido.png'
            ],
            [
                'name' => 'Rodajas de tomate',
                'price' => 1.50,
                'image' => 'img/ingredientes/tomate.jpeg',
                'type' => 'Ingrediente',
                'alergenos' => ''
            ],
            [
                'name' => 'Rodajas de berenjena',
                'price' => 1.50,
                'image' => 'img/ingredientes/berenjena.jpg',
                'type' => 'Ingrediente',
                'alergenos' => ''
            ],
            [
                'name' => 'Ajo',
                'price' => 1.50,
                'image' => 'img/ingredientes/ajo.jpg',
                'type' => 'Ingrediente',
                'alergenos' => ''
            ],
            [
                'name' => 'Cebolla caramelizada',
                'price' => 1.50,
                'image' => 'img/ingredientes/cebollacaramel.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/lacteos.png'
            ],
            [
                'name' => 'Extra de tomate',
                'price' => 1.50,
                'image' => 'img/ingredientes/extratomate.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/dioxido.png'
            ],
            [
                'name' => 'Anchoas',
                'price' => 1.80,
                'image' => 'img/ingredientes/anchoas.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/pescado.png'
            ],
            [
                'name' => 'Pepperoni',
                'price' => 1.80,
                'image' => 'img/ingredientes/pepperoni.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/soja-lacteos.png'
            ],
            [
                'name' => 'Roquefort',
                'price' => 1.80,
                'image' => 'img/ingredientes/roquefort.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/lacteos.png'
            ],
            [
                'name' => 'Extra de queso',
                'price' => 1.80,
                'image' => 'img/ingredientes/extraqueso.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/lacteos.png'
            ],
            [
                'name' => 'Piña',
                'price' => 1.80,
                'image' => 'img/ingredientes/piña.jpg',
                'type' => 'Ingrediente',
                'alergenos' => ''
            ],
            [
                'name' => 'Gambas',
                'price' => 1.80,
                'image' => 'img/ingredientes/gambas.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/crustaceos.png'
            ],
            [
                'name' => 'Carne picada',
                'price' => 1.80,
                'image' => 'img/ingredientes/carnepicada.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/soja-lacteos-gluten-apio.png'
            ],
            [
                'name' => 'Pollo',
                'price' => 1.80,
                'image' => 'img/ingredientes/tirasdepollo.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/soja-lacteos-gluten.png'
            ],
            [
                'name' => 'Rulo de cabra',
                'price' => 2.30,
                'image' => 'img/ingredientes/rulodecabra.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/lacteos.png'
            ],
            [
                'name' => 'Carne de taco',
                'price' => 2.30,
                'image' => 'img/ingredientes/carnedetaco.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/soja-lacteos-gluten.png'
            ],
            [
                'name' => 'Palometa',
                'price' => 2.30,
                'image' => 'img/ingredientes/palometa.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'img/alergenos/lacteos-pescado.png'
            ],
        ];
        Ingrediente::insert($ingredientes);
    }
}
