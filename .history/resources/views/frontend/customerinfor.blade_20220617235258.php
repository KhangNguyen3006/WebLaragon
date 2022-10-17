@extends('frontend.main')

@section('noidung')
<head>
<title>Hiển thị danh sách khách hàng</title>
</head>
<body>
<table>
<tr>
<td>ID </td>
<td>Tên </td>
<td>Địa chỉ </td>
<td>Số điện thoại </td>
<td>Email </td>
</tr>
@foreach ($customers as $customer)
<tr>
<td>{{ $customer->id }} </td>
<td>{{ $customer->customerName }} </td>
<td>{{ $customer->address}} </td>
<td>{{ $customer->phone }} </td>
<td>{{ $customer->email }} </td>
</tr>
@endforeach
</table>
</body>
@endsection