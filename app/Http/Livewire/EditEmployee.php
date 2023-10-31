<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Gender;
use App\Models\Department;
use App\Models\CivilStatus;
use App\Models\Employee;
class EditEmployee extends Component
{
    public $employee;
    public $open = false;
    public function render()
    {   
        $genders= Gender::all();
        $departments= Department::all();
        $statuses= CivilStatus::all();
        return view('livewire.edit-employee',compact('genders','statuses','departments'));
    }

    public function mount($id)
    {
        $this->employee = Employee::find($id);
    }
}
