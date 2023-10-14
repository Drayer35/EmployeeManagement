<div>
    <div class="inputs">
        <select id="department-list" name="departmentList" class="select" wire:model='selectedDepa' >
            <option value="0" disabled selected>{{__('Department')}}</option>       
            @foreach ($departamentos as $dep ) 
                <option value="{{$dep['id']}}">{{$dep['department']}}</option>
            @endforeach    
        </select>
        @error('departmentList')
                    <small class="alert">{{$message}}</small>
                @enderror
    </div>
    
    <div class="inputs">
        <select id="province-list" name="provinceList" class="select">
            <option value="" disabled selected>{{__('Province')}}</option> 
            @foreach ($provinces as  $prov)
            <option value="{{$prov->id}}">{{$prov->province}}</option>
            @endforeach
        </select>
        @error('provinceList')
                    <small class="alert">{{$message}}</small>
                @enderror
    </div>
</div>
  
