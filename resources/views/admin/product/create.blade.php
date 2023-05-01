<h1>Admin Products CREATE</h1>

<form class="row g-3 needs-validation" novalidate method="POST" action="/admin/productos" 
enctype="multipart/form-data">
    
    {{-- investigar el significado de csrf--}}
    @csrf
    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Category_id</label>
        {{-- <input type="text" class="form-control" id="validationCustom01" name="category_id"  required> --}}
        <select class="form-select" aria-label="Default select examples" name="category_id">
            <option selected>Category</option>
            @foreach($categories as $categorie)
            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
            @endforeach

        </select>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Name</label>
        <input type="text" class="form-control" id="validationCustom02" name="name"  required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
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
    <div class="col-md-6">
        <label for="validationCustom03" class="form-label">Description</label>
        <input type="text" class="form-control" id="validationCustom03" name="description" required>
        <div class="invalid-feedback">
            Please provide a valid city.
        </div>
    </div>
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
        <label for="validationCustom05" class="form-label">Image_1</label>
        <input type="file" class="form-control" id="validationCustom05" name="image_1" 
        accept="image/*" required>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Image_2</label>
        <input type="file" class="form-control" id="validationCustom05" name="image_2" 
        accept="image/*" required>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Image_3</label>
        <input type="file" class="form-control" id="validationCustom05" name="image_3"
        accept="image/*" required>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>

    {{-- <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Size_id</label>
        {{-- <input type="text" class="form-control" id="validationCustom05" name="size_id" required> --}}
        {{-- <select class="form-select" aria-label="Default select examples" name="size_id" multiple>
            <option selected>Size</option>
            @foreach($sizes as $size)
            <option value="{{$size->id}}">{{$size->name}}</option>
            @endforeach
        </select>
        <p>Hold down the Ctrl (windows) / Command (Mac) button to select multiple options.</p>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>  --}}
    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Size_id</label>
        <input type="text" class="form-control" id="validationCustom05" name="size_id" required>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>


    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Price</label>
        <input type="number" class="form-control" id="validationCustom05" name="price" required>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">status</label>
        <input type="text" class="form-control" id="validationCustom05" name="status" required>
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
