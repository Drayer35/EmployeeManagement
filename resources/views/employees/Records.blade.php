
@extends('layouts.app')
@section('title')
{{__('Record Employee')}}
@endsection
@section('content-section')
<link rel="stylesheet" href="{{ asset('/css/record.css') }}">
<div>

        <livewire:employee.record>
</div>

    <script src="{{ asset('js/recordEmployes.js') }}"></script>
@endsection

