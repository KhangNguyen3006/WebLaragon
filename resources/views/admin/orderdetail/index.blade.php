@extends('admin.main')


@section('noidung')

@if($message=Session::get('success'))
<div class="alert alert-success">
	<p>{{$message}}</p>
</div>
@endif

<form action="" class="form-inline">
    <div class="form-group">
        <label>Tìm kiếm: </label><br><input class="form-control" name="keyword" placeholder="Search By Name">
    </div>
    <button type="submit" class="btn btn-primary">
        <i class="fas fa-search"></i>
    </button>
</form>
<hr>

 <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>
                          id
                      </th>

                      <th>
                          Order Name
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
                          <p>Đơn hàng mã </p>{{$orderdetail -> orderId}}
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
                          {{$orderdetail->id}}/trash">
                          <i class="fas fa-trash"></i></a>
                      </td>
                  </tr>
                  
                  @endforeach
                    
              </tbody>
          </table>
          {{$orderdetails->links()}}
@endsection('noidung')
