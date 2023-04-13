<h1>Categories Update</h1>

<table class="table table-dark">
  <thead>
    <tr>

      {{-- Revisar si llaves foraneas tambien se agregan --}}
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $categorie)    
    <tr>
      <th scope="row">{{$categorie->id}}</th>
      <td>{{$categorie->name}}</td>
      <td>{{$categorie->description}}</td>
      <td><a href="/admin/categorias/{{$categorie->id}}/edit">edit</a></td>
      <td><a href="/admin/categorias/{{$categorie->id}}">delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>