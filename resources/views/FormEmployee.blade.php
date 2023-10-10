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
                    <input type="file"  class="photo" value="Add Photo" name="add-photo" id="add-photo" accept="image/*">
            </div>
        </div>
        <form class="form-employee" method="POST" id="form-employee" >
            @csrf 
            {{-- <h1 class="title-form-employee">Employee Information</h1> --}}
            <div class="inputs"><input type="text" id="nombre" name='nombre' placeholder={{__('Name')}} autofocus required  autocomplete="off"></div>
            <div class="inputs"><input type="text" id="lastName" name='lastName' placeholder={{__('Last Name')}} required autocomplete="off"></div>
            <div class="inputs"><input type="text" id="dni" name='dni' placeholder="DNI"  required autocomplete="off"></div>
            <div class="inputs">
                <input type="text" id="birthdate" name='birthdate' placeholder={{__('Birthdate')}} required autocomplete="off" min="1950-01-01" max="2025-12-31" onfocus="(this.type='date')" onblur="(this.type='text')">
            </div>
            <select id="gender-list" name="gender-list" class="inputs select">
                <option value="" disabled selected>{{__('Gender')}}</option>
                <option value="mae">Male</option>
                <option value="female">Female</option>
            </select>
            <select id="status-list" name="status-list" class="inputs select" required>
                <option value="" disabled selected>{{__('Civil Status')}}</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="widowed">Widowed</option>
                <option value="divorced">Divorced</option>
            </select>
            <div class="inputs"><input type="text" id="phone" name='phone' placeholder={{__('Phone')}}  required autocomplete="off"></div>
            <div class="inputs"><input type="email"id="email" name='email' placeholder={{__('E-mail')}} required autocomplete="off"></div>
            <select id="department-list" name="department-list" class="inputs select" required>
                <option value="" disabled selected>{{__('Department')}}</option>
                <option value="d1">Ica</option>
                <option value="d2">Lima</option>
            </select>
            <select id="province-list" name="province-list" class="inputs select" required>
                <option value="" disabled selected>{{__('Province')}}</option>
                <option value="v1">Pisco</option>
                <option value="v2">Villa El Salvador</option>
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