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
                'alergenos' => 'gluten-lacteos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Pizza Vegetal',
                'price' => 11,
                'description' => 'Ingredientes: Champiñones, Olivas, Pimientos, Cebolla, Parmesano.',
                'image' => 'img/vegetal.jpg',
                'type' => 'Pizza',
                'alergenos' => 'lacteos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Pizza Americana',
                'price' => 12,
                'description' => 'Ingredientes: Bacon en loncha, Pepperoni, Champiñones, Cheddar.',
                'image' => 'img/americana.jpg',
                'type' => 'Pizza',
                'alergenos' => 'lacteos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Pizza Cheeseburger',
                'price' => 12,
                'description' => 'Ingredientes: Hamburguesa, Cebolla, Tomate natural, Cheddar, Salsa Cheeseburger, Bacon.',
                'image' => 'img/cheeseburger.jpg',
                'type' => 'Pizza',
                'alergenos' => 'mostaza-sesamo-dioxido',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Pizza Kebab',
                'price' => 12,
                'description' => 'Ingredientes: Pollo, Verduras, Salsa Kebab.',
                'image' => 'img/kebab.jpg',
                'type' => 'Pizza',
                'alergenos' => 'cascara',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Pizza Carbonara',
                'price' => 13,
                'description' => 'Ingredientes: Salsa Carbonara, Cebolla, Champiñón, Bacon, Parmesano.',
                'image' => 'img/carbonara.jpg',
                'type' => 'Pizza',
                'alergenos' => 'soja',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Pizza Barbacoa',
                'price' => 13,
                'description' => 'Ingredientes: Pollo, Bacon, Carne picada, Salsa barbacoa.',
                'image' => 'img/barbacoa.jpg',
                'type' => 'Pizza',
                'alergenos' => 'cascara-mostaza-dioxido-apio',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Pizza Calzone',
                'price' => 10,
                'description' => 'Con dos ingredientes a elegir.',
                'image' => 'img/calzone.jpg',
                'type' => 'Pizza',
                'alergenos' => 'huevos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Pizza Andaluza',
                'price' => 12,
                'description' => 'Ingredientes: Lomo sajonia, Pimiento, Cebolla, Rodajas de tomate, champiñones, ajo, salsa verde.',
                'image' => 'img/andaluza.jpg',
                'type' => 'Pizza',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Pizza Gourmet',
                'price' => 11,
                'description' => 'Ingredientes: Rulo de cabra y cebolla caramelizada.',
                'image' => 'img/pgourmet.jpg',
                'type' => 'Pizza',
                'alergenos' => 'lacteos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Pizza de Taco Mexicano',
                'price' => 11.50,
                'description' => 'Ingredientes: Carne picante de taco.',
                'image' => 'img/taco.jpg',
                'type' => 'Pizza',
                'alergenos' => 'soja',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Pizza Cuatro Quesos',
                'price' => 11,
                'description' => 'Deliciosa mezcla de quesos: Roquefort, Edam, Mozarella, Parmesano.',
                'image' => 'img/cuatro.jpg',
                'type' => 'Pizza',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Pizza 4 Estaciones',
                'price' => 11,
                'description' => 'Ingredientes: Jamón York, Pimiento, Olivas, Champiñones, Alcaparras, Alcachofas, Anchoas.',
                'image' => 'img/cuatroest.jpg',
                'type' => 'Pizza',
                'alergenos' => 'pescado',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Pizza Muerte por Queso',
                'price' => 12,
                'description' => 'Ingredientes: Mozzarella, Cheddar, Roquefort, Brie, Parmesano',
                'image' => 'img/muerte.jpg',
                'type' => 'Pizza',
                'alergenos' => 'lacteos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Hamburguesa de Buey',
                'price' => 6,
                'description' => 'Extras: Queso Edam (0.50 €), Queso Cheddar (1 €), Huevo (0.80 €), Bacon (0.50 €).',
                'image' => 'img/hbuey.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => 'lacteos-soja',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Hamburguesa de Pollo al Curry',
                'price' => 6,
                'description' => 'Con verdurita.',
                'image' => 'img/hpollo.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => 'gluten-apio-cascara-mostaza-sesamo',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Hamburguesa con Salsa al Whisky',
                'price' => 8,
                'description' => 'Hamburguesa de buey, encurtido de cebolla escalonia. Salsa al Whisky y bacon.',
                'image' => 'img/hwhisky.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Queséame Burger',
                'price' => 8,
                'description' => 'Hamburguesa de buey con salsa queséame, bacon y jalapeño.',
                'image' => 'img/hqueseame.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => 'lacteos-soja',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Hamburguesa de Ternera',
                'price' => 4.50,
                'description' => 'Extras: Queso Edam (0.50 €), Queso Cheddar (1 €), Huevo (0.80 €), Bacon (0.50 €).',
                'image' => 'img/hternera.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => 'lacteos-soja',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Hamburguesa Gourmet',
                'price' => 8,
                'description' => 'Hamburguesa de buey. Ingredientes: Rulo de cabra y Cebolla caramelizada.',
                'image' => 'img/gourmet.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => 'lacteos-soja',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Hamburguesa de Pollo',
                'price' => 4.20,
                'description' => 'Extras: Queso Edam (0.50 €), Queso Cheddar (1 €), Huevo (0.80 €), Bacon (0.50 €).',
                'image' => 'img/hnormal.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => 'lacteos-soja',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Crunchi Burger',
                'price' => 4.50,
                'description' => 'Hamburguesa de pollo crujiente.',
                'image' => 'img/crunchi.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => 'lacteos-soja-huevos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Costi Burger',
                'price' => 5.70,
                'description' => 'Ingredientes: Costilla, Salsa BBQ, Cebolla.',
                'image' => 'img/costi.jpg',
                'type' => 'Hamburguesa',
                'alergenos' => 'huevos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Sándwich Panadero',
                'price' => 5.80,
                'description' => 'Ingredientes: Jamón de York, Queso, Pollo, Bacon, Huevo, Lechuga, Tomate, Salsa vegetal.',
                'image' => 'img/spanadero.jpg',
                'type' => 'Sándwich',
                'alergenos' => 'dioxido',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Sándwich Vegetal o de Pollo',
                'price' => 4.50,
                'description' => 'Ingredientes: Verduras o pollo, Salsa vegetal.',
                'image' => 'img/svegetal.jpg',
                'type' => 'Sándwich',
                'alergenos' => 'dioxido',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Sándwich Especial',
                'price' => 5,
                'description' => 'Ingredientes: Queso, Bacon, Huevo, Salsa vegetal, Jamón de York.',
                'image' => 'img/especial.jpg',
                'type' => 'Sándwich',
                'alergenos' => 'dioxido',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Sándwich Mixto',
                'price' => 3,
                'description' => 'Ingredientes: Jamón de York y queso.',
                'image' => 'img/smixto.jpg',
                'type' => 'Sándwich',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Espagueti Pescatore',
                'price' => 7.50,
                'description' => 'Ingredientes: Salsa marinera y Salazones.',
                'image' => 'img/pescatore.jpg',
                'type' => 'Pasta',
                'alergenos' => 'soja-pescado',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Espagueti Primavera',
                'price' => 7,
                'description' => 'Ingredientes: Verdura fresca y pollo',
                'image' => 'img/primavera.jpg',
                'type' => 'Pasta',
                'alergenos' => 'soja',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Espagueti Carbonara',
                'price' => 7,
                'description' => 'Ingredientes: Bacon y nata',
                'image' => 'img/escarbonara.jpg',
                'type' => 'Pasta',
                'alergenos' => 'soja-huevos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Espagueti Boloñesa',
                'price' => 7,
                'description' => '',
                'image' => 'img/boloñesa.jpg',
                'type' => 'Pasta',
                'alergenos' => 'lacteos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Espagueti con Atún',
                'price' => 7,
                'description' => '',
                'image' => 'img/espatun.jpg',
                'type' => 'Pasta',
                'alergenos' => 'pescado',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Tallarines Roquefort',
                'price' => 7,
                'description' => 'Ingredientes: Salsa Roquefort',
                'image' => 'img/roquefort.jpg',
                'type' => 'Pasta',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Tallarines Salmón',
                'price' => 7,
                'description' => 'Ingredientes: Salmón y salsa de salmón.',
                'image' => 'img/salmon.jpg',
                'type' => 'Pasta',
                'alergenos' => 'soja-pescado',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Macarrones',
                'price' => 7,
                'description' => '',
                'image' => 'img/macarrones.jpg',
                'type' => 'Pasta',
                'alergenos' => 'apio-huevos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Macarrones Napolitana',
                'price' => 7,
                'description' => '',
                'image' => 'img/napolitano.jpg',
                'type' => 'Pasta',
                'alergenos' => 'apio-huevos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Lasaña',
                'price' => 7,
                'description' => '',
                'image' => 'img/lasaña.jpg',
                'type' => 'Pasta',
                'alergenos' => 'apio-cascara',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Risotto Roquefort',
                'price' => 7,
                'description' => 'Ingredientes: Queso Roquefort',
                'image' => 'img/risotto.jpg',
                'type' => 'Arroz',
                'alergenos' => 'soja',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Risotto Mixto',
                'price' => 7,
                'description' => 'Ingredientes: Verduras y queso',
                'image' => 'img/mixto.jpg',
                'type' => 'Arroz',
                'alergenos' => 'soja',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Arroz Frito',
                'price' => 7,
                'description' => 'Ingredientes: Verduras, Maíz, Gambas',
                'image' => 'img/arrozfrito.jpg',
                'type' => 'Arroz',
                'alergenos' => 'soja-crustaceos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Baguette Brenda',
                'price' => 5,
                'description' => 'Ingredientes: Palometa, Pepinillos, Huevo duro, Queso Philadelphia.',
                'image' => 'img/bbrenda.jpg',
                'type' => 'Baguette',
                'alergenos' => 'dioxido-huevos-mostaza',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Baguette Panadero',
                'price' => 6.50,
                'description' => 'Ingredientes: Jamón de York, Queso, Pollo, Bacon, Huevo, Lechuga, Tomate, Salsa.',
                'image' => 'img/panadero.jpg',
                'type' => 'Baguette',
                'alergenos' => 'soja-huevos-dioxido',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Baguette Cinta de Lomo Sajonia',
                'price' => 5,
                'description' => 'Ingredientes: Tomate y pimiento frito.',
                'image' => 'img/cintalomo.jpg',
                'type' => 'Baguette',
                'alergenos' => 'soja',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Baguette de Carne picada y Queso fundido',
                'price' => 5,
                'description' => 'Ingredientes: Carne picada y queso fundido.',
                'image' => 'img/carnepicaqueso.jpg',
                'type' => 'Baguette',
                'alergenos' => 'apio',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Baguette Vegetal',
                'price' => 5,
                'description' => 'Ingredientes: Atún, Lechuga, Tomate, Huevo, Morrón, Mayonesa.',
                'image' => 'img/bvegetal.jpg',
                'type' => 'Baguette',
                'alergenos' => 'soja-pescado-huevos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Ensalada Normal',
                'price' => 4.50,
                'description' => 'Ingredientes: Lechuga, Cebolla, Olivas, Tomate.',
                'image' => 'img/enormal.jpg',
                'type' => 'Ensalada',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Ensalada de Arroz',
                'price' => 6,
                'description' => 'Ingredientes: Arroz Basmati, Huevo, Jamón de York, Mayonesa, Anchoas, Olivas negras, Morrón.',
                'image' => 'img/ensarroz.jpg',
                'type' => 'Ensalada',
                'alergenos' => 'soja-lacteos-pescado-huevos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Ensalada César',
                'price' => 6.20,
                'description' => 'Ingredientes: Cherry, Lechuga, Jamón de York, Queso, Nuggets, Picatosted, Salsa César.',
                'image' => 'img/cesar.jpg',
                'type' => 'Ensalada',
                'alergenos' => 'soja-lacteos-huevos-gluten-cascara-sesamo',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Ensalada Brenda',
                'price' => 6.20,
                'description' => 'Ingredientes: Lechuga, Pollo, Queso, Cherry, Jamón York, Zanahorias, Salsa Rosa.',
                'image' => 'img/ensabrenda.jpg',
                'type' => 'Ensalada',
                'alergenos' => 'soja-lacteos-gluten',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Ensalada Mixta',
                'price' => 5,
                'description' => 'Ingredientes: Olivas, Huevo, Jamón de York, Queso, Tomate, Lechuga, Maíz.',
                'image' => 'img/emixta.jpg',
                'type' => 'Ensalada',
                'alergenos' => 'soja-lacteos-huevos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Ensalada de Pasta',
                'price' => 6,
                'description' => 'Ingredientes: Huevo, Maíz, Atún, Oliva, Jamón de York, Salsa.',
                'image' => 'img/epasta.jpg',
                'type' => 'Ensalada',
                'alergenos' => 'soja-lacteos-huevos-pescado-gluten',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Patatas Deluxe',
                'price' => 3.50,
                'description' => 'Ingredientes: Gajos.',
                'image' => 'img/deluxe.jpg',
                'type' => 'Complemento',
                'alergenos' => 'gluten',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Bolas de Queso - 8 Unidades',
                'price' => 4,
                'description' => 'Ingredientes: Rellenas de Queso Cheddar con un toque de jalapeño.',
                'image' => 'img/bolaqueso.jpg',
                'type' => 'Complemento',
                'alergenos' => 'gluten',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Nachos con queso',
                'price' => 5,
                'description' => 'Ingredientes: Extra para nachos: Carne picada o Carne de Taco (1.50 €).',
                'image' => 'img/nachoqueso.jpg',
                'type' => 'Complemento',
                'alergenos' => 'lacteos-gluten',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Nachos con queso y guacamole',
                'price' => 5.50,
                'description' => 'Ingredientes: Queso y guacamole',
                'image' => 'img/guacamole.jpg',
                'type' => 'Complemento',
                'alergenos' => 'lacteos-gluten-dioxido',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Alitas de pollo a la barbacoa',
                'price' => 4.50,
                'description' => '6 unidades',
                'image' => 'img/alitas.jpg',
                'type' => 'Complemento',
                'alergenos' => 'soja-cascara-gluten-mostaza',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Nuggets',
                'price' => 3,
                'description' => '5 unidades',
                'image' => 'img/nuggets.jpg',
                'type' => 'Complemento',
                'alergenos' => 'soja-lacteos-gluten-huevos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Patatas con carne picada y queso',
                'price' => 5.20,
                'description' => '',
                'image' => 'img/patatascq.jpg',
                'type' => 'Complemento',
                'alergenos' => 'gluten-lacteos',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Perrito normal',
                'price' => 3.50,
                'description' => 'Ingredientes: Extras: Queso Edam (0.50 €), Queso Cheddar (1 €), Huevo (0.80 €), Bacon (0.50 €)',
                'image' => 'img/perrito.jpg',
                'type' => 'Perrito',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Perrito con taco y queso',
                'price' => 5,
                'description' => 'Ingredientes: Carne de taco y queso.',
                'image' => 'img/tacoyqueso.jpg',
                'type' => 'Perrito',
                'alergenos' => 'soja',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Tubo de cerveza',
                'price' => 2,
                'description' => '',
                'image' => 'img/cervezatubo.jpg',
                'type' => 'Cerveza',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Vaso de cerveza',
                'price' => 1.50,
                'description' => '22cl',
                'image' => 'img/cervezavaso.jpg',
                'type' => 'Cerveza',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Lata de cerveza',
                'price' => 2,
                'description' => '33cl',
                'image' => 'img/cervezalata.jpg',
                'type' => 'Cerveza',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Maceta de cerveza',
                'price' => 3,
                'description' => '50cl',
                'image' => 'img/cervezamaceta.jpg',
                'type' => 'Cerveza',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Copa de fino, Rioja o blanco',
                'price' => 3,
                'description' => '',
                'image' => 'img/copafino.jpg',
                'type' => 'Vino',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Botella de Rioja',
                'price' => 12,
                'description' => '',
                'image' => 'img/botellarioja.jpg',
                'type' => 'Vino',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Botella de vino blanco',
                'price' => 12,
                'description' => '',
                'image' => 'img/botellavinoblanco.jpg',
                'type' => 'Vino',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Lata o botellín',
                'price' => 1.80,
                'description' => '',
                'image' => 'img/lata.jpg',
                'type' => 'Refresco',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Agua mineral 1/4 con gas',
                'price' => 1.50,
                'description' => '',
                'image' => 'img/aguacongas.jpg',
                'type' => 'Refresco',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Agua mineral 1/2 sin gas',
                'price' => 1.50,
                'description' => '',
                'image' => 'img/aguasingas.jpg',
                'type' => 'Refresco',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Tinto de verano',
                'price' => 2.80,
                'description' => '',
                'image' => 'img/tintoverano.jpg',
                'type' => 'Refresco',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => '1 € Más',
                'price' => 1,
                'description' => '',
                'image' => 'img/promocion1.jpg',
                'type' => 'Oferta',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Pizza Familiar + Patatas + Bebida',
                'price' => 10,
                'description' => '',
                'image' => 'img/promocion3.png',
                'type' => 'Oferta',
                'alergenos' => '',
                'habilitado' => true,
                'puntos' => 0
            ],
            [
                'name' => 'Menú Hamburguesa de ternera + Nuggets + Patatas',
                'price' => 0,
                'description' => '',
                'image' => 'img/prom/prom1.png',
                'type' => 'Promoción',
                'alergenos' => 'gluten-huevos-soja-lacteos',
                'habilitado' => true,
                'puntos' => 1050
            ],
            [
                'name' => 'Pizza pequeña de Jamón York',
                'price' => 0,
                'description' => '',
                'image' => 'img/prom/prom2.png',
                'type' => 'Promoción',
                'alergenos' => 'gluten-soja-lacteos',
                'habilitado' => true,
                'puntos' => 650
            ],
            [
                'name' => 'Patatas',
                'price' => 0,
                'description' => '',
                'image' => 'img/prom/prom3.png',
                'type' => 'Promoción',
                'alergenos' => 'gluten',
                'habilitado' => true,
                'puntos' => 300
            ],
            [
                'name' => 'Sándwich mixto',
                'price' => 0,
                'description' => '',
                'image' => 'img/prom/prom4.png',
                'type' => 'Promoción',
                'alergenos' => 'gluten-huevos-soja-lacteos',
                'habilitado' => true,
                'puntos' => 300
            ],
            [
                'name' => 'Alitas de pollo a la barbacoa (6 unids.)',
                'price' => 0,
                'description' => '',
                'image' => 'img/prom/prom5.png',
                'type' => 'Promoción',
                'alergenos' => 'gluten-cascara-soja-mostaza',
                'habilitado' => true,
                'puntos' => 450
            ],
            [
                'name' => 'Hamburguesa de ternera',
                'price' => 0,
                'description' => '',
                'image' => 'img/prom/prom6.png',
                'type' => 'Promoción',
                'alergenos' => 'soja-lacteos',
                'habilitado' => true,
                'puntos' => 450
            ],
            [
                'name' => 'Nuggets (5 unids.)',
                'price' => 0,
                'description' => '',
                'image' => 'img/prom/prom7.png',
                'type' => 'Promoción',
                'alergenos' => 'gluten-huevos-soja-lacteos',
                'habilitado' => true,
                'puntos' => 300
            ],
            [
                'name' => 'Espagueti Boloñesa',
                'price' => 0,
                'description' => '',
                'image' => 'img/prom/prom8.png',
                'type' => 'Promoción',
                'alergenos' => 'gluten-lacteos-apio',
                'habilitado' => true,
                'puntos' => 700
            ],
            [
                'name' => 'Perrito',
                'price' => 0,
                'description' => '',
                'image' => 'img/prom/prom9.png',
                'type' => 'Promoción',
                'alergenos' => 'gluten-lacteos',
                'habilitado' => true,
                'puntos' => 350
            ],
            [
                'name' => 'Menú Perrito + Sándwich mixto + Patatas',
                'price' => 0,
                'description' => '',
                'image' => 'img/prom/prom10.png',
                'type' => 'Promoción',
                'alergenos' => 'gluten-huevos-soja-lacteos',
                'habilitado' => true,
                'puntos' => 950
            ],
            [
                'name' => 'Nachos con queso',
                'price' => 0,
                'description' => '',
                'image' => 'img/prom/prom11.png',
                'type' => 'Promoción',
                'alergenos' => 'gluten-lacteos',
                'habilitado' => true,
                'puntos' => 500
            ],
            [
                'name' => 'Burrito',
                'price' => 0,
                'description' => '',
                'image' => 'img/prom/prom12.png',
                'type' => 'Promoción',
                'alergenos' => 'gluten-lacteos-soja',
                'habilitado' => true,
                'puntos' => 400
            ],
            [
                'name' => 'Patatas deluxe',
                'price' => 0,
                'description' => '',
                'image' => 'img/prom/prom13.png',
                'type' => 'Promoción',
                'alergenos' => 'gluten',
                'habilitado' => true,
                'puntos' => 350
            ],
            [
                'name' => 'Taco',
                'price' => 0,
                'description' => '',
                'image' => 'img/prom/prom14.png',
                'type' => 'Promoción',
                'alergenos' => 'gluten-soja-lacteos',
                'habilitado' => true,
                'puntos' => 400
            ],
            [
                'name' => 'Baguette vegetal',
                'price' => 0,
                'description' => '',
                'image' => 'img/prom/prom15.png',
                'type' => 'Promoción',
                'alergenos' => 'gluten-soja-lacteos-pescado-huevos',
                'habilitado' => true,
                'puntos' => 500
            ],
        ];
        Product::insert($products);
    }
}
