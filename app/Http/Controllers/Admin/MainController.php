<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Contact;
use App\Models\User;

class MainController extends Controller
{
	public function index()
	{
		$order_count=Order::count();
		$customer_count=Customer::count();
		$contact_count=Contact::where('status',0)->count();
		$order_total_sum=Order::where('status',1)->sum('total');
    	return view('admin.index', compact('order_count', 'customer_count', 'contact_count', 'order_total_sum'), ['title'=>"TRANG ADMIN"]);
	}
}
