@extends('frontend.main')

@section('noidung')
    @foreach($categories as $cat)

        <x-frontend.product-by-cat :catId="$cat->id" :catName="$cat->catName"/>
    @endforeach
@endsection