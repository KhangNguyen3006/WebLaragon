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
                          Email
                      </th>

                      <th>
                          Title
                      </th>

                      <th>
                            Content
                      </th>
                      
                      <th>
                            Status
                      </th>

                      <th>
                          Created_at
                      </th>

                      <th>
                          Updated_at
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($contacts as $contact)
                  <tr>
                      <td>
                          {{$contact -> id}}
                      </td>

                      <td>
                          {{$contact -> email}}
                      </td>
              
                      <td>
                          {{$contact -> title}}
                      </td>

                      <td>
                      <?php echo $contact->content ?>
                      </td>

                      <td>
                           @if($contact->status==0)
                           <a href='/admin/contact/{{$contact->id}}/toggleStatus' class='btn btn-secondary'>Ẩn</a>
                           @elseif($contact->status==1)
                           <a href='/admin/contact/{{$contact->id}}/toggleStatus' class='btn btn-primary'>Hiện</a>
                           @endif
                      </td>

                      <td>
                            {{$contact -> created_at}}
                      </td>

                      <td>
                            {{$contact -> updated_at}}
                      </td>

                      <td>
                          <a href="/admin/contact/
                          {{$contact->id}}">
                          <i class="far fa-eye"></i></a>
                          <a href="/admin/contact/
                          {{$contact->id}}/edit">
                          <i class="far fa-edit"></i></a>
                          <a href="/admin/contact/
                          {{$contact->id}}/trash">
                          <i class="fas fa-trash"></i></a>
                      </td>
                  </tr>
                  
                  @endforeach
                    
              </tbody>
          </table>
          {{$contacts->links()}}
@endsection('noidung')
