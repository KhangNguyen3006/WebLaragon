@extends('admin.main')


@section('noidung')

	<p>{{$user->id}}</p>
	<p>{{$user->name}}</p>
	<p>{{$user->email}}</p>
	<p>{{$user->password}}</p>

@endsection('noidung')