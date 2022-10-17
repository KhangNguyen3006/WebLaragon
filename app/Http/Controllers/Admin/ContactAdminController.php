<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactAdminController extends Controller
{
    public function index()
    {
        $contacts=Contact::latest()->paginate(5);
        $contact_count=Contact::count();
        $contact_show=Contact::where('status',1)->count();
        $contact_hide=Contact::where('status',0)->count();
        if($keyword=request()->keyword)
        {
            $contacts=Contact::latest()->where('email', 'like', '%'.$keyword.'%')->paginate(5);
        }
        return view('/admin/contact/index', compact('contact_count','contact_show', 'contact_hide') , ['contacts'=>$contacts, 'title'=>'CONTACT LIST']);
    }



    public function store(Request $request)
    {
        $validated=$request->validate([
            'email'=>'required|max:100|unique:nguyenthanhkhangcontacts,email',]);

        $dataInsert=$request->input();

        Contact::create($dataInsert);
        return redirect()->back()->with('success','Create Contact successfully');
    }

 
    public function show(Contact $contact)
    {
        return view('admin.contact.show', ['contact'=>$contact,'title'=>'Contact Information']);
    }

 
    public function edit(Contact $contact)
    {
       return view('admin.contact.edit',['contact'=>$contact,'title'=>'Contact edit']);
    }


    public function update(Request $request, Contact $contact)
    {
        $validated=$request->validate([
            'email'=>'required|max:100|unique:nguyenthanhkhangcontacts,email',
        ]);
        $contact->update($request->all());

        return redirect("admin/contact")->with('success','Update successfully');
    }

    public function trash($id)
    {
        Contact::where('id', $id)->delete();
        return redirect('/admin/contact')->with('success','Delete successfully');
    }

    public function intrash()
    {
        $contacts=Contact::onlyTrashed()->paginate(5);
        return view('/admin/contact/intrash',['contacts'=>$contacts,'title'=>'CONTACT LIST IN TRASH']);
    }

    public function restore($id)
    {
        Contact::onlyTrashed()->where('id', $id)->restore();
        return redirect('/admin/contact')->with('success','Restore successfully');
    }
 
    public function destroy($id)
    {
        Contact::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect('/admin/contact-intrash')->with('success','Destroy successfully');
    }

    public function toggleStatus($id)
    {
        $contact=Contact::find($id);
        if($contact->status==1)$contact->status=0;
        else $contact->status=1;
        $contact->save();
        return redirect('/admin/contact')->with('success', 'Toggle Status successfully');
    }
}
