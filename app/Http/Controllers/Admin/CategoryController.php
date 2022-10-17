<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    


    public function index()
    {
        $categories=Category::latest()->paginate(5);
        $cat_count=Category::count();
        $cat_show=Category::where('status','>',0)->count();
        $cat_hide=Category::where('status',0)->count();
        if($keyword=request()->keyword)
        {
            $categories=Category::latest()->where('catName', 'like', '%'.$keyword.'%')->paginate(5);
        }
        return view('/admin/category/index', compact('cat_count','cat_show', 'cat_hide'), ['categories'=>$categories, 'title'=>'CATEGORY LIST']);
    }

    public function create()
    {

        $categoriesLevel1=Category::where('parentId','=',0)->get();
       return view('admin/category/create',['title'=>'CATEGORY CREATE','categoriesLevel1'=> $categoriesLevel1]);
    }


    public function store(Request $request)
    {
        $validated=$request->validate([
            'catName'=>'required|max:50|unique:Categories,catName',
            'slug'=>'required|unique:Categories,slug',]);

        $dataInsert=$request->input();

        Category::create($dataInsert);
        return redirect()->back()->with('success','Create Category successfully');
    }

 
    public function show(Category $category)
    {
        return view('admin.category.show', ['category'=>$category,'title'=>'Category Information']);
    }

 
    public function edit(Category $category)
    {
        $categoriesLevel1=Category::where('parentId','=',0)->get();
       return view('admin.category.edit',['category'=>$category,'title'=>'Category edit','categoriesLevel1'=>$categoriesLevel1]);
    }


    public function update(Request $request, Category $category)
    {
        $validated=$request->validate([
            'catName'=>'required|max:50|unique:categories,catName',
            'slug'=>'required|unique:categories,slug',
        ]);
        $category->update($request->all());

        return redirect("admin/category")->with('success','Update successfully');
    }

    public function trash($id)
    {
        Category::where('id', $id)->delete();
        return redirect('/admin/category')->with('success','Delete successfully');
    }

    public function intrash()
    {
        $categories=Category::onlyTrashed()->paginate(5);
        return view('/admin/category/intrash',['categories'=>$categories,'title'=>'CATEGORY LIST IN TRASH']);
    }

    public function restore($id)
    {
        Category::onlyTrashed()->where('id', $id)->restore();
        return redirect('/admin/category')->with('success','Restore successfully');
    }
 
    public function destroy($id)
    {
        Category::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect('/admin/category-intrash')->with('success','Destroy successfully');
    }

    public function toggleStatus($id)
    {
        $category=Category::find($id);
        if($category->status==0)$category->status=1;
        else $category->status=0;
        $category->save();
        return redirect('/admin/category')->with('success', 'Toggle Status successfully');
    }
}
