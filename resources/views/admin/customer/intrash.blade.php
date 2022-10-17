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
                        <a href="/admin/customer/{{$customer->id}}/restore">
                          <i class="fas fa-trash-restore"></i>
                        </a>

                        <form style='display:inline; ' method="POST" action="/admin/customer/{{$customer->id}}">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-danger" type=submit> Delete </button>
                      </td>
                  </tr>
                  
                  @endforeach
                    
              </tbody>
          </table>
          {{$customers->links()}}
@endsection('noidung')
