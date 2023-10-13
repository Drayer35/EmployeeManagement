<?php

namespace App\Http\Livewire;

use App\Models\Department;
use App\Models\Province;
use Livewire\Component;

class FilterProvinces extends Component
{
    public $selectedDepa=null, $province=null;

    public function render()
    {
        return view('livewire.filter-provinces',[
            'departamentos'=>Department::all()
        ]);

    }
    // public function mount(){
    //     $this->deps=Department::all();
       
    
    // }


    public function updatedProvince($value)
    {
     
        $this->province=Province::where('department_id',$value)->get();
        // $this->prov =$this->provs->first()->id ?? null;
    }

}
