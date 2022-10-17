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
                        <a href="/admin/user/{{$user->id}}/restore">
                          <i class="fas fa-trash-restore"></i>
                        </a>

                        <form style='display:inline; ' method="POST" action="/admin/user/{{$user->id}}">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-danger" type=submit> Delete </button>
                      </td>
                  </tr>
                  
                  @endforeach
                    
              </tbody>
          </table>
          {{$users->links()}}
@endsection('noidung')
