@extends('layouts.app')
@section('title')
{{__('Register Employee')}}
@endsection
@section('css',asset('css/employee.css'))
@section('js',asset('js/emp.js'))
@section('content-section')
    <div class="content-form-user">
        <div class="content-section-photo">
            <div class="section-photo">
                    <div class="contenedor-perfil">
                        <img class="img" id="img" src="{{ asset('img/photo.png')}}" value="{{old('add-photo')}}"> 
                    </div><br>
                    @error('add-photo')
                        <span class="alert">{{$message}}</span>
                    @enderror <br>
                    <button  class="btn-del-photo" id="btn-photo">
                        {{__('Agregar Foto')}}
                    </button>
            </div>
        </div>
        <form class="form-employee"  id="form-employee" action="{{route('Employee.store')}}" method="POST"method="POST" enctype="multipart/form-data">
            @csrf 
           
            <input type="file"  class="photo"  name="add-photo" id="add-photo" accept="image/*" value="{{old('add-photo')}}"> 
            <div class="inputs">
                <label for="name">{{__('Name')}} </label>
                <input  type="text" id="name" name='name' value="{{ old('name') }}"  placeholder={{__('Name')}}  autocomplete="off" oninput="validateWord(this)">
                @error('name')
                <br>
                    <small class="alert">{{$message}}</small>
                @enderror
                
            </div> 
            
            <div class="inputs">
                <label for="name">{{__('Last Name')}} </label>
                <input type="text" id="lastName" name='lastName' value="{{old('lastName')}}" placeholder={{__('Last Name')}}  autocomplete="off" oninput="validateWord(this)">
                @error('lastName')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>
           
            <div class="inputs"> 
                <label for="name"> {{__('DNI')}}</label>
                <input type="text" id="dni" name='dni' placeholder="DNI" autocomplete="off" value="{{old('dni')}}" maxlength="8" oninput="validateNumber(this)">
                @error('dni')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>
            
            <div class="inputs">
                <label for="name"> {{__('Birthdate')}}</label>
                <input type="text" id="birthdate" name='birthdate' placeholder={{__('dd/mm/aaaa')}}  value="{{old('birthdate')}}" autocomplete="off" min="1950-01-01"  onfocus="(this.type='date')" onblur="(this.type='text')">
                @error('birthdate')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>

            <div class="inputs">
                <label for="name"> {{__('Gender')}}</label>
                <select id="gender-list" name="genderList" class="select" >
                    <option value="" disabled selected>{{__('Select Gender')}} </option>
                    @foreach ($genders as $gender )
                        <option value="{{$gender['id']}}">{{$gender['gender']}}</option>
                    @endforeach 
                </select>
                @error('genderList')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>
         
          
            <div class="inputs">
                <label for="name"> {{__('Civil Status')}}</label>
                <select id="status-list" name="statusList" class="select" >
                  
                    <option value="" disabled selected>{{__('Select Status')}}</option>
                    @foreach ($statuses as $status )
                        <option value="{{$status['id']}}">{{$status['name']}}</option>
                    @endforeach  
                </select>
                @error('statusList')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>

            <div class="inputs">
                <label for="name">{{__('Phone')}} </label>
                <input type="text" id="phone" name='phone' maxlength="9"  placeholder={{__('Phone')}} value="{{old('phone')}}"  autocomplete="off" oninput="validateNumber(this)">
                @error('phone')
                    <small class="alert">{{$message}}</small> 
                @enderror
            </div>
            
            <div class="inputs">
                <label for="name">{{__('E-mail')}} </label>
                <input type="email"id="email" name='email' placeholder={{__('Example@gmail.com')}} value="{{old('email')}}" autocomplete="off">
                @error('email')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>

            
            <livewire:selected-inputs>
            
            <div class="inputs">
                <label for="name">{{__('Profession')}} </label>
                <input type="text"id="profession" name='profession' class="display-none" placeholder={{__('Profession')}} value="{{old('profession')}}" autocomplete="off" oninput="validateWord(this)">
                @error('profession')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>
            
            <div class="inputs">
                <label for="name">{{__('Date Admission')}} </label>
                <input type="text" id="dateAdmission" name='dateAdmission' placeholder={{__('dd/mm/aaaa')}} value="{{old('dateAdmission')}}" autocomplete="off" min="2010-01-01" max="2025-12-31" onfocus="(this.type='date')" onblur="(this.type='text')">
                @error('dateAdmission')
                    <small class="alert">{{$message}}</small>
                @enderror
            </div>

            <div class="descript-info">
                <div class="info">{{__('All identity information entered will be placed in a database.')}}
                </div>
                <input class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded " type="submit" value={{__('Register')}}  name="register-employee" id="register-btn">
            </div>                       
        </form>
    </div>
    
@endsection 