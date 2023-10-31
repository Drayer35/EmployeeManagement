
@extends('layouts.app')

@section('title')
{{__('Record Employee')}}
@endsection
@section('content-section')
<link rel="stylesheet" href="{{ asset('/css/record.css') }}">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-700  dark:text-gray-400 ">
            <thead class="text-xs text-gray-900 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('Name')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('Dni')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('Civil Status')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('Department')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('Province')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('Profession')}}
                    </th>
                    <th scope="col" class="px-6 py-3"> {{__('Edit')}}</th>
                    <th scope="col" class="px-6 py-3">{{__('Delete')}} </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    {{-- <img src="data:image/png;base64,{{ base64_encode($employee->photo)}}"> --}}

                                    <img class="img" id="img" src="
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
                        <td class="px-6 py-4">
                            {{ $employee->status->name }}
                        </td>
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
                            <a href="{{ route('formemployee.edit', ['id' => $employee->id]) }}" class="bg-blue-600 hover:bg-blue-700  text-white font-bold py-2 px-4 rounded">{{__('Edit')}}</a>
                        </td>
                        <td>
                            <form action="{{ route('formemployee.delete', ['id' => $employee->id]) }}" method="POST">
                                @method("DELETE")
                                @csrf
                                <button type="submit"  class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">{{__('Delete')}}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="px-6 py-3">
            {{$employees->links()}}
        </div>
    </div>
    <script src="{{ asset('js/recordEmployes.js') }}"></script>
@endsection

