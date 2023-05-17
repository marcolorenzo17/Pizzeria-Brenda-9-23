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
                'type' => 'Pizza',
                'alergenos' => 'img/alergenos/gluten-lacteos.png'
            ],
            [
                'name' => 'Pizza Vegetal',
                'price' => 11,
                'description' => 'Ingredientes: Champiñones, Olivas, Pimientos, Cebolla, Parmesano.',
                'image' => 'img/vegetal.jpg',
                'type' => 'Pizza',
                'alergenos' => 'img/alergenos/lacteos.png'
            ],
            [
                'name' => 'Pizza Americana',
                'price' => 12,
                'description' => 'Ingredientes: Bacon en loncha, Pepperoni, Champiñones, Cheddar.',
                'image' => 'img/americana.jpg',
                'type' => 'Pizza',
                'alergenos' => 'img/alergenos/lacteos.png'
            ],
            [
                'name' => 'Pizza Cheeseburger',
                'price' => 12,
                'description' => 'Ingredientes: Hamburguesa, Cebolla, Tomate natural, Cheddar, Salsa Cheeseburger, Bacon.',
                'image' => 'img/cheeseburger.jpg',
                'type' => 'Pizza',
                'alergenos' => 'img/alergenos/mostaza-sesamo-dioxido.png'
            ],
            [
                'name' => 'Pizza Kebab',
                'price' => 12,
                'description' => 'Ingredientes: Pollo, Verduras, Salsa Kebab.',
                'image' => 'img/kebab.jpg',
                'type' => 'Pizza',
                'alergenos' => 'img/alergenos/cascara.png'
            ],
            [
                'name' => 'Pizza Carbonara',
                'price' => 13,
                'description' => 'Ingredientes: Salsa Carbonara, Cebolla, Champiñón, Bacon, Parmesano.',
                'image' => 'img/carbonara.jpg',
                'type' => 'Pizza',
                'alergenos' => 'img/alergenos/soja.png'
            ],
            [
                'name' => 'Pizza Barbacoa',
                'price' => 13,
                'description' => 'Ingredientes: Pollo, Bacon, Carne picada, Salsa barbacoa.',
                'image' => 'img/barbacoa.jpg',
                'type' => 'Pizza',
                'alergenos' => 'img/alergenos/cascara-mostaza-dioxido-apio.png'
            ],
            [
                'name' => 'Pizza Calzone',
                'price' => 10,
                'description' => 'Con dos ingredientes a elegir.',
                'image' => 'img/calzone.jpg',
                'type' => 'Pizza',
                'alergenos' => 'img/alergenos/huevos.png'
            ],
            [
                'name' => 'Pizza Andaluza',
                'price' => 12,
                'description' => 'Ingredientes: Lomo sajonia, Pimiento, Cebolla, Rodajas de tomate, champiñones, ajo, salsa verde.',
                'image' => 'img/andaluza.jpg',
                'type' => 'Pizza',
                'alergenos' => ''
            ],
            [
                'name' => 'Pizza Gourmet',
                'price' => 11,
                'description' => 'Ingredientes: Rulo de cabra y cebolla caramelizada.',
                'image' => 'img/pgourmet.jpg',
                'type' => 'Pizza',
                'alergenos' => 'img/alergenos/lacteos.png'
            ],
            [
                'name' => 'Pizza de Taco Mexicano',
                'price' => 11.50,
                'description' => 'Ingredientes: Carne picante de taco.',
                'image' => 'img/taco.jpg',
                'type' => 'Pizza',
                'alergenos' => 'img/alergenos/soja.png'
            ],
            [
                'name' => 'Pizza Cuatro Quesos',
                'price' => 11,
                'description' => 'Deliciosa mezcla de quesos: Roquefort, Edam, Mozarella, Parmesano.',
                'image' => 'img/cuatro.jpg',
                'type' => 'Pizza',
                'alergenos' => ''
            ],
            [
                'name' => 'Pizza 4 Estaciones',
                'price' => 11,
                'description' => 'Ingredientes: Jamón York, Pimiento, Olivas, Champiñones, Alcaparras, Alcachofas, Anchoas.',
                'image' => 'img/cuatroest.jpg',
                'type' => 'Pizza',
                'alergenos' => 'img/alergenos/pescado.png'
            ],
            [
                'name' => 'Pizza Muerte por Queso',
                'price' => 12,
                'description' => 'Ingredientes: Mozzarella, Cheddar, Roquefort, Brie, Parmesano',
                'image' => 'img/muerte.jpg',
                'type' => 'Pizza',
                'alergenos' => 'img/alergenos/lacteos.png'
            ],
            [
                'name' => 'Hamburguesa de Buey',
                'price' => 6,
                'description' => 'Extras: Queso Edam (0.50 €), Queso Cheddar (1 €), Huevo (0.80 €), Bacon (0.50 €).',
                'image' => 'img/hbuey.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => 'img/alergenos/lacteos-soja.png'
            ],
            [
                'name' => 'Hamburguesa de Pollo al Curry',
                'price' => 6,
                'description' => 'Con verdurita.',
                'image' => 'img/hpollo.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => 'img/alergenos/gluten-apio-cascara-mostaza-sesamo.png'
            ],
            [
                'name' => 'Hamburguesa con Salsa al Whisky',
                'price' => 8,
                'description' => 'Hamburguesa de buey, encurtido de cebolla escalonia. Salsa al Whisky y bacon.',
                'image' => 'img/hwhisky.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => ''
            ],
            [
                'name' => 'Queséame Burger',
                'price' => 8,
                'description' => 'Hamburguesa de buey con salsa queséame, bacon y jalapeño.',
                'image' => 'img/hqueseame.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => 'img/alergenos/lacteos-soja.png'
            ],
            [
                'name' => 'Hamburguesa de Ternera',
                'price' => 4.50,
                'description' => 'Extras: Queso Edam (0.50 €), Queso Cheddar (1 €), Huevo (0.80 €), Bacon (0.50 €).',
                'image' => 'img/hternera.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => 'img/alergenos/lacteos-soja.png'
            ],
            [
                'name' => 'Hamburguesa Gourmet',
                'price' => 8,
                'description' => 'Hamburguesa de buey. Ingredientes: Rulo de cabra y Cebolla caramelizada.',
                'image' => 'img/gourmet.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => 'img/alergenos/lacteos-soja.png'
            ],
            [
                'name' => 'Hamburguesa de Pollo',
                'price' => 4.20,
                'description' => 'Extras: Queso Edam (0.50 €), Queso Cheddar (1 €), Huevo (0.80 €), Bacon (0.50 €).',
                'image' => 'img/hnormal.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => 'img/alergenos/lacteos-soja.png'
            ],
            [
                'name' => 'Crunchi Burger',
                'price' => 4.50,
                'description' => 'Hamburguesa de pollo crujiente.',
                'image' => 'img/crunchi.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => 'img/alergenos/lacteos-soja-huevos.png'
            ],
            [
                'name' => 'Costi Burger',
                'price' => 5.70,
                'description' => 'Ingredientes: Costilla, Salsa BBQ, Cebolla.',
                'image' => 'img/costi.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => 'img/alergenos/huevos.png'
            ],
            [
                'name' => 'Sándwich Panadero',
                'price' => 5.80,
                'description' => 'Ingredientes: Jamón de York, Queso, Pollo, Bacon, Huevo, Lechuga, Tomate, Salsa vegetal.',
                'image' => 'img/spanadero.jpg',
                'type' => 'Sándwich',
                'alergenos' => 'img/alergenos/dioxido.png'
            ],
            [
                'name' => 'Sándwich Vegetal o de Pollo',
                'price' => 4.50,
                'description' => 'Ingredientes: Verduras o pollo, Salsa vegetal.',
                'image' => 'img/svegetal.jpg',
                'type' => 'Sándwich',
                'alergenos' => 'img/alergenos/dioxido.png'
            ],
            [
                'name' => 'Sándwich Especial',
                'price' => 5,
                'description' => 'Ingredientes: Queso, Bacon, Huevo, Salsa vegetal, Jamón de York.',
                'image' => 'img/especial.jpg',
                'type' => 'Sándwich',
                'alergenos' => 'img/alergenos/dioxido.png'
            ],
            [
                'name' => 'Espagueti Pescatore',
                'price' => 7.50,
                'description' => 'Ingredientes: Salsa marinera y Salazones.',
                'image' => 'img/pescatore.jpg',
                'type' => 'Pasta',
                'alergenos' => 'img/alergenos/soja-pescado.png'
            ],
            [
                'name' => 'Espagueti Primavera',
                'price' => 7,
                'description' => 'Ingredientes: Verdura fresca y pollo',
                'image' => 'img/primavera.jpg',
                'type' => 'Pasta',
                'alergenos' => 'img/alergenos/soja.png'
            ],
            [
                'name' => 'Espagueti Carbonara',
                'price' => 7,
                'description' => 'Ingredientes: Bacon y nata',
                'image' => 'img/escarbonara.jpg',
                'type' => 'Pasta',
                'alergenos' => 'img/alergenos/soja-huevos.png'
            ],
            [
                'name' => 'Tallarines Roquefort',
                'price' => 7,
                'description' => 'Ingredientes: Salsa Roquefort',
                'image' => 'img/roquefort.jpg',
                'type' => 'Pasta',
                'alergenos' => ''
            ],
            [
                'name' => 'Tallarines Salmón',
                'price' => 7,
                'description' => 'Ingredientes: Salmón y salsa de salmón.',
                'image' => 'img/salmon.jpg',
                'type' => 'Pasta',
                'alergenos' => 'img/alergenos/soja-pescado.png'
            ],
            [
                'name' => 'Macarrones',
                'price' => 7,
                'description' => '',
                'image' => 'img/macarrones.jpg',
                'type' => 'Pasta',
                'alergenos' => 'img/alergenos/apio-huevos.png'
            ],
            [
                'name' => 'Lasaña',
                'price' => 7,
                'description' => '',
                'image' => 'img/lasaña.jpg',
                'type' => 'Pasta',
                'alergenos' => 'img/alergenos/apio-cascara.png'
            ],
            [
                'name' => 'Risotto Roquefort',
                'price' => 7,
                'description' => 'Ingredientes: Queso Roquefort',
                'image' => 'img/risotto.jpg',
                'type' => 'Arroz',
                'alergenos' => 'img/alergenos/soja.png'
            ],
            [
                'name' => 'Risotto Mixto',
                'price' => 7,
                'description' => 'Ingredientes: Verduras y queso',
                'image' => 'img/mixto.jpg',
                'type' => 'Arroz',
                'alergenos' => 'img/alergenos/soja.png'
            ],
            [
                'name' => 'Arroz Frito',
                'price' => 7,
                'description' => 'Ingredientes: Verduras, Maíz, Gambas',
                'image' => 'img/arrozfrito.jpg',
                'type' => 'Arroz',
                'alergenos' => 'img/alergenos/soja-crustaceos.png'
            ],
            [
                'name' => 'Baguette Brenda',
                'price' => 5,
                'description' => 'Ingredientes: Palometa, Pepinillos, Huevo duro, Queso Philadelphia.',
                'image' => 'img/bbrenda.jpg',
                'type' => 'Baguette',
                'alergenos' => 'img/alergenos/dioxido-huevos-mostaza.png'
            ],
            [
                'name' => 'Baguette Panadero',
                'price' => 6.50,
                'description' => 'Ingredientes: Jamón de York, Queso, Pollo, Bacon, Huevo, Lechuga, Tomate, Salsa.',
                'image' => 'img/panadero.jpg',
                'type' => 'Baguette',
                'alergenos' => 'img/alergenos/soja-huevos-dioxido.png'
            ],
            [
                'name' => 'Ensalada de Arroz',
                'price' => 6,
                'description' => 'Ingredientes: Arroz Basmati, Huevo, Jamón de York, Mayonesa, Anchoas, Olivas negras, Morrón.',
                'image' => 'img/ensarroz.jpg',
                'type' => 'Ensalada',
                'alergenos' => 'img/alergenos/soja-lacteos-pescado-huevos.png'
            ],
            [
                'name' => 'Ensalada César',
                'price' => 6.20,
                'description' => 'Ingredientes: Cherry, Lechuga, Jamón de York, Queso, Nuggets, Picatosted, Salsa César.',
                'image' => 'img/cesar.jpg',
                'type' => 'Ensalada',
                'alergenos' => 'img/alergenos/soja-lacteos-huevos-gluten-cascara-sesamo.png'
            ],
            [
                'name' => 'Ensalada Brenda',
                'price' => 6.20,
                'description' => 'Ingredientes: Lechuga, Pollo, Queso, Cherry, Jamón York, Zanahorias, Salsa Rosa.',
                'image' => 'img/ensabrenda.jpg',
                'type' => 'Ensalada',
                'alergenos' => 'img/alergenos/soja-lacteos-gluten.png'
            ],
            [
                'name' => 'Patatas Deluxe',
                'price' => 3.50,
                'description' => 'Ingredientes: Gajos.',
                'image' => 'img/deluxe.jpg',
                'type' => 'Complemento',
                'alergenos' => 'img/alergenos/gluten.png'
            ],
            [
                'name' => 'Bolas de Queso - 8 Unidades',
                'price' => 4,
                'description' => 'Ingredientes: Rellenas de Queso Cheddar con un toque de jalapeño.',
                'image' => 'img/bolaqueso.jpg',
                'type' => 'Complemento',
                'alergenos' => 'img/alergenos/gluten.png'
            ],
            [
                'name' => 'Nachos con queso',
                'price' => 5,
                'description' => 'Ingredientes: Extra para nachos: Carne picada o Carne de Taco (1.50 €).',
                'image' => 'img/nachoqueso.jpg',
                'type' => 'Complemento',
                'alergenos' => 'img/alergenos/lacteos-gluten.png'
            ],
            [
                'name' => 'Nachos con queso y guacamole',
                'price' => 5.50,
                'description' => 'Ingredientes: Queso y guacamole',
                'image' => 'img/guacamole.jpg',
                'type' => 'Complemento',
                'alergenos' => 'img/alergenos/lacteos-gluten-dioxido.png'
            ],
            [
                'name' => 'Alitas de pollo a la barbacoa',
                'price' => 4.50,
                'description' => '6 unidades',
                'image' => 'img/alitas.jpg',
                'type' => 'Complemento',
                'alergenos' => 'img/alergenos/soja-cascara-gluten-mostaza.png'
            ],
            [
                'name' => 'Nuggets',
                'price' => 3,
                'description' => '5 unidades',
                'image' => 'img/nuggets.jpg',
                'type' => 'Complemento',
                'alergenos' => 'img/alergenos/soja-lacteos-gluten-huevos.png'
            ],
            [
                'name' => 'Patatas con carne picada y queso',
                'price' => 5.20,
                'description' => '',
                'image' => 'img/patatascq.jpg',
                'type' => 'Complemento',
                'alergenos' => 'img/alergenos/gluten-lacteos.png'
            ],
            [
                'name' => 'Perrito normal',
                'price' => 3.50,
                'description' => 'Ingredientes: Extras: Queso Edam (0.50 €), Queso Cheddar (1 €), Huevo (0.80 €), Bacon (0.50 €)',
                'image' => 'img/perrito.jpg',
                'type' => 'Perrito',
                'alergenos' => ''
            ],
            [
                'name' => 'Perrito con taco y queso',
                'price' => 5,
                'description' => 'Ingredientes: Carne de taco y queso.',
                'image' => 'img/tacoyqueso.jpg',
                'type' => 'Perrito',
                'alergenos' => 'img/alergenos/soja.png'
            ],
            [
                'name' => 'Tubo de cerveza',
                'price' => 2,
                'description' => '',
                'image' => 'img/cervezatubo.jpg',
                'type' => 'Cerveza',
                'alergenos' => ''
            ],
            [
                'name' => 'Vaso de cerveza',
                'price' => 1.50,
                'description' => '22cl',
                'image' => 'img/cervezavaso.jpg',
                'type' => 'Cerveza',
                'alergenos' => ''
            ],
            [
                'name' => 'Lata de cerveza',
                'price' => 2,
                'description' => '33cl',
                'image' => 'img/cervezalata.jpg',
                'type' => 'Cerveza',
                'alergenos' => ''
            ],
            [
                'name' => 'Maceta de cerveza',
                'price' => 3,
                'description' => '50cl',
                'image' => 'img/cervezamaceta.jpg',
                'type' => 'Cerveza',
                'alergenos' => ''
            ],
            [
                'name' => 'Copa de fino, Rioja o blanco',
                'price' => 3,
                'description' => '',
                'image' => 'img/copafino.jpg',
                'type' => 'Vino',
                'alergenos' => ''
            ],
            [
                'name' => 'Botella de Rioja',
                'price' => 12,
                'description' => '',
                'image' => 'img/botellarioja.jpg',
                'type' => 'Vino',
                'alergenos' => ''
            ],
            [
                'name' => 'Botella de vino blanco',
                'price' => 12,
                'description' => '',
                'image' => 'img/botellavinoblanco.jpg',
                'type' => 'Vino',
                'alergenos' => ''
            ],
            [
                'name' => 'Lata o botellín',
                'price' => 1.80,
                'description' => '',
                'image' => 'img/lata.jpg',
                'type' => 'Refresco',
                'alergenos' => ''
            ],
            [
                'name' => 'Agua mineral 1/4 con gas',
                'price' => 1.50,
                'description' => '',
                'image' => 'img/aguacongas.jpg',
                'type' => 'Refresco',
                'alergenos' => ''
            ],
            [
                'name' => 'Agua mineral 1/2 sin gas',
                'price' => 1.50,
                'description' => '',
                'image' => 'img/aguasingas.jpg',
                'type' => 'Refresco',
                'alergenos' => ''
            ],
            [
                'name' => 'Tinto de verano',
                'price' => 2.80,
                'description' => '',
                'image' => 'img/tintoverano.jpg',
                'type' => 'Refresco',
                'alergenos' => ''
            ],
        ];
        Product::insert($products);
    }
}
