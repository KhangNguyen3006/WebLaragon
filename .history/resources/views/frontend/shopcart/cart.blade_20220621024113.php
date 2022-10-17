<?php use Gloudemans\Shoppingcart\Facades\Cart; ?>

@extends('frontend.main')

@section('noidung')
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="/">Home</a> <span class="divider">/</span></li>
		<li class="active"> SHOPPING CART</li>
    </ul>
	<h3>  SHOPPING CART <a href="/" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
	<hr class="soft">
			
			
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Product Name</th>
                  <th>Quantity/Update</th>
				          <th>Price</th>
                  <th>Tax</th>
                  <th>Total</th>
				        </tr>
              </thead>
              <tbody>
             @foreach(Cart::content() as $row)
                <tr>
                  <td> <img width="60" src="{{asset('img/product/'.$row->options->image)}}" alt=""></td>
                  <td>{{$row->name}}</td>
				  <td>
					<div class="input-append"><input class="span1" style="max-width:34px" value="{{$row->qty}}" id="appendedInputButtons" size="16" type="text"><a href="/cart_dec/{{$row->rowId}}" class="btn" type="button"><i class="icon-minus"></i></a><a href="/cart_inc/{{$row->rowId}}" class="btn" type="button"><i class="icon-plus"></i></a><a href="/cart_Delete/{{$row->rowId}}" class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></a>				</div>
				  </td>
                  <td>{{$row->price}}</td>
                  <td>{{$row->tax}}</td>
                  <td>{{($row->price)*($row->qty)}}</td>
                </tr>
            @endforeach
				
				
				
                <tr>
                  <td colspan="6" style="text-align:right">Total Price:	</td>
                  <td> {{Cart::priceTotal()}}</td>
                </tr>
				 <tr>
                  <td colspan="6" style="text-align:right"><strong>TOTAL ({{Cart::priceTotal()}}+{{Cart::tax()}}) =</strong></td>
                  <td class="label label-important" style="display:block"> <strong> {{Cart::total()}} </strong></td>
                </tr>
				</tbody>
            </table>
		
					
	<a href="/" class="btn btn-large"><i class="icon-arrow-left"></i> Tiếp tục mua sắm </a>
	<a href="/checkout" class="btn btn-large pull-right">Thanh toán <i class="icon-arrow-right"></i></a>
	
</div>
@endsection