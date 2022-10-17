<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

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

    
}
