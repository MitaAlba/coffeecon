@extends('admin/dashboard/index')

@section('titulo', 'Orders Modules')

@section('contenido')

<h1>Admin Orders EDIT</h1>
<form class="row g-3 needs-validation" novalidate method="POST" action="/admin/ordenes/{{$orders->id}}">
    {{--SEARCH investigar el significado de csrf--}}
    @csrf
    {{-- PENDING:revisar si el metodo es get o put segun el route:list --}}
    @method('PUT')
    {{-- <div class="col-md-6">
        <label for="validationCustom01" class="form-label">id</label>
        {{-- NOTE: input disabled --}}
        {{-- <input type="text" class="form-control" id="validationCustom01" name="id" value="{{$product->id}}" required>
        <div class="valid-feedback">
            Looks good!
        </div> 
    </div> --}}
    
    {{-- <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div> --}}
    
    {{-- <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div> --}}
  <div class="col-md-6">
    {{-- Verificar uso de este campo --}}
    <label for="validationCustom01" class="form-label">User_id</label>
    <input type="text" class="form-control" id="validationCustom01" name="user_id" value="{{$orders->user_id}}"  required>
    <div class="valid-feedback">
        Looks good!
    </div>
</div>
<div class="col-md-6">
    <label for="validationCustom02" class="form-label">Store_id</label>
    <input type="text" class="form-control" id="validationCustom02" name="store_id" value="{{$orders->store_id}}" required>
    <div class="valid-feedback">
        Looks good!
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustom03" class="form-label">Product_id</label>
    <input type="text" class="form-control" id="validationCustom03" name="product_id" value="{{$orders->product_id}}" required>
    <div class="invalid-feedback">
        Please provide a valid city.
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustom05" class="form-label">Total</label>
    <input type="number" class="form-control" id="validationCustom05" name="total" value="{{$orders->total}}" required>
    <div class="invalid-feedback">
        Please provide a valid zip.
    </div>
</div>
    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Status</label>
        <input type="text" class="form-control" id="validationCustom05" name="status" value="{{$orders->status}}" required>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>
    {{-- <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div> --}}
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>

@endsection