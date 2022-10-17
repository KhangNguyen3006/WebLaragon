<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users=User::latest()->paginate(5);
        if($keyword=request()->keyword)
        {
            $users=User::latest()->where('name', 'like', '%'.$keyword.'%')->paginate(5);
        }
        return view('/admin/user/index', ['users'=>$users, 'title'=>'USER LIST']);
    }


    public function store(Request $request)
    {
        $validated=$request->validate([
            'name'=>'required|max:100|unique:nguyenthanhkhangusers,name',
            'email'=>'required|max:100|unique:nguyenthanhkhangusers,email',]);

        $dataInsert=$request->input();

        User::create($dataInsert);
        return redirect()->back()->with('success','Create User successfully');
    }

 
    public function show(User $user)
    {
        return view('admin.user.show', ['user'=>$user,'title'=>'User Information']);
    }

 
    public function edit(User $user)
    {
       return view('admin.user.edit',['user'=>$user,'title'=>'User edit']);
    }


    public function update(Request $request, User $user)
    {
        $validated=$request->validate([
            'name'=>'required|max:50|unique:nguyenthanhkhangusers,name',
            'email'=>'required|max:100|unique:nguyenthanhkhangusers,email',]);
        $user->update($request->all());

        return redirect("admin/user")->with('success','Update successfully');
    }

    public function trash($id)
    {
        User::where('id', $id)->delete();
        return redirect('/admin/user')->with('success','Delete successfully');
    }

    public function intrash()
    {
        $users=User::onlyTrashed()->paginate(5);
        return view('/admin/user/intrash',['users'=>$users,'title'=>'USER LIST IN TRASH']);
    }

    public function restore($id)
    {
        User::onlyTrashed()->where('id', $id)->restore();
        return redirect('/admin/user')->with('success','Restore successfully');
    }
 
    public function destroy($id)
    {
        User::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect('/admin/user-intrash')->with('success','Destroy successfully');
    }

    public function toggleStatus($id)
    {
        $user=User::find($id);
        $user->save();
        return redirect('/admin/user')->with('success', 'Toggle Status successfully');
    }
}
