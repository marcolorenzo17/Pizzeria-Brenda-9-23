<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Pizza Mariachi',
                'price' => 13,
                'description' => 'Ingredientes: Taco, Jalapeño, Guacamole, Nachos.',
                'image' => 'img/mariachi.jpg',
                'type' => 'Pizza'
            ],
            [
                'name' => 'Pizza Vegetal',
                'price' => 11,
                'description' => 'Ingredientes: Champiñones, Olivas, Pimientos, Cebolla, Parmesano.',
                'image' => 'img/vegetal.jpg',
                'type' => 'Pizza'
            ],
            [
                'name' => 'Pizza Americana',
                'price' => 12,
                'description' => 'Ingredientes: Bacon en loncha, Pepperoni, Champiñones, Cheddar.',
                'image' => 'img/americana.jpg',
                'type' => 'Pizza'
            ],
            [
                'name' => 'Pizza Cheeseburger',
                'price' => 12,
                'description' => 'Ingredientes: Hamburguesa, Cebolla, Tomate natural, Cheddar, Salsa Cheeseburger, Bacon.',
                'image' => 'img/cheeseburger.jpg',
                'type' => 'Pizza'
            ],
            [
                'name' => 'Pizza Kebab',
                'price' => 12,
                'description' => 'Ingredientes: Pollo, Verduras, Salsa Kebab.',
                'image' => 'img/kebab.jpg',
                'type' => 'Pizza'
            ],
            [
                'name' => 'Pizza Carbonara',
                'price' => 13,
                'description' => 'Ingredientes: Salsa Carbonara, Cebolla, Champiñón, Bacon, Parmesano.',
                'image' => 'img/carbonara.jpg',
                'type' => 'Pizza'
            ],
            [
                'name' => 'Pizza Barbacoa',
                'price' => 13,
                'description' => 'Ingredientes: Pollo, Bacon, Carne picada, Salsa barbacoa.',
                'image' => 'img/barbacoa.jpg',
                'type' => 'Pizza'
            ],
            [
                'name' => 'Pizza Calzone',
                'price' => 10,
                'description' => 'Con dos ingredientes a elegir.',
                'image' => 'img/calzone.jpg',
                'type' => 'Pizza'
            ],
            [
                'name' => 'Pizza Andaluza',
                'price' => 12,
                'description' => 'Ingredientes: Lomo sajonia, Pimiento, Cebolla, Rodajas de tomate, champiñones, ajo, salsa verde.',
                'image' => 'img/andaluza.jpg',
                'type' => 'Pizza'
            ],
            [
                'name' => 'Pizza Gourmet',
                'price' => 11,
                'description' => 'Ingredientes: Rulo de cabra y cebolla caramelizada.',
                'image' => 'img/pgourmet.jpg',
                'type' => 'Pizza'
            ],
            [
                'name' => 'Pizza de Taco Mexicano',
                'price' => 11.50,
                'description' => 'Ingredientes: Carne picante de taco.',
                'image' => 'img/taco.jpg',
                'type' => 'Pizza'
            ],
            [
                'name' => 'Pizza Cuatro Quesos',
                'price' => 11,
                'description' => 'Deliciosa mezcla de quesos: Roquefort, Edam, Mozarella, Parmesano.',
                'image' => 'img/cuatro.jpg',
                'type' => 'Pizza'
            ],
            [
                'name' => 'Hamburguesa de Buey',
                'price' => 6,
                'description' => 'Extras: Queso Edam (0.50 €), Queso Cheddar (1 €), Huevo (0.80 €), Bacon (0.50 €).',
                'image' => 'img/hbuey.jpg',
                'type' => 'Hamburguesa'
            ],
            [
                'name' => 'Hamburguesa de Pollo al Curry',
                'price' => 6,
                'description' => 'Con verdurita.',
                'image' => 'img/hpollo.jpg',
                'type' => 'Hamburguesa'
            ],
            [
                'name' => 'Hamburguesa con Salsa al Whisky',
                'price' => 8,
                'description' => 'Hamburguesa de buey, encurtido de cebolla escalonia. Salsa al Whisky y bacon.',
                'image' => 'img/hwhisky.jpg',
                'type' => 'Hamburguesa'
            ],
            [
                'name' => 'Queséame Burger',
                'price' => 8,
                'description' => 'Hamburguesa de buey con salsa queséame, bacon y jalapeño.',
                'image' => 'img/hqueseame.jpg',
                'type' => 'Hamburguesa'
            ],
            [
                'name' => 'Hamburguesa de Ternera',
                'price' => 4.50,
                'description' => 'Extras: Queso Edam (0.50 €), Queso Cheddar (1 €), Huevo (0.80 €), Bacon (0.50 €).',
                'image' => 'img/hternera.jpg',
                'type' => 'Hamburguesa'
            ],
            [
                'name' => 'Hamburguesa Gourmet',
                'price' => 8,
                'description' => 'Hamburguesa de buey. Ingredientes: Rulo de cabra y Cebolla caramelizada.',
                'image' => 'img/gourmet.jpg',
                'type' => 'Hamburguesa'
            ],
            [
                'name' => 'Hamburguesa de Pollo',
                'price' => 4.20,
                'description' => 'Extras: Queso Edam (0.50 €), Queso Cheddar (1 €), Huevo (0.80 €), Bacon (0.50 €).',
                'image' => 'img/hnormal.jpg',
                'type' => 'Hamburguesa'
            ],
            [
                'name' => 'Sándwich Panadero',
                'price' => 5.80,
                'description' => 'Ingredientes: Jamón de York, Queso, Pollo, Bacon, Huevo, Lechuga, Tomate, Salsa vegetal.',
                'image' => 'img/spanadero.jpg',
                'type' => 'Sándwich'
            ],
            [
                'name' => 'Sándwich Vegetal o de Pollo',
                'price' => 4.50,
                'description' => 'Ingredientes: Verduras o pollo, Salsa vegetal.',
                'image' => 'img/svegetal.jpg',
                'type' => 'Sándwich'
            ],
            [
                'name' => 'Sándwich Especial',
                'price' => 5,
                'description' => 'Ingredientes: Queso, Bacon, Huevo, Salsa vegetal, Jamón de York.',
                'image' => 'img/especial.jpg',
                'type' => 'Sándwich'
            ],
            [
                'name' => 'Espagueti Pescatore',
                'price' => 7.50,
                'description' => 'Ingredientes: Salsa marinera y Salazones.',
                'image' => 'img/pescatore.jpg',
                'type' => 'Pasta'
            ],
            [
                'name' => 'Espagueti Primavera',
                'price' => 7,
                'description' => 'Ingredientes: Verdura fresca y pollo',
                'image' => 'img/primavera.jpg',
                'type' => 'Pasta'
            ],
            [
                'name' => 'Tallarines Roquefort',
                'price' => 7,
                'description' => 'Ingredientes: Salsa Roquefort',
                'image' => 'img/roquefort.jpg',
                'type' => 'Pasta'
            ],
            [
                'name' => 'Tallarines Salmón',
                'price' => 7,
                'description' => 'Ingredientes: Salmón y salsa de salmón.',
                'image' => 'img/salmon.jpg',
                'type' => 'Pasta'
            ],
            [
                'name' => 'Macarrones',
                'price' => 7,
                'description' => '',
                'image' => 'img/macarrones.jpg',
                'type' => 'Pasta'
            ],
            [
                'name' => 'Risotto Roquefort',
                'price' => 7,
                'description' => 'Ingredientes: Queso Roquefort',
                'image' => 'img/risotto.jpg',
                'type' => 'Arroz'
            ],
            [
                'name' => 'Risotto Mixto',
                'price' => 7,
                'description' => 'Ingredientes: Verduras y queso',
                'image' => 'img/mixto.jpg',
                'type' => 'Arroz'
            ],
            [
                'name' => 'Arroz Frito',
                'price' => 7,
                'description' => 'Ingredientes: Verduras, Maíz, Gambas',
                'image' => 'img/arrozfrito.jpg',
                'type' => 'Arroz'
            ],
            [
                'name' => 'Baguette Brenda',
                'price' => 5,
                'description' => 'Ingredientes: Palometa, Pepinillos, Huevo duro, Queso Philadelphia.',
                'image' => 'img/bbrenda.jpg',
                'type' => 'Baguette'
            ],
            [
                'name' => 'Baguette Panadero',
                'price' => 6.50,
                'description' => 'Ingredientes: Jamón de York, Queso, Pollo, Bacon, Huevo, Lechuga, Tomate, Salsa.',
                'image' => 'img/panadero.jpg',
                'type' => 'Baguette'
            ],
            [
                'name' => 'Ensalada de Arroz',
                'price' => 6,
                'description' => 'Ingredientes: Arroz Basmati, Huevo, Jamón de York, Mayonesa, Anchoas, Olivas negras, Morrón.',
                'image' => 'img/ensarroz.jpg',
                'type' => 'Ensalada'
            ],
            [
                'name' => 'Ensalada César',
                'price' => 6.20,
                'description' => 'Ingredientes: Cherry, Lechuga, Jamón de York, Queso, Nuggets, Picatosted, Salsa César.',
                'image' => 'img/cesar.jpg',
                'type' => 'Ensalada'
            ],
            [
                'name' => 'Patatas Deluxe',
                'price' => 3.50,
                'description' => 'Ingredientes: Gajos.',
                'image' => 'img/deluxe.jpg',
                'type' => 'Complemento'
            ],
            [
                'name' => 'Bolas de Queso - 8 Unidades',
                'price' => 4,
                'description' => 'Ingredientes: Rellenas de Queso Cheddar con un toque de jalapeño.',
                'image' => 'img/bolaqueso.jpg',
                'type' => 'Complemento'
            ],
            [
                'name' => 'Nachos con queso',
                'price' => 5,
                'description' => 'Ingredientes: Extra para nachos: Carne picada o Carne de Taco (1.50 €).',
                'image' => 'img/nachoqueso.jpg',
                'type' => 'Complemento'
            ],
            [
                'name' => 'Nachos con queso y guacamole',
                'price' => 5.50,
                'description' => 'Ingredientes: Queso y guacamole',
                'image' => 'img/guacamole.jpg',
                'type' => 'Complemento'
            ],
            [
                'name' => 'Perrito normal',
                'price' => 3.50,
                'description' => 'Ingredientes: Extras: Queso Edam (0.50 €), Queso Cheddar (1 €), Huevo (0.80 €), Bacon (0.50 €)',
                'image' => 'img/perrito.jpg',
                'type' => 'Perrito'
            ],
            [
                'name' => 'Perrito con taco y queso',
                'price' => 5,
                'description' => 'Ingredientes: Carne de taco y queso.',
                'image' => 'img/tacoyqueso.jpg',
                'type' => 'Perrito'
            ],
        ];
        Product::insert($products);
    }
}
