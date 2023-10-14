<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Department;
use App\Models\Province;
class SelectedInputs extends Component
{    
    public $selectedDepa=0, $selectedProvince=null; 

    public $provinces=[];

    public function render()
    {
        return view('livewire.selected-inputs',[
            'departamentos'=>Department::all()
        ]);
    }

    
    public function updatedselectedDepa($dep_id)
    {
        $this->provinces=Province::where('department_id',$dep_id)->get();  
    }
}
