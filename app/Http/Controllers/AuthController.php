<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register()
    {
        return view("auth.register");
    }

    public function checkRegister(Request $request)
    {   
        if ($request->input('password') !== $request->input('password_confirmation')) {
            return redirect('/auth/register')->with('error', 'Mật khẩu không khớp!');
        }
        elseif ($request->input('username') != 'phamthithanhoa' 
        || $request->input('student_id') != '0022467' 
        || $request->input('gender') != 'female' 
        || $request->input('class') != '67Pm2'
        ) {
            return redirect('/auth/register')->with('error', 'Thông tin đăng ký không đúng!');
        }
        return redirect('/auth/login')->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.');
    }
    public function age()
    {
        return view("auth.age");
    }
    public function storeAge(Request $request)
    {
         session(['age' => $request->age]);

        return redirect()->route('home');
    }
}
