<?php

namespace App\Http\Livewire\Employee;

use Livewire\Component;
use App\Models\Employee;
use App\Models\Gender;  
use App\Models\CivilStatus;
use App\Models\DegreeInstruction;
use App\Models\Countries;
use App\Models\Department;

class Create extends Component
{
    public $name; 
    public $gender, $degree, $degree_type, $degree_id;
    public $employee;
    public $open = false;
    public function render()
    {   
        $genders= Gender::all();
        $statuses= CivilStatus::all();
        $countries = Countries::all(); 
        $departments= Department::all();
        $degrees =DegreeInstruction::all(); 
        return view('livewire.employee.create',compact('genders','statuses','degrees','countries','departments'));
    }
    public function save(){

        $emp= Employee::create([
            'name'=> $this->name,
            'email'=> $this->email, 
            'phone'=> $this->phone,

        ]);


        // $this->reset([
        //     'add-photo',
        //     'name',
        //     'paternalSurname',
        //     'maternalSurname',
        //     'dni',
        //     'phone',
        //     'birthdate',
        //     'genderList',
        //     'statusList',
        //     'email',
        //     'degreeInstruction',
        //     'district',
        //     'address',
        //     'childrens',
        //     'ownHome',
        //     'countryBirth',
        //     'departmentList',
        //     'provinceList',
        //     'profession',
        //     'dateAdmission'            
        // ]);
       
    }
}