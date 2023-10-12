<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

class ControlEmployee extends Controller
{
    public function admin(){
        return view('FormAdmin');
    }

    public function recordEmployee(){
        return view('FormRecordEmployee');
    }
    public function assistEmployee(){
        return view('FormAssists');
    }
    public function store(Request $request){
        $request->validate([
            'add-photo'=>'required|image'
        ]);
        
        try{
            // if(){

            // }
            $employee = new Employee();
            $employee->date_admision= $request->dateAdmission;
            $employee->name =$request->name;
            $employee->last_name=$request->lastName;
            $employee->birthdate=$request->birthdate;
            $employee->dni=$request->dni;
            $employee->phone=$request->phone;
            $employee->profession=$request->profession;
            $employee->email = $request->email;
            $employee->status_id =$request->statusList;
    
            $employee->gender_id=$request->genderList;
            $employee->department_id=$request->departmentList;
            $employee->province_id=$request->provinceList;
    
            $employee->save();
            return $request->all();
        }
        catch(\Exception $e){
            error_log($e);
            echo $e;
        }

       
    }

    public function register(){
        return view('FormEmployee');
    }

    
}
