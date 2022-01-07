<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('frontend.layout.home');
    }

    public function showFormLogin()
    {
        return view('frontend.auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->only('email','password');
        if (Auth::attempt($data)) {
            return view('frontend.layout.home');

        } else {
            session()->flash('error-login', 'Tài khoản không đúng!');
            return view('frontend.auth.login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return view('frontend.layout.home');
    }

    public function showFormRegister()
    {
        return view('frontend.auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->only('name','email','password');
        $data["password"] = Hash::make($request->password);
        User::create($data);
        Session::flash('message','Đăng ký thành công rực rỡ');
        return redirect()->route("home.showFormLogin");
    }
}
