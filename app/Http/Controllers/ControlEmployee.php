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
use function PHPUnit\Framework\isNull;

class ControlEmployee extends Controller
{
    
    public function admin(){
        return view('FormAdmin');
    }

    public function recordEmployee(){
        $employees = Employee::all();
        return view('FormRecordEmployee',compact('employees'));
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
            // $img= $request->file('add-photo');
            // $img2=$request->addslashes(file_get_contents($_FILES['add-photo']['tmp_name']));
            
            if ($request->hasFile('add-photo')) {
                $img = $request->file('add-photo');
                $imgContents = file_get_contents($img->getPathname());
                $employee->photo = $imgContents;
            }
            $employee->save();
          
        }
        catch(\Exception $e){
            echo $e;
        }

       
    }

}
