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
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string|confirmed',
            'student_id' => 'required|string',
            'class' => 'required|string',
            'gender' => 'required|string',
        ]);

        if ($request->input('name') !== 'phamthithanhhoa'
            || $request->input('student_id') !== '0022467'
            || $request->input('gender') !== 'female'
            || strtolower($request->input('class')) !== '67pm2'
        ) {
            return redirect('/auth/register')->with('error', 'Thông tin đăng ký không đúng!');
        }

        return redirect('/auth/signin')->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.');
    }

    public function age()
    {
        return view("auth.age");
    }

    public function storeAge(Request $request)
    {
        // Kiểm tra xem người dùng đã nhập dữ liệu chưa
        $request->validate([
            'age' => 'required'
        ]);

        // Lưu tuổi vào session với key là 'age'
        $request->session()->put('age', $request->input('age'));

        // Sau khi lưu session thành công, chuyển hướng người dùng về trang chủ
        return redirect()->route('home');
    }

    public function SignIn()
    {
        return view("auth.signin");
    }

    public function CheckSignIn(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'repass' => 'required|string',
            'mssv' => 'required|string',
            'lopmonhoc' => 'required|string',
            'gioitinh' => 'required|string',
        ]);

        if ($request->input('password') !== $request->input('repass')) {
            return "Đăng nhập thất bại: mật khẩu nhập lại không đúng";
        }

        if ($request->input('username') === 'phamthithanhhoa'
            && $request->input('mssv') === '0022467'
            && $request->input('gioitinh') === 'female'
            && strtolower($request->input('lopmonhoc')) === '67pm2'
        ) {
            return "Đăng nhập thành công!";
        }

        return "Đăng nhập thất bại";
    }
}