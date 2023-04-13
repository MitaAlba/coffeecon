@extends('admin/dashboard/index')

@section('titulo', 'Products Modules')

@section('contenido')
    @include('admin/product/create')
    @include('admin/product/table')
    
    
@endsection