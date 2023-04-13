@extends('admin/dashboard/index')

@section('titulo', 'Category Modules')

@section('contenido')
    @include('admin/category/create')
    @include('admin/category/table')
    
@endsection