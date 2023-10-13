@extends('layouts.app')
@section('title','Employee')
@section('style-content',asset('css/employee.css'))
@section('section-logic',asset('js/emp.js'))
@section('content-section')

    @livewireScripts()
    <div class="content-form-user">
        <div class="content-section-photo">
            <div class="section-photo">
                    <div class="contenedor-perfil">
                        <img class="img" id="img" src="{{ asset('img/photo.png')}}" value="{{old('add-photo')}}"> 
                    </div><br>
                    @error('add-photo')
                        <span class="alert">{{$message}}</span>
                    @enderror <br>
                    <label for="add-photo" class="lbl-photo">{{__('Select Photo')}}</label>  
            </div>
        </div>
        <form class="form-employee"  id="form-employee" action="{{route('formemployee.store')}}" method="POST"method="POST" enctype="multipart/form-data">
            @csrf 
           
            <input type="file"  class="photo" value="Add Photo" name="add-photo" id="add-photo" accept="image/*" value="{{old('add-photo')}}"> 
            <div class="inputs">
                <input type="text" id="name" name='name' value="{{ old('name') }}"  placeholder={{__('Name')}}  autocomplete="off">
                @error('name')
                <br>
                    <small class="alert">{{$message}}</small>
                @enderror
                
            </div> 
            
            <div class="inputs">
                <input type="text" id="lastName" name='lastName' value="{{old('lastName')}}" placeholder={{__('Last Name')}}  autocomplete="off">
                @error('lastName')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>
           
            <div class="inputs">
                <input type="text" id="dni" name='dni' placeholder="DNI" autocomplete="off" value="{{old('dni')}}" maxlength="8">
                @error('dni')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>
            
            <div class="inputs">
                <input type="text" id="birthdate" name='birthdate' placeholder={{__('Birthdate')}}  value="{{old('birthdate')}}" autocomplete="off" min="1950-01-01" max="2025-12-31" onfocus="(this.type='date')" onblur="(this.type='text')">
                @error('birthdate')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>
            
            <select id="gender-list" name="genderList" class="inputs select" required>
                <option value="" disabled selected>{{__('Gender')}} </option>
                @foreach ($genders as $gender )
                    <option value="{{$gender['id']}}">{{$gender['gender']}}</option>
                @endforeach             
            </select>
            
            <select id="status-list" name="statusList" class="inputs select" required>
                <option value="" disabled selected>{{__('Civil Status')}}</option>
                @foreach ($statuses as $status )
                    <option value="{{$status['id']}}">{{$status['name']}}</option>
                @endforeach  
            </select>
            <div class="inputs">
                <input type="text" id="phone" name='phone' maxlength="9"  placeholder={{__('Phone')}} value="{{old('phone')}}"  autocomplete="off">
                @error('phone')
                    <small class="alert">{{$message}}</small> 
                @enderror
            </div>
            
            <div class="inputs">
                <input type="email"id="email" name='email' placeholder={{__('E-mail')}} value="{{old('email')}}" autocomplete="off">
                @error('email')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>
            
            {{-- <select id="department-list" name="departmentList" class="inputs select" required onchange="listProvinces(this)">
                <option value="" disabled selected>{{__('Department')}}</option>
                @foreach ($departments as $department ) 
                    <option value="{{$department['id']}}">{{$department['department']}}</option>
                @endforeach    
            </select> --}}
            <livewire:filter-provinces>
            
            <div class="inputs">
                <input type="text"id="profession" name='profession' placeholder={{__('Profession')}} value="{{old('profession')}}" autocomplete="off">
                @error('profession')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>
            
            <div class="inputs">
                <input type="text" id="dateAdmission" name='dateAdmission' placeholder={{__('Date Admission')}} value="{{old('dateAdmission')}}" autocomplete="off" min="2010-01-01" max="2025-12-31" onfocus="(this.type='date')" onblur="(this.type='text')">
                @error('dateAdmission')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>

            <div class="descript-info">
                <div class="info">{{__('All identity information entered will be placed in a database.')}}
                </div>
                <input class="btn-submit" type="submit" value={{__('Register')}}  name="register-employee" id="register-btn">
            </div>                       
        </form>
       
    </div>
    
@endsection 