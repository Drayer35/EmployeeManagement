<div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                {{__('Department')}} 
            </label>
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="department-list" name="departmentList" class="select" wire:model='selectedDepa' >
                <option value="0" disabled selected>{{__('Select Department')}}</option>       
                @foreach ($departamentos as $dep ) 
                    <option value="{{$dep['id']}}">{{$dep['department']}}</option>
                @endforeach    
            </select>
            @error('departmentList')
                <small class="alert">{{$message}}</small>
            @enderror
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                {{__('Province')}} 
            </label>
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="province-list" name="provinceList" class="select">
                <option value="" disabled selected>{{__('Select Province')}}</option> 
                @foreach ($provinces as  $prov)
                <option value="{{$prov->id}}">{{$prov->province}}</option>
                @endforeach
            </select>
            @error('provinceList')
                <small class="alert">{{$message}}</small>
            @enderror
        </div>
    </div>
</div>
