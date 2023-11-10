<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Gender;
use App\Models\Department;
use App\Models\CivilStatus;
use App\Models\DegreeInstruction;
use App\Models\Employee;
use Illuminate\Support\Facades\Http;

class EditEmployee extends Component
{
    public $token;
    public $countries;
    public $employee;
    public $open = false;

  
    public function render()
    {   
        $genders= Gender::all();
        $departments= Department::all();
        $statuses= CivilStatus::all();
        $degrees =DegreeInstruction::all();
        return view('livewire.edit-employee',compact('genders','statuses','departments','degrees'));
    }

    public function mount($id)
    {
        $this->employee = Employee::find($id);
        $this->getCountries();
    }


    public function getCountries(){
        $response = Http::withHeaders([
            "Accept" => "application/json",
             "api-token"=> 
             "dLb9bIHQaFGMo2mYdSjHe-sCFdlqX8Ihh8k6GG0A8eKitC-QI-1t90d-o8p_3E1nZqg",
             "user-email" => "jdcyonel2@gmail.com"
        ])->withoutVerifying()->get('https://www.universal-tutorial.com/api/getaccesstoken');
        $this->token = $response ->json('auth_token');        
                
        $country= Http::withHeaders([
            "Authorization" => "Bearer " . $this->token,
            "Accept" => "application/json"
        ])->withoutVerifying()->get('https://www.universal-tutorial.com/api/countries/');

        $this->countries = $country->json();
    }
}
