
@extends('layouts.app')

@section('title','Record Employee')

@section('content-section')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

<link rel="stylesheet" href="{{ asset('/css/record.css') }}">
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="employees">
                <thead>
                    <tr>
                        <th>NOMBRE</th>
                        {{-- <th>APELLIDOS</th> --}}
                        {{-- <th>GENERO</th> --}}
                        <th>ESTADO</th>
                        <th>DEPARTAMENTO</th>
                        <th>PROVINCIA</th>
                        <th>CONTRATO</th>
                        <th>Nacimiento</th>
                        <th>DNI</th>
                        {{-- <th>IMAGEN</th>  --}}
                        <th>OPERACIONES</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->name }} {{ $employee->last_name }}</td>
                       
                            {{-- <td>{{ $employee->gender->gender}}</td> --}}
                            <td>{{ $employee->status->name}}</td>
                            <td>{{ $employee->department->department}}</td>
                            <td>{{ $employee->province->province}}</td>
                            <td>{{ $employee->date_admision}}</td>
                            <td>{{ $employee->birthdate }}</td>
                            <td>{{ $employee->dni}}</td>
                           
                            {{-- <td>
                                <img src="data:image/png;base64,{{ base64_encode($employee->photo) }}">
                            </td> --}}
                            <td>
                                <button class="btn-table btn-table-edit" >{{__('Edit')}}<i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="btn-table btn-table-delete">{{__('Delete')}}</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@endsection

