<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.layout.master');
    }

    public function showFormLoginAdmin()
    {
        return view('backend.auth.login');
    }

    public function loginAdmin(Request $request)
    {

        $data = $request->only('email','password');
        if (Auth::attempt($data) && (Auth::user()->role_id == '1' || Auth::user()->role_id == '2')) {
            $users = User::all();
            return view('backend.user.list',compact('users'));
        } else {
            session()->flash('error-login', 'Tài khoản không đúng!');
            return view('backend.auth.login');
        }
    }

    public function logoutAdmin()
    {
        Auth::logoutAdmin();
        return view('backend.auth.login');
    }

    public function showFormRegisterAdmin()
    {
        return view('backend.auth.register');
    }
//
//    public function registerAdmin(Request $request)
//    {
//        $data = $request->only('name','phone','email','password');
//        $data["password"] = Hash::make($request->password);
//        User::create($data);
//        Session::flash('message','Đăng ký thành công rực rỡ');
//        return redirect()->route("admin.showFormLogin");
//    }

    public function registerAdmin(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role_id = $request->role_id;
        $user->password = Hash::make($request->password);
        $user->save();

//        $user->roles()->sync($request->roles);
        return redirect()->route('admin.showFormLogin');

    }
}
