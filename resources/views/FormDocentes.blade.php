@extends('layouts.app')
@section('title','Docentes')
@section('style-content',asset('css/formDocent.css'))
@section('content-section')
    <h1>Employee Information</h1>
    <div class="content-form-employee">
        <form class="form-employee" method="POST" id="form-employee">
            

            <div class="inputs"><input type="text" id="dateAdmision" name='dateAdmision' placeholder="Date Admission" autofocus required ></div>
            <div class="inputs"><input type="text" id="nombre" name='nombre' placeholder="Name" required ></div>
            <div class="inputs"><input type="text" id="lastName" name='lastName' placeholder="Last Name" required ></div>
            <div class="inputs"><input type="text" id="birthdate" name='birthdate' placeholder="Birthdate" required ></div>
            <select id="gender-list" name="gender-list" class="gender-list" required>
                <option value="" disabled selected>Civil Status</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="widowed">Widowed</option>
                <option value="divorced">Divorced</option>
            </select>
            <div class="inputs"><input type="text" id="dni" name='dni' placeholder="DNI"  required></div>
            <div class="inputs"><input type="text" id="phone" name='phone' placeholder="Phone +51"  required></div>
            <div class="inputs"><input type="email"id="email" name='email' placeholder="E-mail" required></div>
            <div class="inputs"><input type="text"id="profession" name='profession' placeholder="Profession" required></div>
            <select id="gender-list" name="gender-list" class="gender-list">
                <option value="" disabled selected>Gender</option>
                <option value="mae">Male</option>
                <option value="female">Female</option>
            </select>
            <select id="department-list" name="department-list" class="department-list">
                <option value="" disabled selected>Department</option>
                <option value="d1">Ica</option>
                <option value="d2">Lima</option>
            </select>

            <select id="town-list" name="town-list" class="town-list">
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