<?php

namespace App\Http\Livewire;
use App\Models\CountryBirth;
use App\Models\DegreeInstruction;
use Livewire\Component;
use App\Models\Department;
use App\Models\Province;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class SelectedInputs extends Component

{    

    public $token,$countries,$departments=[],$cities;
    public function render()
    {       
        return view('livewire.selected-inputs',[
            'degrees'=>DegreeInstruction::all(),
        ]);
    }

    public function mount(){
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
    
        // Decode the JSON response and assign it to $countries
        $this->countries = $country->json();
    }
    public function updatedepartments(){
        $department = Http::withHeaders([
            "Authorization"=> "Bearer " . $this->token,
            "Accept"=> "application/json"
         ])->withoutVerifying()->get('https://www.universal-tutorial.com/api/states/United States'); //

        $this->departments = $department->json();
    }

    // public function getCities(){
    //     $cities = Http::withHeaders([
    //         "Authorization"=> "Bearer " . $this->token,
    //         "Accept"=> "application/json"
    //     ])->withoutVerifying()->get('https://www.universal-tutorial.com/api/cities/');    
    // } 
}  