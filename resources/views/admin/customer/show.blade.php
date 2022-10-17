@extends('admin.main')


@section('noidung')

	<p>{{$customer->id}}</p>
	<p>{{$customer->customerName}}</p>
	<p>{{$customer->address}}</p>
	<p>{{$customer->phone}}</p>
	<p>{{$customer->email}}</p>
	<p>{{$customer->password}}</p>

@endsection('noidung')