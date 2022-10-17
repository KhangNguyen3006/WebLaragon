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
                          User Name
                      </th>

                      <th>
                          Email
                      </th>

                      <th>
                          Password
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($users as $user)
                  <tr>
                      <td>
                          {{$user -> id}}
                      </td>

                      <td>
                          {{$user -> name}}
                      </td>

                      <td>
                            {{$user -> email}}
                      </td>

                      <td>
                            {{$user -> password}}
                      </td>

                      <td>
                          <a href="/admin/user/
                          {{$user->id}}">
                          <i class="far fa-eye"></i></a>
                          <a href="/admin/user/
                          {{$user->id}}/edit">
                          <i class="far fa-edit"></i></a>
                          <a href="/admin/user/
                          {{$user->id}}/trash">
                          <i class="fas fa-trash"></i></a>
                      </td>
                  </tr>
                  
                  @endforeach
                    
              </tbody>
          </table>
          {{$users->links()}}
@endsection('noidung')
