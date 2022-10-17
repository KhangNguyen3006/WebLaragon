@extends('admin.main')


@section('noidung')

@if($message=Session::get('success'))
<div class="alert alert-success">
	<p>{{$message}}</p>
</div>
@endif

<table class="table table-striped projects">
<thead>
                  <tr>
                      <th>
                          id
                      </th>

                      <th>
                          Customer Name
                      </th>

                      <th>
                          Total
                      </th>

                      <th>
                          Note
                      </th>

                      <th>
                          Status
                      </th>

                      <th>
                        Created_at
                      </th>
                      
                      <th>
                        Updated_at
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($orders as $order)
                  <tr>
                      <td>
                          {{$order -> id}}
                      </td>

                      <td>
                          {{$order -> customerId}}
                      </td>

                      <td>
                          {{$order -> total}}
                      </td>

                      <td>
                      <?php echo $order->note ?>
                      </td>

                      <td>
                          {{$order -> status}}
                      </td>
                    
                      
                      <td>
                          {{$order -> created_at}}
                      </td>

                      
                      <td>
                          {{$order -> updated_at}}
                      </td>



                      <td>
                           @if($order->status==0)
                           <a href='/admin/order/{{$order->id}}/toggleStatus' class='btn btn-secondary'>Ẩn</a>
                           @elseif($order->status==1)
                           <a href='/admin/order/{{$order->id}}/toggleStatus' class='btn btn-primary'>Hiện</a>

                           @endif
                      </td>

                      <td>
                          <a href="/admin/order/
                          {{$order->id}}">
                          <i class="far fa-eye"></i></a>
                          <a href="/admin/order/
                          {{$order->id}}/edit">
                          <i class="far fa-edit"></i></a>
                          <a href="/admin/order/
                          {{$order->id}}/trash">
                          <i class="fas fa-trash"></i></a>
                      </td>
                  </tr>
                  
                  @endforeach
                    
              </tbody>
          </table>
          {{$orders->links()}}
@endsection('noidung')
