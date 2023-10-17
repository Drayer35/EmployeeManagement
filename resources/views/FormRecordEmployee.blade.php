
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
                    <th scope="col" class="px-6 py-3">
                        {{__('Admission')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('Birthdate')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('Operation')}}
                    </th>
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
                        <td class="px-6 py-4">
                            {{ $employee->name }} {{ $employee->last_name }}
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
                            {{ $employee->date_admision }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $employee->birthdate }}
                        </td>
                        <td class="px-6 py-4">
                            <button class="btn-table btn-table-edit" onclick="calling()">{{__('Edit')}}</button>
                            <button class="btn-table btn-table-delete">{{__('Delete')}}</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      {{--  <nav class="flex items-center justify-between pt-4" aria-label="Table navigation">
         
             <ul class="inline-flex -space-x-px text-sm h-8">
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul> 
           
        </nav>--}}
        <div class="px-6 py-3">
            {{$employees->links()}}
        </div>
    </div>
    {{-- @include('livewire.edit-employee') --}}
    <script src="{{ asset('js/recordEmployes.js') }}"></script>
@endsection

