<?php

namespace App\Http\Livewire;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Province;
use LaravelLang\Publisher\Console\Update;
use Livewire\Component;

class EmployeeUbicationInputs extends Component
{

    public $employee;
    public $selectedDepa=0; 
    public $selectedProv=0; 

    public $provinces=[];
 
    public function render()
    {
        return view('livewire.employee-ubication-inputs',[
            'departamentos'=>Department::all(),
        ]);
    
    }

    public function mount($idEmp)
    {
        $this->employee = Employee::find($idEmp);
        $this->selectedDepa = $this->employee->department->id; // Asigna el departamento del empleado
        $this->selectedProv = $this->employee->province->id;  // Asigna la provincia del empleado
        $this->provinces = Province::where('department_id', $this->selectedDepa)->get();
    }

    public function updatedselectedDepa($dep_id)
    {
        $this->provinces=Province::where('department_id',$dep_id)->get();  
    }

  

}


