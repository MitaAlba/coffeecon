<h1>Stores Update</h1>

<table class="table table-dark">
  <thead>
    <tr>

      {{-- Revisar si llaves foraneas tambien se agregan --}}
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Schedule</th>
      <th scope="col">Status</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($stores as $store)

    <tr>
      <th scope="row">{{$store->id}}</th>
      <td>{{$store->name}}</td>
      <td>{{$store->address}}</td>
      <td>{{$store->schedule}}</td>
      <td>{{$store->status}}</td>
      <td><a href="/admin/tiendas/{{$store->id}}/edit">edit</a></td>
      <td><a href="/admin/tiendas/{{$store->id}}">delete</a></td>

    </tr>
    @endforeach

  </tbody>
</table>