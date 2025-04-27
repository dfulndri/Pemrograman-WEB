<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ShowHomePage extends Component
{
    public $product;
    public function mount()
    {
        $this->product = Product::get();
    }
    public function render()
    {
        return view('livewire.show-home-page');
    }
}
