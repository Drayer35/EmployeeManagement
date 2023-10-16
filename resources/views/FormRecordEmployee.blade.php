
@extends('layouts.app')

@section('title')
{{__('Record Employee')}}
@endsection
@section('content-section')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> 
    <link rel="stylesheet" href="{{ asset('/css/record.css') }}">
   
    <div class="card"> 
        <div>
            <div>
                {{-- <input type="text" id="first_name"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{__('Filter')}}" required>
               
                <x-danger-button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    {{__('Add Employee')}}
                </x-danger-button>  --}}
            </div>
        </div>
     
        <div class="card-body table-responsive">
            <table class="table table-hover"  id="employees">
               
                <thead>
                    <tr>
                        <th scope="col" >{{__('Name')}}</th>
                        <th scope="col">{{__('Dni')}}</th>
                        <th scope="col">{{__('Civil Status')}}</th>
                        <th scope="col">{{__('Department')}}</th>
                        <th scope="col">{{__('Province')}}</th>
                        <th scope="col">{{__('Profession')}}</th>
                        <th scope="col">{{__('Admission')}}</th>
                        <th scope="col">{{__('Birthdate')}}</th>
                        <th scope="col">{{__('Operation')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->name }} {{ $employee->last_name }}</td>
                            <td>{{ $employee->dni}}</td>
                            <td>{{ $employee->status->name}}</td>
                            <td>{{ $employee->department->department}}</td>
                            <td>{{ $employee->province->province}}</td>
                            <td>{{$employee->profession}}</td>
                            <td>{{ $employee->date_admision}}</td>
                            <td>{{ $employee->birthdate}}</td>
                             {{-- <td>
                                <img   src="data:image/png;base64,{{ base64_encode($employee->photo) }}">
                            </td>  --}}
                            <td>
                                <button class="btn-table btn-table-edit" onclick="calling()">{{__('Edit')}}</button>
                                <button class="btn-table btn-table-delete">{{__('Delete')}}</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table> 
        </div>
    </div>
    {{-- @include('livewire.edit-employee') --}}
    <script src="{{ asset('js/recordEmployes.js') }}"></script>
@endsection

