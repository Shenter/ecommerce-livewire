<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Sh';
    public function render()
    {
        return view('dashboard');
    }
}
