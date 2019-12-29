<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $header = 1;
        return view('home',compact('header'));
    }

    public function product()
    {
        $onProductPage = 1;
        return view('product',compact('onProductPage'));
    }

    public function basket()
    {
        return view('basket');
    }

    public function adminPage()
    {
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        return User::login($request->username, $request->password);
    }

    public function logout()
    {
        if (\Auth::check())
            \Auth::logoutCurrentDevice();
        return redirect('/');
    }

    public function registerPage()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $res = false;
        $errors = [];
        $user = null;
        if(
            (User::where('username',$request->username)->get())->isEmpty() &&
            (User::where('email',$request->email)->get())->isEmpty()
        )
        {
            $user = new User;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->name = $request->name;
            $res = $user->save();
            auth()->login($user);
        }
        else
            $errors['username'] = "نام کاربری و یا ایمیل وارد شده تکراری می باشد.";

        if($res)
        {
            return redirect('/');
        }
        else
        {
            return view('register',compact('errors','user'));
        }

    }

}
