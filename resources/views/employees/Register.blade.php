@extends('layouts.app')
@section('title')
{{__('Register Employee')}}
@endsection
@section('css',asset('css/employee.css'))
@section('js',asset('js/emp.js'))
@section('content-section')
   
<div class="w-full">
    <form class="" id="form-employee" name="form-employee"
    action="{{ route('Employee.store')}}" 
    method="POST" enctype="multipart/form-data">

    @csrf 


    <div class="content-section-photo">
        <div class="section-photo">
                <div class="contenedor-perfil">
                    <div class="contenedor-perfil">
                        <img class="img" id="img" src="{{ asset('img/photo.png')}}" value="{{old('add-photo')}}"> 
                    </div><br>
                    @error('add-photo')
                        <span class="alert">{{$message}}</span>
                    @enderror <br>
                    <button  class="btn-del-photo" id="btn-photo">
                        {{__('Agregar Foto')}}
                    </button>
                    <label for="add-photo"  class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 cursor-pointer rounded-lg ">+</label>

                </div><br>
                @error('add-photo')
                    <span class="alert text-red-600">{{$message}}</span>
                @enderror <br>
                {{-- <button  class="btn-del-photo" id="btn-photo">
                    {{__('CambiarFoto')}}
                </button> --}}
               
                <input type="file"  class="hidden photo" name="add-photo" id="add-photo" accept="image/*" value="{{old('add-photo')}}"> 
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    {{__('Name')}} 
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                       type="text" id="name" name='name' value="{{old('name')}}"  placeholder={{__('Name')}}  autocomplete="off" oninput="validateWord(this)">
                @error('name')
                <br>
                    <small class="alert text-red-600">{{$message}}</small>
                @enderror
            </div>
            <div class="w-full md:w-1/1 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >
                    {{__('Last Name')}} 
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                       type="text" id="lastName" name='lastName' value="{{old('lastName')}}" placeholder={{__('Last Name')}}  autocomplete="off" oninput="validateWord(this)">
                @error('lastName')
                    <small class="alert text-red-600">{{$message}}</small>
                @enderror
            </div>

            <div class="w-full md:w-1/1 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    {{__('D.N.I')}} 
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                       type="text" id="dni" name='dni' placeholder="DNI" autocomplete="off" value="{{old('dni')}}" maxlength="8" oninput="validateNumber(this)">
                @error('dni')
                    <small class="alert text-red-600">{{$message}}</small>
                @enderror
            </div>
           
        </div>
    </div>

    
    <div class="content-section-form">
        
    
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    {{__('Birthdate')}} 
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                       type="text" id="birthdate" name='birthdate' placeholder={{__('dd/mm/aaaa')}}  value="{{old('birthdate')}}" autocomplete="off" min="1950-01-01"  onfocus="(this.type='date')" onblur="(this.type='text')">
                @error('birthdate')
                    <small class="alert text-red-600">{{$message}}</small>
                @enderror
            </div>
            <div class="w-full md:w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    {{__('Gender')}} 
                </label>
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="gender-list" name="genderList" class="select" >
                    <option value="" disabled selected>{{__('Gender')}} </option>
                    @foreach ($genders as $gender )
                        <option value="{{$gender['id']}}" >{{$gender['gender']}}</option>
                    @endforeach 
                </select>
                @error('genderList')
                    <small class="alert text-red-600">{{$message}}</small>
                @enderror
            </div>

            <div class="w-full md:w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    {{__('Civil Status')}} 
                </label>
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="status-list" name="statusList" class="select" >
                    <option value="" disabled selected>{{__('Civil Status')}}</option>
                    @foreach ($statuses as $status )
                        <option value="{{$status['id']}}">{{$status['name']}}</option>
                    @endforeach  
                </select>
                @error('statusList')
                    <small class="alert text-red-600">{{$message}}</small>
                @enderror
            </div>
        </div>
       
        <livewire:selected-inputs>
        
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    {{__('Phone')}} 
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                type="text" id="phone" name='phone' maxlength="9"  placeholder={{__('Phone')}} value="{{old('phone')}}"  autocomplete="off" oninput="validateNumber(this)">
                @error('phone')
                    <small class="alert text-red-600">{{$message}}</small> 
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    {{__('Email')}} 
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                type="email"id="email" name='email' placeholder={{__('E-mail')}} value="{{old('email')}}" autocomplete="off">
                @error('email')
                    <small class="alert text-red-600">{{$message}}</small>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    {{__('Profession')}} 
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    type="text"id="profession" name='profession' class="display-none" placeholder={{__('Profession')}} value="{{old('profession')}}" autocomplete="off" oninput="validateWord(this)">
                @error('profession')
                    <small class="alert text-red-600">{{$message}}</small>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    {{__('Date Admission')}} 
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    type="text" id="dateAdmission" name='dateAdmission' placeholder={{__('dd/mm/aaaa')}} value="{{old('dateAdmission')}}" autocomplete="off" min="2010-01-01" max="2025-12-31" onfocus="(this.type='date')" onblur="(this.type='text')">
                @error('dateAdmission')
                    <small class="alert text-red-600">{{$message}}</small>
                @enderror
            </div>    
            
        
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    {{__('Childrens')}} 
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    type="text" id="childrens" name='childrens' placeholder={{__('Cantidad')}} value="{{old('childrens')}}" autocomplete="off">
                @error('childrens')
                    <small class="alert text-red-600">{{$message}}</small>
                @enderror
            </div> 

            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    {{__('Address')}} 
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    type="text" id="address" name='address' placeholder={{__('address')}} value="{{old('address')}}" autocomplete="off" >
                @error('address')
                    <small class="alert text-red-600">{{$message}}</small>
                @enderror
            </div> 

            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    {{__('Own Home')}} 
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    type="text" id="ownHome" name='ownHome' placeholder={{__('Yes/No')}} value="{{old('cownHome')}}" autocomplete="off" >
                @error('ownHome')
                    <small class="alert text-red-600">{{$message}}</small>
                @enderror
            </div> 
            
        </div>



        {{-- SEND FORM --}}
         <div class="descript-info">              
            <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded " id="send-form" name="send-form" >Guardar</button>
        </div>      
    </div>
                     
</form>
</div>



@endsection 