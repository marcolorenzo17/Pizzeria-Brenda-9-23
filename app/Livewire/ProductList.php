<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ProductList extends Component
{

    #[Computed()]
    public function products()
    {
        return Product::get();
    }

    public function render()
    {
        return view('livewire.product-list');
    }
}
