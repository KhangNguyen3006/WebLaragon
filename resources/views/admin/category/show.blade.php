@extends('admin.main')


@section('noidung')

	<p>{{$category->id}}</p>
	<p>{{$category->catName}}</p>
	<p>{{$category->slug}}</p>
	<p>{{$category->parentId}}</p>
	<p>{{$category->description}}</p>

	<p>
		<?php if($category->status==0) echo "Ẩn"; else echo "Hiện";?>
	</p>

@endsection('noidung')