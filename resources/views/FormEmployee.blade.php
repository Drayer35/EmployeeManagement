@extends('layouts.app')
@section('title','Employee')
@section('style-content',asset('css/employee.css'))
@section('section-logic',asset('js/emp.js'))
@section('content-section')
    <div class="content-form-user">
        <div class="content-section-photo">
            <div class="section-photo">
                    <div class="contenedor-perfil">
                        <img class="img" id="img" src="{{ asset('img/photo.png')}}">
                    </div>
                    <label for="add-photo" class="lbl-photo">{{__('Select Photo')}}</label>
                    
            </div>
        </div>
        <form class="form-employee"  id="form-employee" action="{{route('formemployee.store')}}" method="POST"method="POST" enctype="multipart/form-data">
            @csrf 
            <input type="file"  class="photo" value="Add Photo" name="add-photo" id="add-photo" accept="image/*">
                    @error('add-photo')
                        <span>{{$message}}</span>
                    @enderror
            
            <div class="inputs"><input type="text" id="name" name='name' placeholder={{__('Name')}} autofocus required  autocomplete="off"></div>
            
            <div class="inputs"><input type="text" id="lastName" name='lastName' placeholder={{__('Last Name')}} required autocomplete="off"></div>
           
            <div class="inputs"><input type="text" id="dni" name='dni' placeholder="DNI"  required autocomplete="off"></div>
            
            <div class="inputs">
                <input type="text" id="birthdate" name='birthdate' placeholder={{__('Birthdate')}} required autocomplete="off" min="1950-01-01" max="2025-12-31" onfocus="(this.type='date')" onblur="(this.type='text')">
            </div>
            
            <select id="gender-list" name="genderList" class="inputs select">
                <option value="" disabled selected>{{__('Gender')}}</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
            </select>
            
            <select id="status-list" name="statusList" class="inputs select" required>
                <option value="" disabled selected>{{__('Civil Status')}}</option>
                <option value="1">Single</option>
                <option value="2">Married</option>
                <option value="3">Widowed</option>
                <option value="4">Divorced</option>
            </select>
            <div class="inputs"><input type="text" id="phone" name='phone' maxlength="9"  placeholder={{__('Phone')}}  required autocomplete="off"></div>
            
            <div class="inputs"><input type="email"id="email" name='email' placeholder={{__('E-mail')}} required autocomplete="off"></div>
            
            <select id="department-list" name="departmentList" class="inputs select" required>
                <option value="" disabled selected>{{__('Department')}}</option>
                <option value="1">Ica</option>
                <option value="2">Lima</option>
            </select>
            
            <select id="province-list" name="provinceList" class="inputs select" required>
                <option value="" disabled selected>{{__('Province')}}</option>
                <option value="1">Pisco</option>
                <option value="2">Villa El Salvador</option>
            </select>
            
            <div class="inputs"><input type="text"id="profession" name='profession' placeholder={{__('Profession')}} required autocomplete="off"></div>
            
            <div class="inputs">
                <input type="text" id="dateAdmision" name='dateAdmission' placeholder={{__('Date Admission')}} required  autocomplete="off" min="2010-01-01" max="2025-12-31" onfocus="(this.type='date')" onblur="(this.type='text')">
            </div>

            <div class="descript-info">
                <div class="info">{{__('All identity information entered will be placed in a database.')}}
                </div>
                <input class="btn-submit" type="submit" value={{__('Register')}}  name="register-employee" id="register-btn">
            </div>                       
        </form>
    </div>
    
@endsection 