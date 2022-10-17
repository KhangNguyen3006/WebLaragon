@extends('frontend.main')

<link rel="stylesheet" href="{{asset('template/frontend/themes/css/button.css')}}">

@section('noidung')
    <h3 class="text-success"> Bạn đã đặt hàng thành công. Xin cảm ơn!!</h3>

    <button class="button" href="/" name=SUBMIT>Quay lại trang chủ</button>
@endsection