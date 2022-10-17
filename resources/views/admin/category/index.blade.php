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
                <h3>{{$cat_count}}</h3>

                <p>Loại sản phẩm</p>
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
                <h3>{{$cat_show}}</h3>

                <p>Loại sản phẩm hiện trên trang chủ</p>
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
                <h3>{{$cat_hide}}</h3>

                <p>Loại sản phẩm ẩn trên trang chủ</p>
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
                          Category Name
                      </th>

                      <th>
                          Slug
                      </th>

                      <th>
                          parentId
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
                  @foreach($categories as $category)
                  <tr>
                      <td>
                          {{$category -> id}}
                      </td>

                      <td>
                          {{$category -> catName}}
                      </td>

                      <td>
                          {{$category -> slug}}
                      </td>

                      <td>
                          {{$category -> parentId}}
                      </td>

                      <td>
                      <?php echo $category->description ?>
                      </td>

                      <td>
                           @if($category->status==0)
                           <a href='/admin/category/{{$category->id}}/toggleStatus' class='btn btn-secondary'>Ẩn</a>
                           @else
                           <a href='/admin/category/{{$category->id}}/toggleStatus' class='btn btn-primary'>Hiện</a>
                           @endif
                      </td>

                      <td>
                          <a href="/admin/category/
                          {{$category->id}}">
                          <i class="far fa-eye"></i></a>
                          <a href="/admin/category/
                          {{$category->id}}/edit">
                          <i class="far fa-edit"></i></a>
                          <a href="/admin/category/
                          {{$category->id}}/trash">
                          <i class="fas fa-trash"></i></a>
                      </td>
                  </tr>
                  
                  @endforeach
                    
              </tbody>
          </table>
          {{$categories->links()}}
@endsection('noidung')
