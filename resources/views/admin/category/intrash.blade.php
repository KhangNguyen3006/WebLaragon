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
                          {{$category -> description}}
                      </td>

                      <td>
                           {{$category -> status}}
                      </td>

                      <td>
                        <a href="/admin/category/{{$category->id}}/restore">
                          <i class="fas fa-trash-restore"></i>
                        </a>

                        <form style='display:inline; ' method="POST" action="/admin/category/{{$category->id}}">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-danger" type=submit> Delete </button>
                      </td>
                  </tr>
                  
                  @endforeach
                    
              </tbody>
          </table>
          {{$categories->links()}}
@endsection('noidung')
