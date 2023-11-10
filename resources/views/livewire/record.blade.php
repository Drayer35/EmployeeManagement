<div> 
    <div class=" py-8 flex">    
        <x-input type="text" wire:model='search' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mr-6 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  >     
        </x-input>
        <livewire:employee.create>
    </div>
    @if ($employees->count())
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                <tr>
                    <th scope="col" class="px-6 py-3 cursor-pointer select-none" wire:click="order('id')">
                        {{{__('#')}}}
                    </th>
                    <th scope="col" class="px-6 py-3 cursor-pointer select-none" wire:click="order('name')">
                        {{{__('Name')}}}
                    </th>
                    <th scope="col" class="px-6 py-3 cursor-pointer select-none" wire:click="order('id')">
                        {{{__('Dni')}}}
                    </th>
                    <th scope="col" class="px-6 py-3 cursor-pointer select-none">
                        {{{__('Department')}}}
                    </th>
                    <th scope="col" class="px-6 py-3 cursor-pointer select-none">
                        {{{__('Province')}}}
                    </th>
                    <th scope="col" class="px-6 py-3 cursor-pointer select-none">
                        {{{__('Profession')}}}
                    </th>

                    <th>
                        {{__('Options')}}
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee )
                <tr class="bg-white border-b  hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap select-none" >
                        {{$employee->id}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap select-none" >
                        <div class="flex items-center">                                
                            <div class="flex-shrink-0 h-12 w-12">
                                @if (is_null($employee->photo))
                                    <img src="{{ asset('img/photo.png') }}">
                                @else
                                    <img src="data:image/png;base64,{{ base64_encode($employee->photo) }}">
                                @endif
                            </div>
                        <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                        {{ $employee->name }} {{ $employee->last_name }}
                                </div>
                                <div class="text-sm text-gray-500">
                                    {{ $employee->email }}
                                </div>
                            </div>
                        </div>
                    </td>
                   
                    <td class="px-6 py-4">
                        {{$employee->dni}}
                    </td>
                    <td class="px-6 py-4">
                        {{$employee->department->department}}
                    </td>
                    <td class="px-6 py-4">
                        {{$employee->province->province}}
                    </td>
                    <td>
                        {{$employee->profession}}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex">
                           
                        @livewire('edit-employee',['id' => $employee->id])
                        {{-- <a href="" class="btn btn-green" wire:click="edit({{$employee}})">
                            {{__('Edit')}}
                        </a> --}}
                            <form action="{{ route('Employee.delete', ['id' => $employee->id]) }}" method="POST">
                                @method("DELETE")
                                @csrf
                                <button type="submit"  class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded select-none ">{{__('Delete')}}</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
          {{-- {{$employees->links()--}}
    </div>
    @else
        <div class=" justify-center pointer-events-none  ">
            <img src={{asset('img/humano.png')}} class="w-32 h-32 select-none pointer-events-none " >
            <span class="select-none">{{__('Data not found.')}}</span>
        </div>
    @endif
   
</div>

    