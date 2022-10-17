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
                          Title
                      </th>

                      <th>
                            Position
                      </th>

                      <th>
                        Image
                      </th>

                      <th>
                        Link
                      </th>

                      <th>
                        Order
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
                  @foreach($links as $link)
                  <tr>
                      <td>
                          {{$link -> id}}
                      </td>

                      <td>
                          {{$link -> title}}
                      </td>
              
                      <td>
                          {{$link -> position}}
                      </td>

                      <td>
                          <?php echo $link -> image ?>
                      </td>

                      <td>
                          <?php echo $link -> link ?>
                      </td>

                      <td>
                          <?php echo $link -> order ?>
                      </td>

                      <td>
                           @if($link->status==0)
                           <a href='/admin/link/{{$link->id}}/toggleStatus' class='btn btn-secondary'>Ẩn</a>
                           @elseif($link->status==1)
                           <a href='/admin/link/{{$link->id}}/toggleStatus' class='btn btn-primary'>Hiện</a>
                           @elseif($link->status==2)
                           <a href='/admin/link/{{$link->id}}/toggleStatus' class='btn btn-primary'>Trang chủ</a>

                           @endif
                      </td>

                      <td>
                          <a href="/admin/link/
                          {{$link->id}}">
                          <i class="far fa-eye"></i></a>
                          <a href="/admin/link/
                          {{$link->id}}/edit">
                          <i class="far fa-edit"></i></a>
                          <a href="/admin/link/
                          {{$link->id}}/trash">
                          <i class="fas fa-trash"></i></a>
                      </td>
                  </tr>
                  
                  @endforeach
                    
              </tbody>
          </table>
          {{$links->links()}}
@endsection('noidung')
