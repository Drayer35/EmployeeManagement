@extends('layouts.app')

@section('title')
{{__('Admin')}}
@endsection


@section('content-section')
    <h1>Admin - Section</h1>
    @livewire('edit-employee')
@endsection