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
    // public $selectedDepa, $selectedProvince=null
    public $token; 


    // public $provinces=[];

    public $countries,$departments,$cities;
    public function render()
    {       
        $this->countries();
        return view('livewire.selected-inputs',[
            'degrees'=>DegreeInstruction::all(),
        ]);
    }

    // public function updatedselectedDepa($dep_id)
    // {
    //     $this->provinces=Province::where('department_id',$dep_id)->get();  
    // }
    public function mount(){
        $response = Http::withHeaders([
            "Accept" => "application/json",
            "api-token"=> 
            "dLb9bIHQaFGMo2mYdSjHe-sCFdlqX8Ihh8k6GG0A8eKitC-QI-1t90d-o8p_3E1nZqg",
            "user-email" => "jdcyonel2@gmail.com"
        ])->withoutVerifying()->get('https://www.universal-tutorial.com/api/getaccesstoken');
        $this->token = $response ->json('auth_token');        
    }

    public function countries()
    {
        $response = Http::withHeaders([
            "Authorization" => "Bearer " . $this->token,
            "Accept" => "application/json"
        ])->withoutVerifying()->get('https://www.universal-tutorial.com/api/countries/');
    
        // Decode the JSON response and assign it to $countries
        $this->countries = $response->json();
    }
    public function getDepartments(){
        $departments = Http::withHeaders([
            "Authorization"=> "Bearer " . $this->token,
            "Accept"=> "application/json"
        ])->withoutVerifying()->get('https://www.universal-tutorial.com/api/states/'.$this->departments);
    }

    public function getCities(){
        $cities = Http::withHeaders([
            "Authorization"=> "Bearer " . $this->token,
            "Accept"=> "application/json"
        ])->withoutVerifying()->get('https://www.universal-tutorial.com/api/cities/'.$this->cities);    
    } 
}  