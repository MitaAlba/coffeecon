@extends('admin/dashboard/index')

@section('titulo', 'Products Modules')

@section('contenido')

<h1>Admin Products SHOW</h1>
<form class="row g-3 needs-validation" novalidate method="POST" action="/admin/productos/{{$products->id}}">
    {{--SEARCH investigar el significado de csrf--}}
    @csrf
    {{-- PENDING:revisar si el metodo es get o put segun el route:list --}}
    @method('DELETE')
    {{-- <div class="col-md-6">
        <label for="validationCustom01" class="form-label">id</label>
        {{-- NOTE: input disabled --}}
        {{-- <input type="text" class="form-control" id="validationCustom01" name="id" value="{{$products->id}}" disabled>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div> - --}}
    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Category_id</label>
        <input type="text" class="form-control" id="validationCustom01" name="category_id" value="{{$products->category_id}}" disabled>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Name</label>
        <input type="text" class="form-control" id="validationCustom02" name="name" value="{{$products->name}}" disabled>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    {{-- <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" disabled>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div> --}}
    <div class="col-md-6">
        <label for="validationCustom03" class="form-label">Description</label>
        <input type="text" class="form-control" id="validationCustom03" name="description" value="{{$products->description}}" disabled>
        <div class="invalid-feedback">
            Please provide a valid city.
        </div>
    </div>
    {{-- <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" disabled>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div> --}}
    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Image_1</label>
        <input type="text" class="form-control" id="validationCustom05" name="image_1"  value="{{$products->image_1}}"disabled>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Image_2</label>
        <input type="text" class="form-control" id="validationCustom05" name="image_2" value="{{$products->image_2}}" disabled>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Image_3</label>
        <input type="text" class="form-control" id="validationCustom05" name="image_3" value="{{$products->image_3}}" disabled>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Size_id</label>
        <input type="text" class="form-control" id="validationCustom05" name="size_id" value="{{$products->size_id}}" disabled>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Price</label>
        <input type="number" class="form-control" id="validationCustom05" name="price" value="{{$products->price}}" disabled>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">status</label>
        <input type="text" class="form-control" id="validationCustom05" name="status" value="{{$products->status}}" disabled>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>
    {{-- <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" disabled>
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