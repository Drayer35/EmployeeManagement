<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Gender;
use App\Models\Countries;
use App\Models\Department;
use App\Models\CivilStatus;
use App\Models\DegreeInstruction;
use App\Models\Employee;
use Illuminate\Support\Facades\Http;

class EditEmployee extends Component
{
    public $employee;
    public $open = true;

  
    public function render()
    {   
        $genders= Gender::all();
        $countries = Countries::all();
        $departments= Department::all();
        $statuses= CivilStatus::all();
        $degrees =DegreeInstruction::all();
        return view('livewire.edit-employee',compact('genders','statuses','countries','departments','degrees'));
    }

    public function mount($id)
    {
        $this->employee = Employee::find($id);
    }
}
