<h1>Orders Update</h1>

<table class="table table-dark">
  <thead>
    <tr>

      {{-- Revisar si llaves foraneas tambien se agregan --}}
      <th scope="col">Id</th>
      <th scope="col">User_id</th>
      <th scope="col">Store_id</th>
      <th scope="col">Product_id</th>
      <th scope="col">Total</th>
      <th scope="col">Status</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>




    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
      <th scope="row">{{$order->id}}</th>
      <td>{{$order->user_id}}</td>
      <td>{{$order->store_id}}</td>
      <td>{{$order->product_id}}</td>
      <td>{{$order->total}}</td>
      <td>{{$order->status}}</td>

      <td><a href="/admin/ordenes/{{$order->id}}/edit">edit</a></td>
      <td><a href="/admin/ordenes/{{$order->id}}">delete</a></td>

    </tr>
    @endforeach
  </tbody>
</table>