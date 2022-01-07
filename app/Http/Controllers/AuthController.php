<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->only("email","password");
        if(!Auth::attempt($data)){
            session()->flash('error-login', 'Tài khoản không đúng!');
            return redirect()->route('auth.login');

        }else{
            return redirect()->route("foods.index");
        }
    }

    public function showFormLogin()
    {
        return view("auth.login");
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
