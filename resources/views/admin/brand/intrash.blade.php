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
                          Brand Name
                      </th>

                      <th>
                        Description
                      </th>

                      <th>
                          Slug
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
                          {{$brand -> description}}
                      </td>

                      <td>
                           @if($brand->status==0)
                           <a href='#' class='btn btn-secondary'>Ẩn</a>
                           @elseif($brand->status==1)
                           <a href='#' class='btn btn-primary'>Hiện</a>
                           @elseif($brand->status==2)
                           <a href='#' class='btn btn-primary'>Trang chủ</a>

                           @endif
                      </td>

                      <td>
                        <a href="/admin/brand/{{$brand->id}}/restore">
                          <i class="fas fa-trash-restore"></i>
                        </a>

                        <form style='display:inline; ' method="POST" action="/admin/brand/{{$brand->id}}">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-danger" type=submit> Delete </button>
                      </td>
                  </tr>
                  
                  @endforeach
                    
              </tbody>
          </table>
          {{$brands->links()}}
@endsection('noidung')
