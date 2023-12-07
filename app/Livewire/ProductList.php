<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

class ProductList extends Component
{
    #[Url()]
    public $search = '';

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
    }

    #[Computed()]
    public function products()
    {
        return Product::where('name','like',"%{$this->search}%")->get();
    }

    public function render()
    {
        return view('livewire.product-list');
    }
}
