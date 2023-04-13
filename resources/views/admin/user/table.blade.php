<h1>User Update</h1>

<table class="table table-dark">
  <thead>
    <tr>

      {{-- Revisar si llaves foraneas tambien se agregan --}}
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Edit</th>
      {{-- <th scope="col">Remember</th> --}}
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->password}}</td>
      <td><a href="/admin/usuarios/{{$user->id}}/edit">edit</a></td>
      <td><a href="/admin/usuarios/{{$user->id}}">delete</a></td>
    </tr>
    @endforeach

    
  </tbody>
</table>