<?php

namespace App\Http\Livewire;
use App\Clothe;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar',[
        'clothes' => Clothe::all()
        ]);
    }
}
