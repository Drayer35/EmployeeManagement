<div> 
    <div class=" py-8 flex">    
        <x-input type="text" wire:model='search' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mr-6 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  >     
        </x-input>
        <x-danger-button  class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded select-none" >
                {{__('Add Employee')}}
        </x-danger-button>    
    </div>
    @if ($employees->count())
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-700  dark:text-gray-400">
            <thead class="text-xs  text-gray-900 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    {{-- <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>  --}}
                    <th scope="col" class="px-6 py-3 cursor-pointer select-none" wire:click="order('id')" >
                        {{__('#ID')}}
                    </th>
                    <th scope="col" class="px-6 py-3 cursor-pointer select-none" wire:click="order('name')" >
                        {{__('Name')}}
                    </th>
                    <th scope="col" class="px-6 py-3 cursor-pointer select-none ">
                        {{__('Dni')}}
                    </th>
                    {{-- <th scope="col" class="px-6 py-3 cursor-pointer select-none ">
                        {{__('Civil Status')}}
                    </th> --}}
                    <th scope="col" class="px-6 py-3 cursor-pointer select-none ">
                        {{__('Department')}}
                    </th>
                    <th scope="col" class="px-6 py-3 cursor-pointer select-none ">
                        {{__('Province')}}
                    </th>
                    <th scope="col" class="px-6 py-3 cursor-pointer select-none ">
                        {{__('Profession')}}
                    </th>
                    <th scope="col" class="px-6 py-3 select-none"> {{__('Edit')}}</th>
                    <th scope="col" class="px-6 py-3 select-none"> {{__('Delete')}} </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        {{-- <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                        </td> --}}
                        <td class="px-6 py-4">{{$employee->id}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-12 w-12">
                                    {{-- <img src="data:image/png;base64,{{ base64_encode($employee->photo)}}"> --}}

                                    <img class="img select-none pointer-events-none" id="img" src="
                                    @if (is_null($employee->photo))
                                        {{ asset('img/photo.png') }}
                                    @else
                                        data:image/png;base64,{{ base64_encode($employee->photo) }}
                                    @endif">
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
                            {{ $employee->dni }}
                        </td>
                        {{-- <td class="px-6 py-4">
                            {{ $employee->status->name }}
                        </td> --}}
                        <td class="px-6 py-4">
                            {{ $employee->department->department }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $employee->province->province }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $employee->profession }}
                        </td>
                    
                        <td class="px-6 py-4">
                            @livewire('edit-employee',['id' => $employee->id])
                        </td>
                        <td>
                            <form action="{{ route('Employee.delete', ['id' => $employee->id]) }}" method="POST">
                                @method("DELETE")
                                @csrf
                                <button type="submit"  class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded select-none ">{{__('Delete')}}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="px-6 py-3">
            {{-- {{$employees->links()--}}
        </div>
    </div>
    @else
        <div class=" justify-center pointer-events-none  ">
            <img src={{asset('img/humano.png')}} class="w-32 h-32 select-none pointer-events-none " >
            <span class="select-none">{{__('Data not found.')}}</span>
        </div>
    @endif
   
</div>

    