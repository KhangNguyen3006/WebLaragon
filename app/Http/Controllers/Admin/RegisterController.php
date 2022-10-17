<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function registeradmin()
    {
    	return view('admin.registeradmin', ['title'=> "ĐĂNG KÝ ADMIN"]);
    }

    public function doRegisteradmin(Request $request)
    {
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);

        $user->save();
        if(Auth::guard('user')) return redirect()->route('registeradmin')->with('success','Đăng ký thành công');
        else return redirect('/registeradmin')->with ('success', 'Đăng ký thất bại');
    }
    public function logout()
    {
    	Auth::guard('user')->logout();
    	return redirect('/admin/login');
    }
}
