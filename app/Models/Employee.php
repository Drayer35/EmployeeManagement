<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table="employees";

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(CivilStatus::class, 'status_id', 'id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }

    public function province(){
        return $this->belongsTo(Province::class,'province_id','id');
    }

    public function countryDomicile(){
        return $this->belongsTo(Country::class,'country_domicile_id','id');
    }

    public function countryBirth(){
        return $this->belongsTo(Country::class,'country_birth_id','id');
    }
    public function districtEmployee(){
        return $this->belongsTo(District::class,'district_id','id');
    }
           
    public function degreeInstruction(){
        return $this->belongsTo(DegreeInstruction::class,'degree_instruction_id','id');
    }

}
