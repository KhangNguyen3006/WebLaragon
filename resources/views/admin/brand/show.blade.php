@extends('admin.main')


@section('noidung')

	<p>{{$brand->id}}</p>
	<p>{{$brand->brandName}}</p>
	<p>{{$brand->slug}}</p>
	<p>{{$brand->description}}</p>



	<p>
		<?php if($brand->status==0) echo "Ẩn"; else echo "Hiện";?>
	</p>

@endsection('noidung')