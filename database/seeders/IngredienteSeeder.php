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
                'habilitado' => true,
                'nameen' => 'LARGE Base Pizza (Fresh dough, Tomato and Cheese)'
            ],
            [
                'name' => 'Pizza Base PEQUEÑA (Masa fresca, tomate y queso)',
                'price' => 5,
                'image' => 'img/ingredientes/basepequeña.jpg',
                'type' => 'Base',
                'alergenos' => 'gluten',
                'habilitado' => true,
                'nameen' => 'SMALL Base Pizza (Fresh dough, Tomato and Cheese)'
            ],
            [
                'name' => 'Pizza Base SIN GLUTEN (Masa, tomate y queso)',
                'price' => 5,
                'image' => 'img/ingredientes/basesingluten.png',
                'type' => 'Base',
                'alergenos' => '',
                'habilitado' => true,
                'nameen' => 'GLUTEN-FREE Base Pizza (Dough, Tomato and Cheese)'
            ],
            [
                'name' => 'Jamón York',
                'price' => 1.50,
                'image' => 'img/ingredientes/jamonyork.png',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos',
                'habilitado' => true,
                'nameen' => 'Cooked Ham'
            ],
            [
                'name' => 'Pimientos',
                'price' => 1.50,
                'image' => 'img/ingredientes/pimientos.png',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true,
                'nameen' => 'Peppers'
            ],
            [
                'name' => 'Olivas negras',
                'price' => 1.50,
                'image' => 'img/ingredientes/olivasnegras.png',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true,
                'nameen' => 'Black Olives'
            ],
            [
                'name' => 'Alcaparras',
                'price' => 1.50,
                'image' => 'img/ingredientes/alcaparras.png',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true,
                'nameen' => 'Capers'
            ],
            [
                'name' => 'Bacon',
                'price' => 1.50,
                'image' => 'img/ingredientes/beicon.png',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos',
                'habilitado' => true,
                'nameen' => 'Bacon'
            ],
            [
                'name' => 'Cebolla',
                'price' => 1.50,
                'image' => 'img/ingredientes/cebolla.png',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true,
                'nameen' => 'Onion'
            ],
            [
                'name' => 'Huevo',
                'price' => 1.50,
                'image' => 'img/ingredientes/huevo.png',
                'type' => 'Ingrediente',
                'alergenos' => 'huevos',
                'habilitado' => true,
                'nameen' => 'Egg'
            ],
            [
                'name' => 'Salami',
                'price' => 1.50,
                'image' => 'img/ingredientes/salami.png',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos',
                'habilitado' => true,
                'nameen' => 'Salami'
            ],
            [
                'name' => 'Chorizo',
                'price' => 1.50,
                'image' => 'img/ingredientes/chorizo.png',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos',
                'habilitado' => true,
                'nameen' => 'Chorizo'
            ],
            [
                'name' => 'Champiñones frescos',
                'price' => 1.50,
                'image' => 'img/ingredientes/champiñones.png',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true,
                'nameen' => 'Fresh Mushrooms'
            ],
            [
                'name' => 'Salchichas',
                'price' => 1.50,
                'image' => 'img/ingredientes/salchichas.png',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos',
                'habilitado' => true,
                'nameen' => 'Sausages'
            ],
            [
                'name' => 'Hamburguesa',
                'price' => 1.50,
                'image' => 'img/ingredientes/hamburguesa.png',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos-gluten',
                'habilitado' => true,
                'nameen' => 'Burger'
            ],
            [
                'name' => 'Atún',
                'price' => 1.50,
                'image' => 'img/ingredientes/atun.png',
                'type' => 'Ingrediente',
                'alergenos' => 'pescado',
                'habilitado' => true,
                'nameen' => 'Tuna'
            ],
            [
                'name' => 'Alcachofas',
                'price' => 1.50,
                'image' => 'img/ingredientes/alcachofas.png',
                'type' => 'Ingrediente',
                'alergenos' => 'dioxido',
                'habilitado' => true,
                'nameen' => 'Artichokes'
            ],
            [
                'name' => 'Espárragos',
                'price' => 1.50,
                'image' => 'img/ingredientes/esparragos.png',
                'type' => 'Ingrediente',
                'alergenos' => 'dioxido',
                'habilitado' => true,
                'nameen' => 'Asparagus'
            ],
            [
                'name' => 'Rodajas de tomate',
                'price' => 1.50,
                'image' => 'img/ingredientes/tomate.jpeg',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true,
                'nameen' => 'Tomato Slices'
            ],
            [
                'name' => 'Rodajas de berenjena',
                'price' => 1.50,
                'image' => 'img/ingredientes/berenjena.jpg',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true,
                'nameen' => 'Eggplant Slices'
            ],
            [
                'name' => 'Ajo',
                'price' => 1.50,
                'image' => 'img/ingredientes/ajo.jpg',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true,
                'nameen' => 'Garlic'
            ],
            [
                'name' => 'Cebolla caramelizada',
                'price' => 1.50,
                'image' => 'img/ingredientes/cebollacaramel.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'lacteos',
                'habilitado' => true,
                'nameen' => 'Caramelized Onion'
            ],
            [
                'name' => 'Extra de tomate',
                'price' => 1.50,
                'image' => 'img/ingredientes/extratomate.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'dioxido',
                'habilitado' => true,
                'nameen' => 'Extra Tomato'
            ],
            [
                'name' => 'Anchoas',
                'price' => 1.80,
                'image' => 'img/ingredientes/anchoas.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'pescado',
                'habilitado' => true,
                'nameen' => 'Anchovies'
            ],
            [
                'name' => 'Pepperoni',
                'price' => 1.80,
                'image' => 'img/ingredientes/pepperoni.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos',
                'habilitado' => true,
                'nameen' => 'Pepperoni'
            ],
            [
                'name' => 'Roquefort',
                'price' => 1.80,
                'image' => 'img/ingredientes/roquefort.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'lacteos',
                'habilitado' => true,
                'nameen' => 'Roquefort'
            ],
            [
                'name' => 'Extra de queso',
                'price' => 1.80,
                'image' => 'img/ingredientes/extraqueso.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'lacteos',
                'habilitado' => true,
                'nameen' => 'Extra Cheese'
            ],
            [
                'name' => 'Piña',
                'price' => 1.80,
                'image' => 'img/ingredientes/piña.jpg',
                'type' => 'Ingrediente',
                'alergenos' => '',
                'habilitado' => true,
                'nameen' => 'Pineapple'
            ],
            [
                'name' => 'Gambas',
                'price' => 1.80,
                'image' => 'img/ingredientes/gambas.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'crustaceos',
                'habilitado' => true,
                'nameen' => 'Shrimp'
            ],
            [
                'name' => 'Carne picada',
                'price' => 1.80,
                'image' => 'img/ingredientes/carnepicada.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos-gluten-apio',
                'habilitado' => true,
                'nameen' => 'Minced Meat'
            ],
            [
                'name' => 'Pollo',
                'price' => 1.80,
                'image' => 'img/ingredientes/tirasdepollo.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos-gluten',
                'habilitado' => true,
                'nameen' => 'Chicken'
            ],
            [
                'name' => 'Rulo de cabra',
                'price' => 2.30,
                'image' => 'img/ingredientes/rulodecabra.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'lacteos',
                'habilitado' => true,
                'nameen' => 'Goat Cheese'
            ],
            [
                'name' => 'Carne de taco',
                'price' => 2.30,
                'image' => 'img/ingredientes/carnedetaco.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'soja-lacteos-gluten',
                'habilitado' => true,
                'nameen' => 'Taco Meat'
            ],
            [
                'name' => 'Palometa',
                'price' => 2.30,
                'image' => 'img/ingredientes/palometa.jpg',
                'type' => 'Ingrediente',
                'alergenos' => 'lacteos-pescado',
                'habilitado' => true,
                'nameen' => 'Bream'
            ],
        ];
        Ingrediente::insert($ingredientes);
    }
}
