<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Link;

class LinkController extends Controller
{
    


    public function index()
    {
        $links=Link::latest()->paginate(5);
        if($keyword=request()->keyword)
        {
            $links=Link::latest()->where('title', 'like', '%'.$keyword.'%')->paginate(5);
        }
        return view('/admin/link/index', ['links'=>$links, 'title'=>'LINK LIST']);
    }

    public function create()
    {
       return view('admin/link/create',['title'=>'LINK CREATE']);
    }


    public function store(Request $request)
    {
        $validated=$request->validate([
            'title'=>'required|max:100|unique:nguyenthanhkhanglinks,title',]);
        $dataInsert=$request->input();

        Link::create($dataInsert);
        return redirect()->back()->with('success','Create Link successfully');
    }

 
    public function show(Link $link)
    {
        return view('admin.link.show', ['link'=>$link,'title'=>'Link Information']);
    }

 
    public function edit(Link $link)
    {
       return view('admin.link.edit',['link'=>$link,'title'=>'Link edit']);
    }


    public function update(Request $request, Link $link)
    {
        $validated=$request->validate([
            'title'=>'required|max:100|unique:nguyenthanhkhanglinks,title',
        ]);
        $link->update($request->all());

        return redirect("admin/link")->with('success','Update successfully');
    }

    public function trash($id)
    {
        Link::where('id', $id)->delete();
        return redirect('/admin/link')->with('success','Delete successfully');
    }

    public function intrash()
    {
        $links=Link::onlyTrashed()->paginate(5);
        return view('/admin/link/intrash',['links'=>$links,'title'=>'LINK LIST IN TRASH']);
    }

    public function restore($id)
    {
        Link::onlyTrashed()->where('id', $id)->restore();
        return redirect('/admin/link')->with('success','Restore successfully');
    }
 
    public function destroy($id)
    {
        Link::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect('/admin/link-intrash')->with('success','Destroy successfully');
    }

    public function toggleStatus($id)
    {
        $link=Link::find($id);
        if($link->status==0)$link->status=1;
        else $link->status=0;
        $link->save();
        return redirect('/admin/link')->with('success', 'Toggle Status successfully');
    }
}
