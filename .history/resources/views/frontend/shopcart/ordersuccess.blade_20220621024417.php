@extends('frontend.main')

<link rel="stylesheet" href="{{asset('template/frontend/themes/css/button.css')}}">

@section('noidung')
    <p> Bạn đã đặt hàng thành công. Xin cảm ơn</p>

    <button class="button" href="/" name=SUBMIT>Quay lại trang chủ</button>
@endsection