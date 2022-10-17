@extends('admin.main')


@section('noidung')

	<p>{{$orderdetail->id}}</p>
	<p>{{$orderdetail->customerId}}</p>
	<p>{{$orderdetail->productName}}</p>
	<p>{{$orderdetail->price}}</p>
	<p>{{$orderdetail->quantity}}</p>
	<p>{{$orderdetail->created_at}}</p>
	<p>{{$orderdetail->updated_at}}</p>

@endsection('noidung')