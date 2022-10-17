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
                          Product Name
                      </th>

                      <th>
                          Price
                      </th>

                      <th>
                          Quantity
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
                  @foreach($orderdetails as $orderdetail)
                  <tr>
                      <td>
                          {{$orderdetail -> id}}
                      </td>

                      <td>
                          {{$orderdetail -> customerId}}
                      </td>

                      <td>
                      {{$orderdetail -> productName}}
                      </td>

                      <td>
                      {{$orderdetail -> price}}
                      </td>

                      <td>
                          {{$orderdetail -> quantity}}
                      </td>
                    
                      
                      <td>
                          {{$orderdetail -> created_at}}
                      </td>

                      
                      <td>
                          {{$orderdetail -> updated_at}}
                      </td>


                      <td>
                          <a href="/admin/orderdetail/
                          {{$orderdetail->id}}">
                          <i class="far fa-eye"></i></a>
                          <a href="/admin/orderdetail/
                          {{$orderdetail->id}}/edit">
                          <i class="far fa-edit"></i></a>
                          <a href="/admin/orderdetail/
                          {{$orderdetail->id}}/trash">
                          <i class="fas fa-trash"></i></a>
                      </td>
                  </tr>
                  
                  @endforeach
                    
              </tbody>
          </table>
          {{$orderdetails->links()}}
@endsection('noidung')
