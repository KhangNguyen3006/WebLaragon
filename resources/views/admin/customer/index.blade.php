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
                          Customer Name
                      </th>

                      <th>
                          Address
                      </th>

                      <th>
                            Phone
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
                  @foreach($customers as $customer)
                  <tr>
                      <td>
                          {{$customer -> id}}
                      </td>

                      <td>
                          {{$customer -> customerName}}
                      </td>
              
                      <td>
                          {{$customer -> address}}
                      </td>

                      <td>
                          {{$customer -> phone}}
                      </td>

                      <td>
                            {{$customer -> email}}
                      </td>

                      <td>
                            {{$customer -> password}}
                      </td>

                      <td>
                          <a href="/admin/customer/
                          {{$customer->id}}">
                          <i class="far fa-eye"></i></a>
                          <a href="/admin/customer/
                          {{$customer->id}}/edit">
                          <i class="far fa-edit"></i></a>
                          <a href="/admin/customer/
                          {{$customer->id}}/trash">
                          <i class="fas fa-trash"></i></a>
                      </td>
                  </tr>
                  
                  @endforeach
                    
              </tbody>
          </table>
          {{$customers->links()}}
@endsection('noidung')
