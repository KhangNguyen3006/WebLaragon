<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerLoginController extends Controller
{
    public function login()
    {
    	return view('frontend.login', ['title'=> "ĐĂNG NHẬP"]);
    }

    public function doLogin(Request $request)
    {
    	$validated = $request -> validate(['email'=>'required|max:50|Email', 'password' => 'required',]);
    	$data=['email'=>$request->input('email'),'password'=>$request->input('password'),];
    	if(Auth::guard('customer')->attempt($data,$request->input('remember'))) return redirect('/');
    	else return redirect('/login')->with ('success', 'Đăng nhập thất bại');
    }
    public function logout()
    {
    	Auth::guard('customer')->logout();
    	return redirect('/');
    }
}
