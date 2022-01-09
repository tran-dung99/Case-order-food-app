<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function showFormLoginAdmin()
    {
        return view('backend.auth.login');
    }

    public function loginAdmin(Request $request)
    {

        $data = $request->only('email','password');

        if (Auth::attempt($data)) {
            if(Auth::user()->role == 1 || Auth::user()->role == 2){
                return redirect()->route("users.list");
            }else{
                session()->flash('error-login', 'Tài khoản không phải là quản trị viên');
                return view('backend.auth.login');
            }
        } else {
            session()->flash('error-login', 'Tài khoản không đúng!');
            return view('backend.auth.login');
        }
    }

    public function logoutAdmin()
    {
        Auth::logout();
        return view('backend.auth.login');
    }

    public function showFormRegisterAdmin()
    {
        return view('backend.auth.register');
    }

    public function registerAdmin(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role_id = $request->role_id;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin.showFormLogin');

    }
}
