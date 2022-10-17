<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Orderdetail;


class OrderdetailController extends Controller
{
    public function index()
    {
        $orderdetails=Orderdetail::latest()->paginate(5);
        foreach($orderdetails as $orderdetail)
        {
            $orderdetail->productName=Product::where('id', $orderdetail->productId)->first()->productName;
        }
        if($keyword=request()->keyword)
        {
            $orderdetails=Orderdetail::latest()->where('customerName', 'like', '%'.$keyword.'%')->paginate(5);
        }
        return view('/admin/orderdetail/index', ['orderdetails'=>$orderdetails, 'title'=>'ORDERDETAIL LIST']);
    }


    public function store(Request $request)
    {
        $validated=$request->validate([
            'orderId'=>'required|max:50|unique:nguyenthanhkhangorderdetails,orderId',]);

        $dataInsert=$request->input();

        Orderdetail::create($dataInsert);
        return redirect()->back()->with('success','Create Orderdetail successfully');
    }

 
    public function show(Orderdetail $orderdetail)
    {
        return view('admin.orderdetail.show', ['orderdetail'=>$orderdetail,'title'=>'Orderdetail Information']);
    }

 
    public function edit(Orderdetail $orderdetail)
    {
       return view('admin.orderdetail.edit',['orderdetail'=>$orderdetail,'title'=>'Orderdetail edit']);
    }


    public function update(Request $request, Orderdetail $orderdetail)
    {
        $validated=$request->validate([
            'orderId'=>'required|max:50|unique:nguyenthanhkhangorderdetails,orderId',
        ]);
        $orderdetail->update($request->all());

        return redirect("admin/orderdetail")->with('success','Update successfully');
    }

    public function trash($id)
    {
        Orderdetail::where('id', $id)->delete();
        return redirect('/admin/orderdetail')->with('success','Delete successfully');
    }

    public function intrash()
    {
        $orderdetails=Orderdetail::onlyTrashed()->paginate(5);
        return view('/admin/orderdetail/intrash',['orderdetails'=>$orderdetails,'title'=>'ORDERDETAIL LIST IN TRASH']);
    }

    public function restore($id)
    {
        Orderdetail::onlyTrashed()->where('id', $id)->restore();
        return redirect('/admin/orderdetail')->with('success','Restore successfully');
    }
 
    public function destroy($id)
    {
        Orderdetail::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect('/admin/orderdetail-intrash')->with('success','Destroy successfully');
    }

    public function toggleStatus($id)
    {
        $orderdetail=Orderdetail::find($id);
        $orderdetail->save();
        return redirect('/admin/orderdetail')->with('success', 'Toggle Status successfully');
    }
}
