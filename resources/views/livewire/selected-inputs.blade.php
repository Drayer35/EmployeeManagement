<div class="flex md:w-1/3">
    {{-- DEPARTMENTS --}}
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-6">
        <label class="block tracking-wide text-gray-700 font-bold mb-2" >
            {{__('Department')}} 
        </label>
        <select class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  "  
                id="department-list" name="departmentList" wire:model='selectedDepa' required>
            <option value="0" disabled selected>{{__('Select Department')}}</option>       
            @foreach ($departamentos as $dep ) 
                <option value="{{$dep['id']}}">{{$dep['department']}}</option>
            @endforeach    
        </select>
        @error('departmentList')
            <small class="alert  text-red-600">{{$message}}</small>
        @enderror
    </div> 
        
    {{-- PROVINCES --}}
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-6">
        <label class="block  tracking-wide text-gray-700 font-bold mb-2">
            {{__('Province')}} 
        </label>
        <select class="rounded appearance-none block w-full bg-transparent text-gray-700 border border-gray-200  py-3 px-4 leading-tight focus:outline-none  "  
                id="province-list" name="provinceList" required>
            <option value="" disabled selected>{{__('Select Province')}}</option> 
            @foreach ($provinces as  $prov)
            <option value="{{$prov->id}}">{{$prov->province}}</option>
            @endforeach
        </select>
        @error('provinceList')
           <small class="alert  text-red-600">{{$message}}</small>
        @enderror
    </div> 
</div>
