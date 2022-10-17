<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use DB;

class CustomerRegisterController extends Controller
{
    public function register()
    {
    	return view('frontend.register', ['title'=> "ĐĂNG KÝ"]);
    }

    public function doRegister(Request $request)
    {
        $customer=new Customer();
        $customer->customerName=$request->customerName;
        $customer->address=$request->address;
        $customer->phone=$request->phone;
        $customer->email=$request->email;
        $customer->password=bcrypt($request->password);

        $customer->save();
        if(Auth::guard('customer')) return redirect()->route('registercustomer')->with('success','Đăng ký thành công');
        else return redirect('/register')->with ('success', 'Đăng ký thất bại');
    }
}
