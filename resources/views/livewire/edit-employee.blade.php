<div>
    <x-danger-button wire:click="$set('open',true)" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" >
        {{__('Edit')}}
     </x-danger-button>

    <x-dialog-modal wire:model='open'  class="modal-centered">
        <x-slot name="title" style="color: black">Datos Empleado</x-slot>
        <x-slot name="content">
      
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

            <form class="form-employee w-full max-w-lg" id="form-employee" 
                action="{{ route('formemployee.update', ['id' => $employee->id]) }}" 
                method="POST" enctype="multipart/form-data">
                @method("PUT")
                @csrf 
            

                <input type="file"  class="photo" name="add-photo" id="add-photo" accept="image/*" value="{{old('add-photo')}}"> 
    
                
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                            {{__('Name')}} 
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                               type="text" id="name" name='name' value="{{ $employee->name}}"  placeholder={{__('Name')}}  autocomplete="off" oninput="validateWord(this)">
                        @error('name')
                        <br>
                            <small class="alert">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/3 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            {{__('Last Name')}} 
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                               type="text" id="lastName" name='lastName' value="{{$employee->last_name}}" placeholder={{__('Last Name')}}  autocomplete="off" oninput="validateWord(this)">
                        @error('lastName')
                            <small class="alert">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="w-full md:w-1/3 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            {{__('DNI')}} 
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                               type="text" id="dni" name='dni' placeholder="DNI" autocomplete="off" value="{{$employee->dni}}" maxlength="8" oninput="validateNumber(this)">
                        @error('dni')
                            <small class="alert">{{$message}}</small>
                        @enderror
                    </div>
                   
                </div>
            
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            {{__('Birthdate')}} 
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                               type="text" id="birthdate" name='birthdate' placeholder={{__('Birthdate')}}  value="{{$employee->birthdate}}" autocomplete="off" min="1950-01-01"  onfocus="(this.type='date')" onblur="(this.type='text')">
                        @error('birthdate')
                            <small class="alert">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/3 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            {{__('Gender')}} 
                        </label>
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                            id="gender-list" name="genderList" class="select" >
                            <option value="" disabled selected>{{__('Gender')}} </option>
                            @foreach ($genders as $gender )
                                <option value="{{$gender['id']}}" @if($gender->id ==$employee->gender_id){{'selected'}}@endif>{{$gender['gender']}}</option>
                            @endforeach 
                        </select>
                        @error('genderList')
                            <small class="alert">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="w-full md:w-1/3 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            {{__('Civil Status')}} 
                        </label>
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="status-list" name="statusList" class="select" >
                            <option value="" disabled selected>{{__('Civil Status')}}</option>
                            @foreach ($statuses as $status )
                                <option value="{{$status['id']}}" @if ($status->id == $employee->status_id){{'selected'}} @endif>{{$status['name']}}</option>
                            @endforeach  
                        </select>
                        @error('statusList')
                            <small class="alert">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <livewire:selected-inputs>
            
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            {{__('Phone')}} 
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" id="phone" name='phone' maxlength="9"  placeholder={{__('Phone')}} value="{{$employee->phone}}"  autocomplete="off" oninput="validateNumber(this)">
                        @error('phone')
                            <small class="alert">{{$message}}</small> 
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            {{__('Email')}} 
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                        type="email"id="email" name='email' placeholder={{__('E-mail')}} value="{{$employee->email}}" autocomplete="off">
                        @error('email')
                            <small class="alert">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            {{__('Profession')}} 
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text"id="profession" name='profession' class="display-none" placeholder={{__('Profession')}} value="{{$employee->profession}}" autocomplete="off" oninput="validateWord(this)">
                        @error('profession')
                            <small class="alert">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            {{__('Date Admission')}} 
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                            type="text" id="dateAdmission" name='dateAdmission' placeholder={{__('Date Admission')}} value="{{$employee->date_admision}}" autocomplete="off" min="2010-01-01" max="2025-12-31" onfocus="(this.type='date')" onblur="(this.type='text')">
                        @error('dateAdmission')
                            <small class="alert">{{$message}}</small>
                        @enderror
                    </div>                    
                </div>

                <div class="descript-info">              
                    <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded " >Guardar</button>
                </div>                       
            </form>
        </div>
      </x-slot>
      <x-slot name="footer">Pie de página del Modal</x-slot>
    </x-dialog-modal>
    

</div>
