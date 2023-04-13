<h1>Size Update</h1>

<table class="table table-dark">
  <thead>
    <tr>

      {{-- Revisar si llaves foraneas tambien se agregan --}}
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">status</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>


    </tr>
  </thead>
  <tbody>

    @foreach($sizes as $size)
    <tr>
      <th scope="row">{{$size->id}}</th>
      <td>{{$size->name}}</td>
      <td>{{$size->description}}</td>
      <td>{{$size->status}}</td>
      <td><a href="/admin/medidas/{{$size->id}}/edit">edit</a></td>
      <td><a href="/admin/medidas/{{$size->id}}">delete</a></td>

    </tr>
    @endforeach
  </tbody>
</table>