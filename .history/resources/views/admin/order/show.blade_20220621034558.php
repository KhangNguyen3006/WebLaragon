@extends('admin.main')


@section('noidung')

	<p>{{$order->id}}</p>
	<p>{{$order->customerId}}</p>
	<p>{{$order->total}}</p>
	<p>{{$order->note}}</p>
	<p>{{$order->status}}</p>
	<p>{{$order->created_at}}</p>
	<p>{{$order->updated_at}}</p>

	<p>
		<?php if($order->status==0) echo "Đã xử lí"; else echo "Hiện";?>
	</p>

@endsection('noidung')