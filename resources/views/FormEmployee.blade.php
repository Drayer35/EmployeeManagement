@extends('layouts.app')
@section('title','Employee')
@section('style-content',asset('css/employee.css'))
@section('content-section')
   
    <div class="content-form-user">
        <div class="content-section-photo">
            <div class="section-photo">
                    <div class="contenedor-perfil">
                        <img src="{{ asset('img/rica.jpg')}} ">
                    </div>
                    <button class="btn-photo">Add Photo</button>
            </div>
        </div>
        <form class="form-employee" method="POST" id="form-employee">
            {{-- <h1 class="title-form-employee">Employee Information</h1> --}}
            <div class="inputs"><input type="text" id="dateAdmision" name='dateAdmision' placeholder="Date Admission" autofocus required  autocomplete="off"></div>
            <div class="inputs"><input type="text" id="nombre" name='nombre' placeholder="Name" required  autocomplete="off"></div>
            <div class="inputs"><input type="text" id="lastName" name='lastName' placeholder="Last Name" required autocomplete="off"></div>
            <div class="inputs"><input type="text" id="birthdate" name='birthdate' placeholder="Birthdate" required autocomplete="off" ></div>
            <select id="status-list" name="status-list" class="inputs select" required>
                <option value="" disabled selected>Civil Status</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="widowed">Widowed</option>
                <option value="divorced">Divorced</option>
            </select>
            <div class="inputs"><input type="text" id="dni" name='dni' placeholder="DNI"  required autocomplete="off"></div>
            <div class="inputs"><input type="text" id="phone" name='phone' placeholder="Phone +51"  required autocomplete="off"></div>
            <div class="inputs"><input type="email"id="email" name='email' placeholder="E-mail" required autocomplete="off"></div>
            <div class="inputs"><input type="text"id="profession" name='profession' placeholder="Profession" required autocomplete="off"></div>
            <select id="gender-list" name="gender-list" class="inputs select">
                <option value="" disabled selected>Gender</option>
                <option value="mae">Male</option>
                <option value="female">Female</option>
            </select>
            <select id="department-list" name="department-list" class="inputs select" required>
                <option value="" disabled selected>Department</option>
                <option value="d1">Ica</option>
                <option value="d2">Lima</option>
            </select>

            <select id="town-list" name="town-list" class="inputs select" required>
                <option value="" disabled selected>Town</option>
                <option value="v1">Pisco</option>
                <option value="v2">Villa El Salvador</option>
            </select>

            <div class="option">
                <div class="info">All identity information entered will be placed in a database.
                </div>
                <input class="btn-submit" type="submit" value="REGISTER" name="register-employee" id="register-btn">
            </div>                       
        </form>
    </div>
    
@endsection