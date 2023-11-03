<?php

namespace App\Http\Controllers;

use App\Models\CivilStatus;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Gender;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Log;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class ControlEmployee extends Controller
{
    use WithPagination;
   
    public function admin(){
        return view('Admin');
    }

    public function record(){
        $employees = Employee::orderby('name')->paginate(10);
        return view('employees.Records',compact('employees'));
    }

    
    public function assistEmployee(){
        return view('employees.Assists');
    }

    public function register(){
        $genders= Gender::all();
        $departments= Department::all();
        $statuses= CivilStatus::all();
        return view('employees.Register',compact('genders','statuses','departments'));
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
            if ($request->hasFile('add-photo')) {
                $img = $request->file('add-photo');
                $imgContents = file_get_contents($img->getPathname());
                $employee->photo = $imgContents;
            }
            $employee->save();
            $employees = Employee::orderby('name')->paginate(10);
            return view('FormRecordEmployee',compact('employees'));
           
        }
        catch(\Exception $e){
            echo $e;
        } 
    }


    public function edit(string $id)
    {
        $employee = Employee::find($id);
        $genders= Gender::all();
        $statuses= CivilStatus::all();
        return view('employees.EditEmployee',compact('employee','genders','statuses'));
    }

 
    public function update(Request $request, string $id)
    {
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
        
        $employee =Employee::find($id);
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
        if ($request->hasFile('add-photo')) {
            $img = $request->file('add-photo');
            $imgContents = file_get_contents($img->getPathname());
            $employee->photo = $imgContents;
        }
        $employee->save();
        $employees = Employee::orderby('name')->paginate(10);
        return view('employees.FormRecordEmployee',compact('employees'));
    
    }

    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect("Record");
    }
}
