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

<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$product_count}}</h3>

                <p>Sản phẩm</p>
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
                <h3>{{$product_show}}</h3>

                <p>Sản phẩm hiện trên trang chủ</p>
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
                <h3>{{$product_hide}}</h3>

                <p>Sản phẩm ẩn trên trang chủ</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
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
                          Product Name
                      </th>

                      <th>
                          Slug
                      </th>

                      <th>
                          CatId
                      </th>

                      <th>
                          BrandId
                      </th>

                      <th>
                        Detail
                      </th>

                      <th>
                        Price
                      </th>

                      <th>
                        SalePrice
                      </th>

                      <th>
                        Image
                      </th>
                      
                      <th>
                        Status
                      </th>

                      <th>
                          Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($products as $product)
                  <tr>
                      <td>
                          {{$product -> id}}
                      </td>

                      <td>
                          {{$product -> productName}}
                      </td>

                      <td>
                          {{$product -> slug}}
                      </td>

                      <td>
                          {{$product -> catName}}
                      </td>

                      <td>
                          {{$product -> brandName}}
                      </td>

                      <td>
                        <?php echo $product->detail ?>
                      </td>
                    
                      
                      <td>
                          {{$product -> price}}
                      </td>

                      
                      <td>
                          {{$product -> salePrice}}
                      </td>

                      <td>
                          {{$product -> image}}
                      </td>



                      <td>
                           @if($product->status==0)
                           <a href='/admin/product/{{$product->id}}/toggleStatus' class='btn btn-secondary'>Ẩn</a>
                           @elseif($product->status==1)
                           <a href='/admin/product/{{$product->id}}/toggleStatus' class='btn btn-primary'>Hiện</a>
                           @elseif($product->status==2)
                           <a href='/admin/product/{{$product->id}}/toggleStatus' class='btn btn-primary'>Trang chủ</a>

                           @endif
                      </td>

                      <td>
                          <a href="/admin/product/
                          {{$product->id}}">
                          <i class="far fa-eye"></i></a>
                          <a href="/admin/product/
                          {{$product->id}}/edit">
                          <i class="far fa-edit"></i></a>
                          <a href="/admin/product/
                          {{$product->id}}/trash">
                          <i class="fas fa-trash"></i></a>
                      </td>
                  </tr>
                  
                  @endforeach
                    
              </tbody>
          </table>
          {{$products->links()}}
@endsection('noidung')
