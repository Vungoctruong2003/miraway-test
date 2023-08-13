<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view('user.login');
    }

    public function login(
        LoginRequest $request,
    )
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            Session::flash('successLogin', 'Đăng nhập thành công');
        } else {
            Session::flash('errorLogin', 'Tài khoản hoặc mật khẩu không chính xác');
        }
        return redirect()->route('home');
    }

    public function register(
        RegisterRequest $request,
    )
    {
        $dataRegisterUser = $request->all();
        $dataRegisterUser['password'] = Hash::make($dataRegisterUser['password']);
        $user = User::create($dataRegisterUser);

        event(new Registered($user));
    }
}
