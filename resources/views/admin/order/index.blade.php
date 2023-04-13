@extends('admin/dashboard/index')

@section('titulo', 'Orders Modules')

@section('contenido')
    @include('admin/order/create')
    @include('admin/order/table')
    
@endsection