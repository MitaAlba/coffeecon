@extends('admin/dashboard/index')

@section('titulo', 'Users Modules')

@section('contenido')
    @include('admin/user/create')
    @include('admin/user/table')
    
@endsection