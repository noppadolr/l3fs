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
    public $limitHight=10;

    public $limitdown=0;

    public function increatement(){
        if($this->counter<$this->limitHight)
        {$this->counter++;}else{
            session()->flash('limith','Counter has limithigth');
        }
    }

    public function decrement(){
        if($this->counter>$this->limitdown)
        {$this->counter--;}else{
            session()->flash('limitd','Counter has limitlow');
        }

    }
    public function render()
    {
        return view('livewire.counter');
    }
}
