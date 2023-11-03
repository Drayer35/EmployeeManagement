@extends('layouts.app')
@section('title')
{{__('Edit Employee')}}
@endsection
@section('css',asset('css/employee.css'))
@section('js',asset('js/emp.js'))
@section('content-section')


    <div class="content-form-user">
        <div class="content-section-photo">
            <div class="section-photo">
                    <div class="contenedor-perfil">
                        <img class="img" id="img" src="
                        @if (is_null($employee->photo))
                            {{ asset('img/photo.png') }}
                        @else
                            data:image/png;base64,{{ base64_encode($employee->photo) }}
                        @endif"
                        >
                    </div><br>
                    @error('add-photo')
                        <span class="alert">{{$message}}</span>
                    @enderror <br>
                    <button  class="btn-del-photo" id="btn-photo">
                        {{__('CambiarFoto')}}
                    </button>
            </div>
        </div>


        <form class="form-employee" id="form-employee" 
            action="{{ route('formemployee.update', ['id' => $employee->id]) }}" 
            method="POST" enctype="multipart/form-data">
            @method("PUT")
            @csrf 


            <input type="file"  class="photo" name="add-photo" id="add-photo" accept="image/*" value="{{old('add-photo')}}"> 
            <div class="inputs">
                <input  type="text" id="name" name='name' value="{{ $employee->name}}"  placeholder={{__('Name')}}  autocomplete="off" oninput="validateWord(this)">
                @error('name')
                <br>
                    <small class="alert">{{$message}}</small>
                @enderror
                
            </div> 
            
            <div class="inputs">
                <input type="text" id="lastName" name='lastName' value="{{$employee->last_name}}" placeholder={{__('Last Name')}}  autocomplete="off" oninput="validateWord(this)">
                @error('lastName')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>
           
            <div class="inputs">
                <input type="text" id="dni" name='dni' placeholder="DNI" autocomplete="off" value="{{$employee->dni}}" maxlength="8" oninput="validateNumber(this)">
                @error('dni')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>
            
            <div class="inputs">
                <input type="text" id="birthdate" name='birthdate' placeholder={{__('Birthdate')}}  value="{{$employee->birthdate}}" autocomplete="off" min="1950-01-01"  onfocus="(this.type='date')" onblur="(this.type='text')">
                @error('birthdate')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>

            <div class="inputs">
                <select id="gender-list" name="genderList" class="select" >
                    <option value="" disabled selected>{{__('Gender')}} </option>
                    @foreach ($genders as $gender )
                        <option value="{{$gender['id']}}" @if($gender->id ==$employee->gender_id){{'selected'}}@endif>{{$gender['gender']}}</option>
                    @endforeach 
                </select>
                @error('genderList')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>
          
            <div class="inputs">
                <select id="status-list" name="statusList" class="select" >
                    <option value="" disabled selected>{{__('Civil Status')}}</option>
                    @foreach ($statuses as $status )
                        <option value="{{$status['id']}}" @if ($status->id == $employee->status_id){{'selected'}} @endif>{{$status['name']}}</option>
                    @endforeach  
                </select>
                @error('statusList')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>

            <div class="inputs">
                <input type="text" id="phone" name='phone' maxlength="9"  placeholder={{__('Phone')}} value="{{$employee->phone}}"  autocomplete="off" oninput="validateNumber(this)">
                @error('phone')
                    <small class="alert">{{$message}}</small> 
                @enderror
            </div>
            
            <div class="inputs">
                <input type="email"id="email" name='email' placeholder={{__('E-mail')}} value="{{$employee->email}}" autocomplete="off">
                @error('email')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>
             
            <div class="inputs">
                <input type="text"id="profession" name='profession' class="display-none" placeholder={{__('Profession')}} value="{{$employee->profession}}" autocomplete="off" oninput="validateWord(this)">
                @error('profession')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>
            
            <div class="inputs">
                <input type="text" id="dateAdmission" name='dateAdmission' placeholder={{__('Date Admission')}} value="{{$employee->date_admision}}" autocomplete="off" min="2010-01-01" max="2025-12-31" onfocus="(this.type='date')" onblur="(this.type='text')">
                @error('dateAdmission')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>
          
            {{-- @livewire('EmployeeUbicationInputs',['id' => $empployee->id]) --}}

            <div class="descript-info">              
                <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded " >Guardar</button>
            </div>                       
        </form>
       
    </div>
    
@endsection 