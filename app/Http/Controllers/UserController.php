<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('backend.user.list',compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('backend.user.create', compact('roles'));
    }

    public function store(UserRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;
        if ($request->hasFile('image')){
            $path = $request->file('image')->store('images', 'public');
            $user->image = $path;
        }
        $user->save();

//        $user->role()->sync($request->role);
//        session()->flash('add_success', 'Add new user successfully!');
        return redirect()->route('users.list');

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
        return redirect()->route('users.list');
    }

    public function destroy($id)
    {
//        $user = User::findOrFail($id);
//        $user->roles()->detach();
//        $user->delete();
//        return redirect()->route("users.index");

        $user = User::findOrFail($id);
//        $user->role()->detach();
        $user->delete();
        return response()->json(["success"=>true]);
    }

}
