<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{  
    public function index()
    {
        $brands=Brand::latest()->paginate(5);
        $brand_count=Brand::count();
        $brand_show=Brand::where('status',1)->count();
        $brand_hide=Brand::where('status',0)->count();

        if($keyword=request()->keyword)
        {
            $brands=Brand::latest()->where('brandName', 'like', '%'.$keyword.'%')->paginate(5);
        }
        return view('/admin/brand/index' , compact('brand_count','brand_show', 'brand_hide') , ['brands'=>$brands, 'title'=>'BRAND LIST']);
    }

    public function create()
    {
       return view('admin/brand/create' ,['title'=>'BRAND CREATE']);
    }


    public function store(Request $request)
    {
        $validated=$request->validate([
            'brandName'=>'required|max:100|unique:nguyenthanhkhangbrands,brandName',
            'slug'=>'required|unique:nguyenthanhkhangbrands,slug',]);

        $dataInsert=$request->input();

        Brand::create($dataInsert);
        return redirect()->back()->with('success','Create Brand successfully');
    }

 
    public function show(Brand $brand)
    {
        return view('admin.brand.show', ['brand'=>$brand,'title'=>'Brand Information']);
    }

 
    public function edit(Brand $brand)
    {
       return view('admin.brand.edit',['brand'=>$brand,'title'=>'Brand edit']);
    }


    public function update(Request $request, Brand $brand)
    {
        $validated=$request->validate([
            'brandName'=>'required|max:100|unique:nguyenthanhkhangbrands,brandName',
            'slug'=>'required|unique:nguyenthanhkhangbrands,slug',
        ]);
        $brand->update($request->all());

        return redirect("admin/brand")->with('success','Update successfully');
    }

    public function trash($id)
    {
        Brand::where('id', $id)->delete();
        return redirect('/admin/brand')->with('success','Delete successfully');
    }

    public function intrash()
    {
        $brands=Brand::onlyTrashed()->paginate(5);
        return view('/admin/brand/intrash',['brands'=>$brands,'title'=>'BRAND LIST IN TRASH']);
    }

    public function restore($id)
    {
        Brand::onlyTrashed()->where('id', $id)->restore();
        return redirect('/admin/brand')->with('success','Restore successfully');
    }
 
    public function destroy($id)
    {
        Brand::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect('/admin/brand-intrash')->with('success','Destroy successfully');
    }
    public function toggleStatus($id)
    {
        $brand=Brand::find($id);
        if($brand->status==0)$brand->status=1;
        else $brand->status=0;
        $brand->save();
        return redirect('/admin/brand')->with('success', 'Toggle Status successfully');
    }
}
