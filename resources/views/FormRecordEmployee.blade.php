@extends('layouts.app')

@section('title','Record Employee')



@section('content-section')

    <table>
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>BIRTHDATE</th>
                <th>DNI</th>
                <th>IMAGEN</th> 
                <th>OPERACIONES</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->birthdate }}</td>
                    <td>{{ $employee->dni }}</td>
                    <td>
                        <img src="data:image/png;base64,{{ base64_encode($employee->photo) }}">
                    </td>
                    <td><button>Editar</button> <button>Borrar</button></td>
                    
            
                </tr>
            @endforeach
        </tbody>
    </table>



@endsection