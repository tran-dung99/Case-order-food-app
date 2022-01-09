<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('backend.user.list',compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('backend.user.detail',compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.user.update',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required",
            "phone" => "required",
            "email" => "required",
            "password" => "required",
        ]);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        if ($request->hasFile('image')){
            $path = $request->file('image')->store('images', 'public');
            $user->image = $path;
        }
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect()->route('users.list')->with('message','Sửa user thành công');
    }

}
