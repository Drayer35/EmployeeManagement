<div>
    <div class="flex flex-wrap -mx-3 mb-6">
        {{-- COUNTRY BIRTH --}} 
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                {{__('Country Bitrth')}} 
            </label>
            <select id="countriesList" name="countriesList" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
                <option  disabled selected>{{__('Select Country')}}</option>
                    @foreach ($countries as $country)
                        <option value="{{$country['country_name']}}">{{$country['country_name']}}</option>
                    @endforeach
            </select>
            @error('countriesList')
                <small class="alert text-red-600">{{$message}}</small>
            @enderror
        </div>

        {{-- COUNTRY DOMICILE  --}}
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                {{__('Country Domicile')}} 
            </label>
            <select wire:change='updatedepartments()' wire:model='departments'  class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="countriesList" name="countriesList" >
                <option value="default" disabled selected>{{__('Select Country')}}</option>
                    @foreach ($countries as $country)
                        <option value="{{$country['country_name']}}">{{$country['country_name']}}</option>
                    @endforeach
            </select>
            @error('countriesDomicile')
                <small class="alert text-red-600">{{$message}}</small>
            @enderror
        </div>
      
        {{-- DEPARTMENT --}}

        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                {{__('Department')}} 
            </label>
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="department-list" name="departmentList" class="select" wire:model='selectedDepa' >
                <option value="0" disabled selected>{{__('Select Department')}}</option>       
                    @foreach ($departments as $dep)
                    <option value="{{$dep['state_name']}}">{{$dep['state_name']}}</option>
                    @endforeach
            </select>
            @error('departmentList')
                <small class="alert text-red-600">{{$message}}</small>
            @enderror
        </div>
        {{-- CITY 
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                {{__('Province')}} 
            </label>
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="provinceList" name="provinceList" class="select">
                <option value="" disabled selected>{{__('Select Province')}}</option> 
                @foreach ($cities as  $city)
                <option value="{{$city['city_name']}}">{{$city['city_name']}}</option>
                @endforeach
            </select>
            @error('provinceList')
                <small class="alert text-red-600">{{$message}}</small>
            @enderror
        </div>

        {{-- DEEGREE INSTRUCTION  --}}
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                {{__('Degree Instruction')}} 
            </label>
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="degreeInstruction" name="degreeInstruction" class="select">
                <option value="0" disabled selected>{{__('Select Degree')}}</option>       
                @foreach ($degrees as $degree ) 
                    <option value="{{$degree['id']}}">{{$degree['degree']}}</option>
                @endforeach    
            </select>
            @error('degreeInstruction')
                <small class="alert text-red-600">{{$message}}</small>
            @enderror
        </div>



    </div>
</div>
