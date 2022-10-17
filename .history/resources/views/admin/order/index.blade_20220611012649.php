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


<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$order_count}}</h3>

                <p>Đơn hàng</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$order_success}}</h3>

                <p>Đơn hàng đã xử lí</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$order_new}}</h3>

                <p>Đơn hàng chưa xử lí</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$order_sum}}$</h3>

                <p>Tổng doanh thu</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
<hr>

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
                          {{$order -> customerName}}
                      </td>

                      <td>
                            {{$order -> total}}
                      </td>

                      <td>
                            <?php echo $order->note ?>
                      </td>

                      <td>
                           @if($order->status==1)
                           <a href='/admin/order/{{$order->id}}/toggleStatus' class='btn btn-primary'>Đã xử lý đơn hàng</a>
                           @elseif($order->status==0)
                           <a href='/admin/order/{{$order->id}}/toggleStatus' class='btn btn-danger'>Chưa xử lý đơn hàng</a>

                           @endif
                      </td>
                    
                      
                      <td>
                          {{$order -> created_at}}
                      </td>

                      
                      <td>
                          {{$order -> updated_at}}
                      </td>


                      <td>
                          <a href="/admin/order/
                          {{$order->id}}">
                          <i class="far fa-eye"></i></a>
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
