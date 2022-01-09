<?php

namespace App\Http\Controllers;


use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function showFormLogin()
    {
        return view('frontend.auth.login');
    }

    public function login(Request $request)
    {

//        if(!Auth::attempt($data)){
//            session()->flash('error-login', 'Tài khoản không đúng!');
//            return redirect()->route('auth.login');
//
//        }else{
//            return redirect()->route("foods.index");
//        }

        $data = $request->only('email','password');
        if (Auth::attempt($data)) {
            $foods = Food::all();
            return view('frontend.layout.home',compact('foods'));

        } else {
            session()->flash('error-login', 'Tài khoản không đúng!');
            return view('frontend.auth.login');
        }
    }

    public function logout()
    {
        Auth::logout();
        $foods = Food::all();
        return view('frontend.layout.home',compact('foods'));
    }

    public function showFormRegister()
    {
        return view('frontend.auth.register');
    }

//    public function register(Request $request)
//    {
//        $data = $request->only('name','phone','email','password');
//        $data["password"] = Hash::make($request->password);
//        User::create($data);
//        Session::flash('message','Đăng ký thành công rực rỡ');
//        return redirect()->route("home.showFormLogin");
//    }
    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role_id = $request->role_id;
        $user->password = Hash::make($request->password);
        $user->save();

//        $user->roles()->sync($request->roles);
        return redirect()->route('home.showFormLogin');

    }
}
