<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Customer;
use DB;

class ShopcartController extends Controller
{
    public function cart()
    {
    	if(Cart::count() <= 0)
    		return view('frontend.shopcart.cart_empty');
    	else return view('frontend.shopcart.cart');
    }
    public function cart_Add($slug)
    {
    	$product = Product::where('slug',$slug)->first();
    	Cart::add(['id'=>$product->id,
    		'name'=>$product->productName,
    		'price' =>$product->price,
    		'qty'=>1,
    		'weight'=>0,
    		'options'=>['image'=>$product->image]
    	]);
    	return redirect()->back();
    }
    public function cart_Delete($row_id)
    {
        Cart::remove($row_id);
        return view('frontend.shopcart.cart');
    }
    public function cart_dec($row_id)
    {
    	$row = Cart::get($row_id);
        if($row->qty>1)
        {
        	Cart::update($row_id, $row->qty - 1);
        }
        return view('frontend.shopcart.cart');
    }
    public function cart_inc($row_id)
    {
    	$row = Cart::get($row_id);
        if($row->qty < 10)
        {
        	Cart::update($row_id, $row->qty + 1);
        }
        return view('frontend.shopcart.cart');
    }
    public function cart_DeleteAll()
    {
        Cart::destroy();
        return view('frontend.shopcart.cart');
    }
    public function checkout()
    {
        if(Auth::guard('customer')->check()){
            $customer=Auth::guard('customer')->user();
            return view('frontend.shopcart.checkout',['customer'=>$customer]);
        }
        else
            return redirect('/login')->with('success','Please login for checkout');
    }
    public function doCheckOut(Request $request)
    {
        // cập nhập thông tin khách hàng
        
        $id=$request->id;
        $customerName=$request->customerName;
        $address=$request->address;
        $phone=$request->phone;
        $email=$request->email;
        DB::update('update nguyenthanhkhangcustomers set customerName=?,address=?,phone=?,email=? where id=?',[$customerName,$address,$phone,$email,$id]);

        // cập nhập thông tin đơn hàng

        $customerId=$id;
        $total=Cart::total();
        $status=1;
        $note=$request->note;
        DB::insert('insert into nguyenthanhkhangorders(customerId, total, status, note) value(?,?,?,?)',[$customerId,$total,$status,$note]);

        // cập nhập thông tin chi tiết đơn hàng

        $orderId=DB::select('select id from nguyenthanhkhangorders order by created_at desc')[0]->id;
        foreach(Cart::content() as $row)
        {
            $productId=$row->id;
            $price=$row->price;
            $quantity=$row->qty;
            DB::insert('insert into nguyenthanhkhangorderdetails(orderId,productId,price,quantity) value(?,?,?,?)',[$orderId,$productId,$price,$quantity]);     
        }
       //xóa nội dung Cart
       Cart::destroy();
        return view('frontend.shopcart.ordersuccess');
    }
}
