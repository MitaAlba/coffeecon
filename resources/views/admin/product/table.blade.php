<h1>Products Update</h1>

<table class="table table-dark">
  <thead>
    <tr>

      {{-- Revisar si llaves foraneas tambien se agregan --}}
      <th scope="col">id</th>
      <th scope="col">category_id</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">image_1</th>
      <th scope="col">image_2</th>
      <th scope="col">image_3</th>
      <th scope="col">price</th>
      <th scope="col">size_id</th>
      <th scope="col">status</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>


    </tr>
  </thead>
  <tbody>

    @foreach($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->category_id}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->image_1}}</td>
      <td>{{$product->image_2}}</td>
      <td>{{$product->image_3}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->size_id}}</td>
      <td>{{$product->status}}</td>
      <td><a href="/admin/productos/{{$product->id}}/edit">edit</a></td>
      <td><a href="/admin/productos/{{$product->id}}">delete</a></td>

    </tr>
    @endforeach
  </tbody>
</table>