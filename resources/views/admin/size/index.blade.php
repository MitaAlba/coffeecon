@extends('admin/dashboard/index')

@section('titulo', 'Sizes Modules')

@section('contenido')
    @include('admin/size/create')
    @include('admin/size/table')
    
    
@endsection