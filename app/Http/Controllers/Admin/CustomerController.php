<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    
    public function index()
    {
        $customers=Customer::latest()->paginate(5);
        if($keyword=request()->keyword)
        {
            $customers=Customer::latest()->where('customerName', 'like', '%'.$keyword.'%')->paginate(5);
        }
        return view('/admin/customer/index', ['customers'=>$customers, 'title'=>'CUSTOMER LIST']);
    }


    public function store(Request $request)
    {
        $validated=$request->validate([
            'customerName'=>'required|max:100|unique:nguyenthanhkhangcustomers,customerName',
            'email'=>'required|max:100|unique:nguyenthanhkhangcustomers,email',]);

        $dataInsert=$request->input();

        Customer::create($dataInsert);
        return redirect()->back()->with('success','Create Customer successfully');
    }

 
    public function show(Customer $customer)
    {
        return view('admin.customer.show', ['customer'=>$customer,'title'=>'Customer Information']);
    }

 
    public function edit(Customer $customer)
    {
       return view('admin.customer.edit',['customer'=>$customer,'title'=>'Customer edit']);
    }


    public function update(Request $request, Customer $customer)
    {
        $validated=$request->validate([
            'customerName'=>'required|max:50|unique:nguyenthanhkhangcustomers,customerName',
            'email'=>'required|max:100|unique:nguyenthanhkhangcustomers,email',]);
        $customer->update($request->all());

        return redirect("admin/customer")->with('success','Update successfully');
    }

    public function trash($id)
    {
        Customer::where('id', $id)->delete();
        return redirect('/admin/customer')->with('success','Delete successfully');
    }

    public function intrash()
    {
        $customers=Customer::onlyTrashed()->paginate(5);
        return view('/admin/customer/intrash',['customers'=>$customers,'title'=>'CUSTOMER LIST IN TRASH']);
    }

    public function restore($id)
    {
        Customer::onlyTrashed()->where('id', $id)->restore();
        return redirect('/admin/customer')->with('success','Restore successfully');
    }

    public function destroy($id)
    {
        Customer::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect('/admin/customer-intrash')->with('success','Destroy successfully');
    }

    public function toggleStatus($id)
    {
        $customer=Customer::find($id);
        $customer->save();
        return redirect('/admin/customer')->with('success', 'Toggle Status successfully');
    }
}
