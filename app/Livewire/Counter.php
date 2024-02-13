<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;


#[Layout('components.layouts.admin')]
#[Title('Counter')]

class Counter extends Component
{

    public $counter=0;


    public function increatement(){
        $this->counter++;
    }

    public function decrement(){
        $this->counter--;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
