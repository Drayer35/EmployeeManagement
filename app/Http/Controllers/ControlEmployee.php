<?php

namespace App\Http\Controllers;

use App\Models\CivilStatus;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Gender;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\isEmpty;

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

    public function register(){
        $genders= Gender::all();
        $departments= Department::all();
        $statuses= CivilStatus::all();
        return view('FormEmployee',compact('genders','statuses'));
    }

    public function store(Request $request){
        $request->validate([
            'add-photo'=>'image|max:2068',
            'name'=>'required',
            'lastName'=>'required',
            'dni'=>'required',
            'phone'=>'required',
            'birthdate'=>'required',
            'genderList'=>'required',
            'statusList'=>'required',
            'email'=>'required',
            'departmentList'=>'required',
            'provinceList'=>'required',
            'profession'=>'required',
            'dateAdmission'=>'required'            
        ]);
        
        try{
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
            $img= $request->file('add-photo')->store('public/features');
            $url=   Storage::url($img);
            $employee->photo =$url;
            $employee->save();
          
        }
        catch(\Exception $e){
            error_log($e);
            echo $e;
            return back()->withErrors(['error' => 'Hubo un problema al procesar la solicitud.'])->withInput();
        }

       
    }

}
