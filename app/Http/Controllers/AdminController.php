<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
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
        if (Auth::attempt($data) && (Auth::user()->role_id == '1' || Auth::user()->role_id == '2')) {

            return redirect()->route('users.list')->with('message','Đăng nhập thành công');
        } else {
            session()->flash('error-login', 'Tài khoản không đúng!');
            return view('backend.auth.login');
        }
    }

//    public function logoutAdmin()
//    {
//        Auth::logout();
//        return view('backend.auth.login');
//    }
//

    public function logoutAdmin(Request $request) {
        Auth::user()->tokens->delete();
        Auth::logout();
        return response()->json('Successfully logged out');
    }


    public function showFormRegisterAdmin()
    {
        return view('backend.auth.register');
    }

    public function registerAdmin(Request $request)
    {
        $request->validate([
            "name" => "required",
            "phone" => "required",
            "email" => "required",
            "password" => "required",
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role_id = $request->role_id;
        $user->password = Hash::make($request->password);
        $user->save();

//        $user->roles()->sync($request->roles);
        return redirect()->route('admin.showFormLogin')->with('message','Tạo tài khoản thành công');

    }
}
