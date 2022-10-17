<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use DB;

class CustomerController extends Controller
{
    public function CustomerInfor()
    {
        if(Auth::guard('customer')->check()){
            $customers=Auth::guard('customer')->user();
            return view('frontend.customerinfor',['customer'=>$customers]);
        }
        else
            return redirect('/login')->with('success','Please login for checkout');
    }

    public function doCustomer(Request $request)
    {
        // cập nhập thông tin khách hàng
        
        $id=$request->id;
        $customerName=$request->customerName;
        $address=$request->address;
        $phone=$request->phone;
        $email=$request->email;
        DB::update('update nguyenthanhkhangcustomers set customerName=?,address=?,phone=?,email=? where id=?',[$customerName,$address,$phone,$email,$id]);
        return view('frontend.customerinfor');
    }

}
