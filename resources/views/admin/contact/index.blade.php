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
                <h3>{{$contact_count}}</h3>

                <p>Email khách phản hồi</p>
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
                <h3>{{$contact_show}}</h3>

                <p>Email đã xử lí</p>
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
                <h3>{{$contact_hide}}</h3>

                <p>Email chưa xử lí</p>
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
                           @if($contact->status==1)
                           <a href='/admin/contact/{{$contact->id}}/toggleStatus' class='btn btn-primary'>Đã xử xử lý</a>
                           @elseif($contact->status==0)
                           <a href='/admin/contact/{{$contact->id}}/toggleStatus' class='btn btn-danger'>Chưa xử lý</a>
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
                          {{$contact->id}}/trash">
                          <i class="fas fa-trash"></i></a>
                      </td>
                  </tr>
                  
                  @endforeach
                    
              </tbody>
          </table>
          {{$contacts->links()}}
@endsection('noidung')
