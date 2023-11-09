@extends('layouts.app')
@section('title')
{{__('Register Employee')}}
@endsection
@section('css',asset('css/employee.css'))
@section('js',asset('js/emp.js'))
@section('content-section')
    <div class="w-full flex bg-white mx-5">
        <form class="flex" id="form-employee" name="form-employee"
            action="{{ route('Employee.store')}}" 
            method="POST" enctype="multipart/form-data">
            @csrf 
            {{-- <div class=" column1">
                <div class="content-section-photo">
                    <div class="section-photo">
                        <div class="contenedor-perfil">
                            <div class="contenedor-perfil w-60">
                                <img class="img" id="img" src="{{ asset('img/photo.png')}}" value="{{old('add-photo')}}"> 
                            </div>
                         
                            @error('add-photo')
                                <span class="alert">{{$message}}</span>
                            @enderror <br>
                            <label for="add-photo" id="btn-photo"  class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 cursor-pointer rounded-lg ">Agregar Foto</label>
                        </div>
                        <input type="file"  class="hidden photo" name="add-photo" id="add-photo" accept="image/*" value="{{old('add-photo')}}"> 
               
                    </div>
                </div>
            </div> --}}
            <div class="column2 mx-7 ">
                <div class="border-b-2 border-b-gray-800 my-4 py-4">
                    <h2 class="text-4xl text-gray-800 font-extrabold " >{{__('Personal Data')}}</h2>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    {{-- <div class="flex w-72 flex-col gap-6">
                        <div class="relative h-11 w-full min-w-[200px]">
                          <input
                            placeholder="Static"
                            class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-pink-500 focus:outline-none disabled:border-0 disabled:bg-blue-gray-50  border-t-0 border-l-0 border-r-0 border-grey-dark"
                          />
                          <label class="after:content[' '] pointer-events-none absolute left-0 -top-2.5 flex h-full w-full select-none text-sm font-normal leading-tight text-blue-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-pink-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:after:scale-x-100 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 ">
                          </label>
                        </div>
                      </div> --}}
                    {{-- NAME --}}
                    <div class="w-full md:w-1/2 px-3 mb-6  md:mb-6">
                        <label class="block text-gray-700 mb-2 font-extrabold"  for="name">
                            {{__('Name')}} 
                        </label>
                        <input class="appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight" 
                            type="text" id="name" name='name' value="{{old('name')}}"  placeholder={{__('Name')}}  autocomplete="off" oninput="validateWord(this)">
                        @error('name')
                            <small class="alert text-red-600">{{$message}}</small>
                        @enderror
                    </div>

                    {{-- LAST NAME --}}
                    <div class="w-full md:w-1/2 px-2  mb-6  md:mb-6">
                        <label class="block  tracking-wide text-gray-700  font-bold mb-2" >
                            {{__('Last Name')}} 
                        </label>
                        <input class="appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none" 
                            type="text" id="lastName" name='lastName' value="{{old('lastName')}}" placeholder={{__('Last Name')}}  autocomplete="off" oninput="validateWord(this)">
                        @error('lastName')
                            <small class="alert text-red-600">{{$message}}</small>
                        @enderror
                    </div>

                    {{-- DNI --}}
                    <div class="w-full md:w-1/3 px-3  mb-6  md:mb-6">
                        <label class="block tracking-wide text-gray-700 font-bold mb-2">
                            {{__('Identity ocument')}}
                        </label>
                        <input class="appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none"  
                            type="text" id="dni" name='dni' autocomplete="off" value="{{old('dni')}}" maxlength="8" oninput="validateNumber(this)">
                        @error('dni')
                            <small class="alert text-red-600">{{$message}}</small>
                        @enderror
                    </div>
                    {{-- COUNTRY BIRTH  --}} 
                    <div class="w-full md:w-1/3 px-3">
                        <label class="block tracking-wide text-gray-700 font-bold mb-2">
                            {{__('Country Birth')}}
                        </label>
                        <select class="appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                            id="countryBirth" name="countryBirth" value={{('countryBirth')}}>
                            <option  disabled selected>{{__('Select Country')}}</option>
                                @foreach ($countries as $country)
                                    <option value="{{$country['country_name']}}">{{$country['country_name']}}</option>
                                @endforeach
                        </select>
                        @error('countryBirth')
                            <small class="alert text-red-600">{{$message}}</small>
                        @enderror
                    </div>
                    {{-- DATE BIRTHDATE --}}
                    <div class="w-full md:w-1/3 px-3 mb-6  md:mb-6">
                        <label class="block tracking-wide text-gray-700 font-bold mb-2">
                            {{__('Birthdate')}} 
                        </label>
                        <input class="appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                            type="text" id="birthdate" name='birthdate' placeholder={{__('dd/mm/aaaa')}}  value="{{old('birthdate')}}" autocomplete="off" min="1950-01-01"  onfocus="(this.type='date')" onblur="(this.type='text')">
                        @error('birthdate')
                            <small class="alert text-red-600">{{$message}}</small>
                        @enderror
                    </div>
                
                    {{-- GENDER --}}
                    <div class="w-full md:w-1/3 px-3 mb-6  md:mb-6">
                        <label class="block tracking-wide text-gray-700 font-bold mb-2">
                            {{__('Gender')}} 
                        </label>
                        <select class="appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                                id="gender-list" name="genderList">
                            <option value="" disabled {{ old('genderList') ? '' : 'selected' }}>{{__('Gender')}}</option>
                            @foreach ($genders as $gender)
                                <option value="{{ $gender['id'] }}" {{ old('genderList') == $gender['id'] ? 'selected' : '' }}>
                                    {{ $gender['gender'] }}
                                </option>
                            @endforeach 
                        </select>
                        @error('genderList')
                            <small class="alert text-red-600">{{$message}}</small>
                        @enderror
                    </div>
                
                    {{-- CIVIL STATUS --}}
                    <div class="w-full md:w-1/3 px-3 mb-6  md:mb-6">
                        <label class="block tracking-wide text-gray-700 font-bold mb-2">
                            {{__('Civil Status')}} 
                        </label>
                        <select class="appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                                id="status-list" name="statusList" >
                            <option value="" disabled {{old('statusList') ?'' : 'selected'}}>{{__('Civil Status')}}</option>
                            @foreach ($statuses as $status )
                                <option value="{{$status['id']}}" {{old('statusList') == $status['id']? 'selected' :''}}>{{$status['name']}}</option>
                            @endforeach  
                        </select>
                        @error('statusList')
                            <small class="alert text-red-600">{{$message}}</small>
                        @enderror
                    </div>     
                </div>
                
                <div class="border-b-2 border-b-gray-800 my-4 py-4">
                    <h2 class="text-4xl text-gray-800 font-extrabold " >{{__('Contact Means')}}</h2>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    {{-- INPUTS COUNTRYS --}}
                    <livewire:selected-inputs>  
                    {{-- DEEGREE INSTRUCTION --}}
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-6">
                        <label class="block tracking-wide text-gray-700  font-bold mb-2">
                            {{__('Degree Instruction')}}
                        </label>
                        <select class="appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                            id="degreeInstruction" name="degreeInstruction">
                            <option value="" disabled {{ old('degreeInstruction') ? '' : 'selected' }}>{{__('Select Degree')}}</option>
                            @foreach ($degrees as $degree)
                                <option value="{{$degree['id']}}" {{ old('degreeInstruction') == $degree['id'] ? 'selected' : '' }}>
                                    {{$degree['degree']}}
                                </option>
                            @endforeach
                        </select>
                        @error('degreeInstruction')
                            <small class="alert text-red-600">{{$message}}</small>
                        @enderror
                    </div>
                    {{-- PHONE --}}
                    <div class="w-full md:w-1/2 px-3 mb-6  md:mb-6">
                        <label class="block tracking-wide text-gray-700 font-bold mb-2">
                            {{__('Phone')}} 
                        </label>
                        <input class="appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                        type="text" id="phone" name='phone' maxlength="9"  placeholder={{__('Phone')}} value="{{old('phone')}}"  autocomplete="off" oninput="validateNumber(this)">
                        @error('phone')
                            <small class="alert text-red-600">{{$message}}</small> 
                        @enderror
                    </div>
                
                    {{-- EMAIL --}}
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-6">
                        <label class="block tracking-wide text-gray-700 font-bold mb-2">
                            {{__('Email')}} 
                        </label>
                        <input class="appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                        type="email" id="email" name='email' placeholder={{__('E-mail')}} value="{{old('email')}}" autocomplete="off">
                        @error('email')
                            <small class="alert text-red-600">{{$message}}</small>
                        @enderror
                    </div>
                
                    {{-- PROFESSION --}}
                    <div class="w-full md:w-1/2 px-3 mb-6  md:mb-6">
                        <label class="block tracking-wide text-gray-700 font-bold mb-2">
                            {{__('Profession')}} 
                        </label>
                        <input class="appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                            type="text"id="profession" name='profession' class="display-none" placeholder={{__('Profession')}} value="{{old('profession')}}" autocomplete="off" oninput="validateWord(this)">
                        @error('profession')
                            <small class="alert text-red-600">{{$message}}</small>
                        @enderror
                    </div>
                
                    {{-- DATE ADMISSION --}}
                    <div class="w-full md:w-1/2 px-3 mb-6  md:mb-6">
                        <label class="block tracking-wide text-gray-700 font-bold mb-2">
                            {{__('Date Admission')}} 
                        </label>
                        <input class="appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  "  
                            type="text" id="dateAdmission" name='dateAdmission' placeholder={{__('dd/mm/aaaa')}} value="{{old('dateAdmission')}}" autocomplete="off" min="2010-01-01" max="2025-12-31" onfocus="(this.type='date')" onblur="(this.type='text')">
                        @error('dateAdmission')
                            <small class="alert text-red-600">{{$message}}</small>
                        @enderror
                    </div>    
                        
                    {{-- CHILDRENS --}}
                    <div class="w-full md:w-1/2 px-3 mb-6  md:mb-6">
                        <label class="block tracking-wide text-gray-700 font-bold mb-2">
                            {{__('Number of Childrens')}} 
                        </label>
                        <input class="appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                            type="text" id="childrens" name='childrens' placeholder={{__('Cantidad')}} value="{{old('childrens')}}" autocomplete="off" maxlength="2" oninput="validateNumber(this)">
                        @error('childrens')
                            <small class="alert text-red-600">{{$message}}</small>
                        @enderror
                    </div> 
                
                    {{-- ADDRESS --}}
                    <div class="w-full md:w-1/2 px-3 mb-6  md:mb-6">
                        <label class="block tracking-wide text-gray-700 font-bold mb-2">
                            {{__('Address')}} 
                        </label>
                        <input class="appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  "  
                            type="text" id="address" name='address' placeholder={{__('Address')}} value="{{old('address')}}" autocomplete="off" >
                        @error('address')
                            <small class="alert text-red-600">{{$message}}</small>
                        @enderror
                    </div> 
                
                
                    {{-- OWN HOME --}}
                    <div class="w-full md:w-1/2 px-3 mb-6  md:mb-6">
                        <label class="block tracking-wide text-gray-700 font-bold mb-2">
                            {{__('Own Home')}} 
                        </label>
                        <input class="appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                            type="text" id="ownHome" name='ownHome' placeholder={{__('Yes/No')}} value="{{old('cownHome')}}" autocomplete="off" >
                        @error('ownHome')
                            <small class="alert text-red-600">{{$message}}</small>
                        @enderror
                    </div> 
                </div>
                {{-- SEND FORM --}}           
                <input type="submit" value="{{__('Register')}}" class="cursor-pointer bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded " id="send-form" name="send-form" >
            </div>     
        </form>
    </div>
@endsection 
      