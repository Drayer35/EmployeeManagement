<div>
    <x-danger-button wire:click="$set('open',true)" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded select-none" >
        {{__('Edit')}}
     </x-danger-button>
  
    <x-dialog-modal wire:model='open'  class="modal-centered" data-backdrop="static" data-keyboard="false">
        <x-slot name="title" style="color: black text-lg" >Datos Empleado</x-slot>
        <x-slot name="content">
            <div class="w-full flex h-auto bg-white">
                <form class="w-full flex" id="form-employee" name="form-employee"
                action="{{ route('Employee.update', ['id' => $employee->id]) }}" 
                method="POST" enctype="multipart/form-data">
                @method("PUT")
                @csrf 
            

                <div class="column2 mx-7  ">
                    <div class="border-b-2 border-b-blue-500 my-4 py-4">
                        <h2 class="text-4xl text-blue-500 font-extrabold " >{{__('Personal Data')}}</h2>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        {{-- NAME --}}
                        <div class="w-full md:w-1/3 px-3 mb-6  md:mb-6">
                            <label class="block text-gray-700 mb-2 font-extrabold"  for="name">
                                {{__('Names')}} 
                            </label>
                            <input class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight" 
                                type="text" id="name" name='name' value="{{$employee->name}}"  placeholder={{__('Name')}}  autocomplete="off" oninput="validateWord(this)">
                            @error('name')
                                <small class="alert text-red-600">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- PATERNAL SURNAME --}}
                        <div class="w-full md:w-1/3 px-2  mb-6  md:mb-6">
                            <label class="block  tracking-wide text-gray-700  font-bold mb-2" >
                                {{__('Last Names')}} 
                            </label>
                            <input class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none" 
                                type="text" id="paternalSurname" name='paternalSurname' value="{{$employee->paternal_surname}}" placeholder={{__('Paternal Surname')}}  autocomplete="off" oninput="validateWord(this)">
                            @error('paternalSurname')
                                <small class="alert text-red-600">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- MATERNAL SURNAME --}}
                        <div class="w-full md:w-1/3 px-2  mb-6  md:mb-6">
                            <label class="block  tracking-wide text-white font-bold mb-2 select-none" >
                                {{__('Last Names')}} 
                            </label>
                            <input class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none" 
                                type="text" id="maternalSurname" name='maternalSurname' value="{{$employee->maternal_surname}}" placeholder={{__('Maternal Surname')}}  autocomplete="off" oninput="validateWord(this)">
                            @error('maternalSurname')
                                <small class="alert text-red-600">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- DNI --}}
                        <div class="w-full md:w-1/3 px-3  mb-6  md:mb-6">
                            <label class="block tracking-wide text-gray-700 font-bold mb-2">
                                {{__('Identity Document')}}
                            </label>
                            <input class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none"  
                                type="text" id="dni" name='dni' autocomplete="off" value="{{$employee->dni}}" maxlength="8" oninput="validateNumber(this)">
                            @error('dni')
                                <small class="alert text-red-600">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- COUNTRY BIRTH  --}} 
                        <div class="w-full md:w-1/3 px-3 mb-6  md:mb-6">
                            <label class="block tracking-wide text-gray-700 font-bold mb-2">
                                {{__('Country Birth')}}
                            </label>
                            <select class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                                id="countryBirth" name="countryBirth">
                                <option  value="" disabled {{ old('countryBirth') ? '' : 'selected' }}>{{__('Select Country')}}</option>
                                    @foreach ($countries as $country)
                                    <option value="{{$country['country_name']}}" @if($country['country_name']== $employee->country_birth ){{'selected'}}@endif>{{$country['country_name']}}</option>
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
                            <input class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                                type="text" id="birthdate" name='birthdate' placeholder={{__('dd/mm/aaaa')}}  value="{{$employee->birthdate}}" autocomplete="off" min="1950-01-01"  onfocus="(this.type='date')" onblur="(this.type='text')">
                            @error('birthdate')
                                <small class="alert text-red-600">{{$message}}</small>
                            @enderror
                        </div>
                    
                        {{-- GENDER --}}
                        <div class="w-full md:w-1/2 px-3 mb-6  md:mb-6">
                            <label class="block tracking-wide text-gray-700 font-bold mb-2">
                                {{__('Gender')}} 
                            </label>
                            <select class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                                    id="genderList" name="genderList">
                                <option value="" disabled {{ old('genderList') ? '' : 'selected' }}>{{__('Gender')}}</option>
                                @foreach ($genders as $gender)
                                    <option value="{{$gender['id']}}" @if($gender->id ==$employee->gender_id){{'selected'}}@endif>{{$gender['gender']}}</option>
                                @endforeach 
                            </select>
                            @error('genderList')
                                <small class="alert text-red-600">{{$message}}</small>
                            @enderror
                        </div>
                    
                        {{-- CIVIL STATUS --}}
                        <div class="w-full md:w-1/2 px-3 mb-6  md:mb-6">
                            <label class="block tracking-wide text-gray-700 font-bold mb-2">
                                {{__('Civil Status')}} 
                            </label>
                            <select class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                                    id="status-list" name="statusList" >
                                <option value="" disabled {{old('statusList') ?'' : 'selected'}}>{{__('Civil Status')}}</option>
                                @foreach ($statuses as $status )
                                    <option value="{{$status['id']}}" @if ($status->id == $employee->status_id){{'selected'}} @endif>{{$status['name']}}</option>
                                @endforeach  
                            </select>
                            @error('statusList')
                                <small class="alert text-red-600">{{$message}}</small>
                            @enderror
                        </div>  
    
                        {{-- CHILDRENS --}}
                        <div class="w-full md:w-1/2 px-3 mb-6  md:mb-6">
                            <label class="block tracking-wide text-gray-700 font-bold mb-2">
                                {{__('Number of Childrens')}} 
                            </label>
                            <input class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                                type="text" id="childrens" name='childrens' placeholder={{__('Cantidad')}} value="{{$employee->children}}" autocomplete="off" maxlength="2" oninput="validateNumber(this)">
                            @error('childrens')
                                <small class="alert text-red-600">{{$message}}</small>
                            @enderror
                        </div> 
    
                        {{-- DEEGREE INSTRUCTION --}}
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-6">
                            <label class="block tracking-wide text-gray-700  font-bold mb-2">
                                {{__('Degree Instruction')}}
                            </label>
                            <select class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                                id="degreeInstruction" name="degreeInstruction">
                                <option value="" disabled {{ old('degreeInstruction') ? '' : 'selected' }}>{{__('Select Degree')}}</option>
                                @foreach ($degrees as $degree)
                                    <option value="{{$degree['id']}}" @if($degree['id'] == $employee->degree_instruction_id){{'selected'}}@endif >
                                        {{$degree['degree']}}
                                    </option>
                                @endforeach
                            </select>
                            @error('degreeInstruction')
                                <small class="alert text-red-600">{{$message}}</small>
                            @enderror
                        </div>  
    
                         {{-- INPUTS COUNTRYS --}}
                        @livewire('employee-ubication-inputs',['idEmp' => $employee->id])
                          
                        {{-- DISTRICT --}}
                        <div class="w-full md:w-1/3 px-3 mb-6  md:mb-6">
                            <label class="block tracking-wide text-gray-700 font-bold mb-2">
                                {{__('District')}} 
                            </label>
                            <input class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  "  
                                type="text" id="district" name='district' placeholder={{__('District')}} value="{{$employee->district}}" autocomplete="off" >
                            @error('district')
                                <small class="alert text-red-600">{{$message}}</small>
                            @enderror
                        </div> 
                        {{-- ADDRESS --}}
                        <div class="w-full md:w-1/3 px-3 mb-6  md:mb-6">
                            <label class="block tracking-wide text-gray-700 font-bold mb-2">
                                {{__('Address')}} 
                            </label>
                            <input class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  "  
                                type="text" id="address" name='address' placeholder={{__('Address')}} value="{{$employee->address}}" autocomplete="off" >
                            @error('address')
                                <small class="alert text-red-600">{{$message}}</small>
                            @enderror
                        </div> 
                    
                        {{-- OWN HOME --}}
                        <div class="w-full md:w-1/2 px-3 mb-6  md:mb-6">
                            <label class="block tracking-wide text-gray-700 font-bold mb-2">
                                {{__('Own Home')}} 
                            </label>
                            <input class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                                type="text" id="ownHome" name='ownHome' placeholder={{__('Yes/No')}} value="{{$employee->own_home}}" autocomplete="off" >
                            @error('ownHome')
                                <small class="alert text-red-600">{{$message}}</small>
                            @enderror
                        </div> 
    
                        {{-- PROFESSION --}}
                        <div class="w-full md:w-1/2 px-3 mb-6  md:mb-6">
                            <label class="block tracking-wide text-gray-700 font-bold mb-2">
                                {{__('Profession')}} 
                            </label>
                            <input class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                                type="text"id="profession" name='profession' class="display-none" placeholder={{__('Profession')}} value="{{$employee->profession}}" autocomplete="off" oninput="validateWord(this)">
                            @error('profession')
                                <small class="alert text-red-600">{{$message}}</small>
                            @enderror
                        </div> 
                    </div>
                    
                    <div class="border-b-2 border-b-blue-500  my-4 py-4">
                        <h2 class="text-4xl text-blue-500 font-extrabold " >{{__('Contact Means')}}</h2>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        
                        {{-- PHONE --}}
                        <div class="w-full md:w-1/2 px-3 mb-6  md:mb-6">
                            <label class="block tracking-wide text-gray-700 font-bold mb-2">
                                {{__('Phone')}} 
                            </label>
                            <input class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                            type="text" id="phone" name='phone' maxlength="9"  placeholder={{__('Phone')}} value="{{$employee->phone}}"  autocomplete="off" oninput="validateNumber(this)">
                            @error('phone')
                                <small class="alert text-red-600">{{$message}}</small> 
                            @enderror
                        </div>
                    
                        {{-- EMAIL --}}
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-6">
                            <label class="block tracking-wide text-gray-700 font-bold mb-2">
                                {{__('Email')}} 
                            </label>
                            <input class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  " 
                            type="email" id="email" name='email' placeholder={{__('E-mail')}} value="{{$employee->email}}" autocomplete="off">
                            @error('email')
                                <small class="alert text-red-600">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="border-b-2 border-b-blue-500 my-4 py-4">
                        <h2 class="text-4xl text-blue-500 font-extrabold " >{{__('Business Details')}}</h2>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                      {{-- DATE ADMISSION --}}
                      <div class="w-full md:w-1/2 px-3 mb-6  md:mb-6">
                        <label class="block tracking-wide text-gray-700 font-bold mb-2">
                            {{__('Date Admission')}} 
                        </label>
                        <input class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  "  
                            type="text" id="dateAdmission" name='dateAdmission' placeholder={{__('dd/mm/aaaa')}} value="{{$employee->date_admission}}" autocomplete="off" min="2010-01-01" max="2025-12-31" onfocus="(this.type='date')" onblur="(this.type='text')">
                        @error('dateAdmission')
                            <small class="alert text-red-600">{{$message}}</small>
                        @enderror
                    </div>  
                    <div class="descript-info">              
                        <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded" id="send-form" name="send-form" >Guardar</button>
                    </div>    
                        
                </div>
                                 
            </form>
        </div>

            
      </x-slot>

      <x-slot name="footer">
        <x-danger-button wire:click="$set('open',false)" class="mx-2 bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" >
            {{__('Cancel')}}
        </x-danger-button>

        {{-- <label for="send-form" class="cursor-pointer mx-2 bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded"  >{{__('Save Changes')}}</label>
      --}}
      </x-slot>
    </x-dialog-modal>
    

</div>
