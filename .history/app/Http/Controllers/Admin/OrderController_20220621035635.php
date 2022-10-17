<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders=Order::latest()->paginate(5);

        $order_count=Order::count();
        $order_success=Order::where('status',0)->count();
        $order_new=Order::where('status',1)->count();
        $order_sum=Order::where('status',0)->sum('total');

        foreach($orders as $order)
        {
            $order->customerName=Customer::where('id', $order->customerId)->first()->customerName;
 
        }
        if($keyword=request()->keyword)
        {
            $orders=Order::latest()->where('orderName', 'like', '%'.$keyword.'%')->paginate(5);
        }
        return view('/admin/order/index', compact('order_count','order_success', 'order_new'  ,'order_sum'), ['orders'=>$orders, 'title'=>'ORDER LIST']);
    }


    public function store(Request $request)
    {
        $validated=$request->validate([
            'customerId'=>'required|max:50|unique:nguyenthanhkhangorders,customerId',]);

        $dataInsert=$request->input();

        Order::create($dataInsert);
        return redirect()->back()->with('success','Create Order successfully');
    }

 
    public function show(Order $order)
    {
        return view('admin.order.show', ['order'=>$order,'title'=>'Order Information']);
    }

 
    public function edit(Order $order)
    {
       return view('admin.order.edit',['order'=>$order,'title'=>'Order edit']);
    }


    public function update(Request $request, Order $order)
    {
        $validated=$request->validate([
            'customerId'=>'required|max:50|unique:nguyenthanhkhangorders,customerId',
            'slug'=>'required|unique:nguyenthanhkhangorders,slug',
        ]);
        $order->update($request->all());

        return redirect("admin/order")->with('success','Update successfully');
    }

    public function trash($id)
    {
        Order::where('id', $id)->delete();
        return redirect('/admin/order')->with('success','Delete successfully');
    }

    public function intrash()
    {
        $orders=Order::onlyTrashed()->paginate(5);
        return view('/admin/order/intrash',['orders'=>$orders,'title'=>'ORDER LIST IN TRASH']);
    }

    public function restore($id)
    {
        Order::onlyTrashed()->where('id', $id)->restore();
        return redirect('/admin/order')->with('success','Restore successfully');
    }
 
    public function destroy($id)
    {
        Order::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect('/admin/order-intrash')->with('success','Destroy successfully');
    }

    public function toggleStatus($id)
    {
        $order=Order::find($id);
        if($order->status==1)$order->status=0;
        else $order->status=1;
        $order->save();
        return redirect('/admin/order')->with('success', 'Toggle Status successfully');
    }
}
