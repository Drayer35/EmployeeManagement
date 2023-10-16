<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditEmployee extends Component
{
    public $open = true;
    public function render()
    {
        return view('livewire.edit-employee');
    }
}
