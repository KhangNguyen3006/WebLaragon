<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
    	return view('frontend.contact');
    }

    public function doContact(Request $request)
    {
        $contact=new Contact();
        $contact->email=$request->email;
        $contact->title=$request->title;
        $contact->content=$request->content;
        $contact->status=1;
        $contact->save();
         return redirect()->route('contact')->with('success','Gửi thành công');
    }
}
