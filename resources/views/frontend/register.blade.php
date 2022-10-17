@extends('frontend.main')

@section('noidung')

@if(session('success'))
  <div class="alert alert-danger">
  	{{session('success')}}
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

<form class="form-horizontal" method="post" action="/doregister">
	@csrf
		<h4>Đăng ký User (Register)</h4><br>
		
			<div class="text-field">
				<label for="customerName">Họ và tên</label>
				<input type="text" class="customerName" name="customerName" placeholder="Enter your username" />
			</div><br>

			<div class="text-field">
				<label for="address">Địa chỉ</label>
				<input type="text" class="address" name="address" placeholder="Address" />
			</div><br>
		
			<div class="text-field">
				<label for="phone">Số điện thoại</label>
				<input type="text" class="phone" name="phone" placeholder="Phone" />
			</div><br>
		
			<div class="text-field">
				<label for="email">Email</label>
				<input type="email" class="email" name="email" placeholder="Email" />
			</div><br>

			<div class="text-field">
				<label for="password">Mật khẩu</label>
				<input type="password" class="password" name="password" placeholder="Password" />
			</div><br>
		

			<button class="submit" name=submit>Register</button>
	</form>

@endsection