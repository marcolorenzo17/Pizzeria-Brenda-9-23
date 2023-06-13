<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $promotions = [
            [
                'name' => '1 € Más',
                'price' => 1,
                'image' => 'img/promocion1.jpg',
            ],
            [
                'name' => 'Pizza Familiar + Patatas + Bebida',
                'price' => 10,
                'image' => 'img/promocion3.png',
            ],
        ];
        Promotion::insert($promotions);
    }
}
