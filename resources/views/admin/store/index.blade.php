@extends('admin/dashboard/index')

@section('titulo', 'Stores Modules')

@section('contenido')
    @include('admin/store/create')
    @include('admin/store/table')
    
@endsection