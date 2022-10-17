@extends('admin.main')


@section('noidung')

	<p>{{$contact->id}}</p>
	<p>{{$contact->email}}</p>
	<p>{{$contact->title}}</p>
	<p>{{$contact->content}}</p>
	<p>{{$contact->status}}</p>

@endsection('noidung')