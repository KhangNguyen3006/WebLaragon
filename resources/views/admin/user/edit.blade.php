@extends('admin.main')


@section('noidung')
@if($message=Session::get('success'))
<div class="alert alert-success">
	<p>{{$message}}</p>
</div>
@endif
@if ($errors->any())
  	<div class="alert alert-danger">
  		<ul>
  			@foreach ($errors->all() as $error)
  			<li>{{$error}}</li>
  			@endforeach
  		</ul>
  	</div>
 @endif


<form action="/admin/user/{{$user -> id}}" method=post>

@method('PUT')

	@csrf
            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" id="name" class="form-control"
                 name=name value="{{$user -> name }}">
            </div>

            <div class="form-group">
            <label for="email">Email</label>
                <input type="email" id="email" class="form-control" name=email
                 value="{{$user -> email }}">
            </div>

            <div class="form-group">
            <label for="password">Password</label>
                <input type="password" id="password" class="form-control" name=password
                 value="{{$user -> password }}">
            </div>

            <div class="form-group">
            	<input type=submit value=submit>
            </div>

              
</form>

@endsection('noidung')