<!doctype html>
<html lang="en">
  <head>
    @include('admin/dashboard/head')


    <title>@yield('titulo')</title>
  </head>
  <body>
    
    
    @include('admin/dashboard/header')

<div class="container-fluid">
  <div class="row">
    @include('admin/dashboard/navbar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        {{-- <h1 class="h2">Dashboard</h1> --}}
        
      </div>


    {{-- @include('admin/dashboard/content') --}}

    @yield('contenido')
    </main>
  </div>
</div>


 
    </body>
</html>
