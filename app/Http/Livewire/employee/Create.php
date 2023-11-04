<?php

namespace App\Http\Livewire\Employee;

use Livewire\Component;
use App\Models\Employee;
use App\Models\Gender;  
use App\Models\CivilStatus;
use App\Models\Department;

class Create extends Component
{
    public $employee;
    public $open = false;
    public function render()
    {   
        $genders= Gender::all();
        $departments= Department::all();
        $statuses= CivilStatus::all();
        return view('livewire.employee.create',compact('genders','statuses','departments'));
    }

    // public function mount($id)
    // {
    //     $this->employee = Employee::find($id);
    // }
}
