<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination

    public $search;

    protected $updateQueryString = ['search'];

    public function render()
    {
        if($this->search)== null {
            $products = Product::where('nama, 'like', '%'.$this->search. '%')-> paginate(8);
        }else {
            $products = Product::paginate(8);
        }
        $products = Product::paginate(8);
        return view('livewire.product-index', [
            'products' => $products 
        ]);
    }
}
