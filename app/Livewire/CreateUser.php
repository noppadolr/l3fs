<?php

namespace App\Livewire;

use Livewire\Component;

class CreateUser extends Component
{

    public $name='Boy';
    public function render()
    {
        return view('livewire.create-user',[
            'email'=>'admin@gmail.com',
        ]);
    }
}
