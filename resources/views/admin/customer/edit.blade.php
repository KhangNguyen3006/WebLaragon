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


<form action="/admin/customer/{{$customer -> id}}" method=post>

@method('PUT')

	@csrf
            <div class="form-group">
                <label for="customerName">Customer Name</label>
                <input type="text" id="customerName" class="form-control"
                 name=customerName value="{{$customer -> customerName }}">
            </div>

            <div class="form-group">
            <label for="address">Address</label>
                <input type="text" id="address" class="form-control" name=address
                 value="{{$customer -> address }}">
            </div>


            <div class="form-group">
            <label for="phone">Phone</label>
                <input type="text" id="phone" class="form-control" name=phone
                 value="{{$customer -> phone }}">
            </div>

            <div class="form-group">
            <label for="email">Email</label>
                <input type="email" id="email" class="form-control" name=email
                 value="{{$customer -> email }}">
            </div>

            <div class="form-group">
            <label for="password">Password</label>
                <input type="password" id="password" class="form-control" name=password
                 value="{{$customer -> password }}">
            </div>

            <div class="form-group">
            	<input type=submit value=submit>
            </div>

              
</form>

@endsection('noidung')