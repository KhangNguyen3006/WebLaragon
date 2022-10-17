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
                <h3>{{$brand_count}}</h3>

                <p>Thương hiệu</p>
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
                <h3>{{$brand_show}}</h3>

                <p>Thương hiệu hiện trên trang chủ</p>
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
                <h3>{{$brand_hide}}</h3>

                <p>Thương hiệu ẩn trên trang chủ</p>
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
                          Brand Name
                      </th>

                      <th>
                          Slug
                      </th>

                      <th>
                        Description
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
                  @foreach($brands as $brand)
                  <tr>
                      <td>
                          {{$brand -> id}}
                      </td>

                      <td>
                          {{$brand -> brandName}}
                      </td>
              
                      <td>
                          {{$brand -> slug}}
                      </td>

                      <td>
                          <?php echo $brand -> description ?>
                      </td>

                      <td>
                           @if($brand->status==0)
                           <a href='/admin/brand/{{$brand->id}}/toggleStatus' class='btn btn-secondary'>Ẩn</a>
                           @elseif($brand->status==1)
                           <a href='/admin/brand/{{$brand->id}}/toggleStatus' class='btn btn-primary'>Hiện</a>
                           @elseif($brand->status==2)
                           <a href='/admin/brand/{{$brand->id}}/toggleStatus' class='btn btn-primary'>Trang chủ</a>

                           @endif
                      </td>

                      <td>
                          <a href="/admin/brand/
                          {{$brand->id}}">
                          <i class="far fa-eye"></i></a>
                          <a href="/admin/brand/
                          {{$brand->id}}/edit">
                          <i class="far fa-edit"></i></a>
                          <a href="/admin/brand/
                          {{$brand->id}}/trash">
                          <i class="fas fa-trash"></i></a>
                      </td>
                  </tr>
                  
                  @endforeach
                    
              </tbody>
          </table>
          {{$brands->links()}}
@endsection('noidung')
