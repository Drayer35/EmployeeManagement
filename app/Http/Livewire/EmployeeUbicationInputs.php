<?php

namespace App\Http\Livewire;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Province;
use Livewire\Component;

class EmployeeUbicationInputs extends Component
{

    public $employee;
    public $prov;
    public $selectedDepa=0, $selectedProvince=null; 

    public $provinces=[];

    public function render()
    {
        return view('livewire.employee-ubication-inputs',[
            'departamentos'=>Department::all()
        ]);
    }

    public function mount($idEmp)
    {
        $this->employee = Employee::find($idEmp);
        $this->selectedDepa = $this->employee->department->id; // Asigna el departamento del empleado
        $this->selectedProvince = $this->employee->province->id;   // Asigna la provincia del empleado
    }

    public function updatedselectedDepa($dep_id)
    {
        $this->provinces=Province::where('department_id',$dep_id)->get();  
    }
}


