<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    


    public function index()
    {
        $pages=Page::latest()->paginate(5);
        return view('/admin/page/index', ['pages'=>$pages, 'title'=>'PAGE LIST']);
    }

    public function create()
    {
       return view('admin/page/create',['title'=>'PAGE CREATE']);
    }


    public function store(Request $request)
    {
        $validated=$request->validate([
            'title'=>'required|max:50|unique:nguyenthanhkhangpages,title',
            'slug'=>'required|unique:nguyenthanhkhangpages,slug',]);

        $dataInsert=$request->input();

        Page::create($dataInsert);
        return redirect()->back()->with('success','Create Page successfully');
    }

 
    public function show(Page $page)
    {
        return view('admin.page.show', ['page'=>$page,'title'=>'Page Information']);
    }

 
    public function edit(Page $page)
    {
       return view('admin.page.edit',['page'=>$page,'title'=>'Page edit']);
    }


    public function update(Request $request, Page $page)
    {
        $validated=$request->validate([
            'title'=>'required|max:50|unique:nguyenthanhkhangpages,title',
            'slug'=>'required|unique:nguyenthanhkhangpages,slug',
        ]);
        $page->update($request->all());

        return redirect("admin/page")->with('success','Update successfully');
    }

    public function trash($id)
    {
        Page::where('id', $id)->delete();
        return redirect('/admin/page')->with('success','Delete successfully');
    }

    public function intrash()
    {
        $pages=Page::onlyTrashed()->paginate(5);
        return view('/admin/page/intrash',['pages'=>$pages,'title'=>'PAGE LIST IN TRASH']);
    }

    public function restore($id)
    {
        Page::onlyTrashed()->where('id', $id)->restore();
        return redirect('/admin/page')->with('success','Restore successfully');
    }
 
    public function destroy($id)
    {
        Page::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect('/admin/page-intrash')->with('success','Destroy successfully');
    }

    public function toggleStatus($id)
    {
        $page=Page::find($id);
        if($page->status==0)$page->status=1;
        else $page->status=0;
        $page->save();
        return redirect('/admin/page')->with('success', 'Toggle Status successfully');
    }
}
