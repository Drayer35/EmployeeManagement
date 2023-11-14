<?php

namespace App\Http\Controllers;

use App\Models\CivilStatus;
use App\Models\Countries;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Gender;
use App\Models\DegreeInstruction;
use Illuminate\Support\Facades\Http;
use App\Models\District;
use App\Models\CountryBirth;
use App\Models\CountryDomicile;
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
        $statuses= CivilStatus::all();
        $countries = Countries::all(); 
        $departments= Department::all();
        $degrees =DegreeInstruction::all(); 
        return view('employees.Register',compact('genders','statuses','degrees','countries'));
    }

    public function store(Request $request){
        $request->validate([
            'add-photo'=>'image|max:2068',
            'name'=>'required',
            'paternalSurname'=>'required',
            'maternalSurname'=>'required',
            'dni'=>'required',
            'phone'=>'required',
            'birthdate'=>'required',
            'genderList'=>'required',
            'statusList'=>'required',
            'email'=>'required',
            'degreeInstruction'=> 'required',
            'district'=>'required',
            'address'=> 'required',
            'childrens'=> 'required',
            'ownHome'=> 'required',
            'countryBirth'=> 'required',
            'departmentList'=>'required',
            'provinceList'=>'required',
            'profession'=>'required',
            'dateAdmission'=>'required'            
        ]);
        
        try{
            $employee = new Employee();
            $employee->name =$request->name;
            $employee->paternal_surname =$request->paternalSurname;
            $employee->maternal_surname =$request->maternalSurname;
            $employee->birthdate=$request->birthdate;
            $employee->country_birth_id = $request->countryBirth;
            $employee->gender_id=$request->genderList;
            $employee->dni=$request->dni;
            $employee->phone=$request->phone;
            $employee->email = $request->email;
            $employee->department_id=$request->departmentList;
            $employee->province_id=$request->provinceList;
            $employee->district = $request->district;
            $employee->address = $request->address;
            $employee->own_home=$request->ownHome;
            $employee->status_id =$request->statusList;
            $employee->children= $request->childrens;
            $employee->degree_instruction_id=$request->degreeInstruction;
            $employee->profession=$request->profession;
            $employee->date_admission= $request->dateAdmission;
            if ($request->hasFile('add-photo')) {
                $img = $request->file('add-photo');
                $imgContents = file_get_contents($img->getPathname());
                $employee->photo = $imgContents;
            }
            $employee->save();
            // $employees = Employee::orderby('name')->paginate(10);
            $this->reset([
                'add-photo',
                'name',
                'paternalSurname',
                'maternalSurname',
                'dni',
                'phone',
                'birthdate',
                'genderList',
                'statusList',
                'email',
                'degreeInstruction',
                'district',
                'address',
                'childrens',
                'ownHome',
                'countryBirth',
                'departmentList',
                'provinceList',
                'profession',
                'dateAdmission'            
            ]);
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
        return view('livewire.edit-employee',compact('employee','genders','statuses'));
    }

 
    public function update(Request $request, string $id)
    {
        $request->validate([
            'add-photo'=>'image|max:2068',
            'name'=>'required',
            'paternalSurname'=>'required',
            'maternalSurname'=>'required',
            'dni'=>'required',
            'phone'=>'required',
            'birthdate'=>'required',
            'genderList'=>'required',
            'statusList'=>'required',
            'email'=>'required',
            'degreeInstruction'=> 'required',
            'district'=>'required',
            'address'=> 'required',
            'childrens'=> 'required',
            'ownHome'=> 'required',
            'countryBirth'=> 'required',
            'departmentList'=>'required',
            'provinceList'=>'required',
            'profession'=>'required',
            'dateAdmission'=>'required'            
        ]);
        try{
            $employee =Employee::find($id);
            $employee->name =$request->name;
            $employee->paternal_surname =$request->paternalSurname;
            $employee->maternal_surname =$request->maternalSurname;
            $employee->birthdate=$request->birthdate;
            $employee->country_birth_id = $request->countryBirth;
            $employee->gender_id=$request->genderList;
            $employee->dni=$request->dni;
            $employee->phone=$request->phone;
            $employee->email = $request->email;
            $employee->department_id=$request->departmentList;
            $employee->province_id=$request->provinceList;
            $employee->district = $request->district;
            $employee->address = $request->address;
            $employee->own_home=$request->ownHome;
            $employee->status_id =$request->statusList;
            $employee->children= $request->childrens;
            $employee->degree_instruction_id=$request->degreeInstruction;
            $employee->profession=$request->profession;
            $employee->date_admission= $request->dateAdmission;
            if ($request->hasFile('add-photo')) {
                $img = $request->file('add-photo');
                $imgContents = file_get_contents($img->getPathname());
                $employee->photo = $imgContents;
            }
            $employee->save();

            $this->reset([
                'add-photo',
                'name',
                'paternalSurname',
                'maternalSurname',
                'dni',
                'phone',
                'birthdate',
                'genderList',
                'statusList',
                'email',
                'degreeInstruction',
                'district',
                'address',
                'childrens',
                'ownHome',
                'countryBirth',
                'departmentList',
                'provinceList',
                'profession',
                'dateAdmission'            
            ]);
        }catch (\Exception $e) {
            echo''. $e->getMessage();   
        }
       
        // $employees = Employee::orderby('name')->paginate(10);
        return redirect('Records');
    
    }

    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('Records');
    }

  
}
