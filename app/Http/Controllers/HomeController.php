<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $header = 1;
        return view('home',compact('header'));
    }

    public function product(/*Product $product,$slug*/)
    {
        return view('product');
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
        $user = null;
        if(
            (User::where('username',$request->username)->get())->isEmpty() &&
            (User::where('phone',$request->phone)->get())->isEmpty() &&
            (User::where('email',$request->email)->get())->isEmpty()
        )
        {
            $user = new User;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->name = $request->name;
            $user->address = $request->address;
            $res = $user->save();
            auth()->login($user);
        }
        else
            $error = "نام کاربری یا ایمیل ویا تلفن وارد شده تکراری می باشد.";

        if($res)
        {
            return redirect('/');
        }
        else
        {
            return view('register',compact('error','user'));
        }

    }

    public function edit(Request $request)
    {
        $res = false;
        $user = null;
        if(
            (User::where('phone',$request->phone)->get())->isEmpty()
        )
        {
            $user = auth()->user();
            $user->password = $request->password == '' ?: bcrypt($request->password);
            $user->phone = $request->phone;
            $user->name = $request->name;
            $user->address = $request->address;
            $res = $user->save();
            auth()->login($user);
        }
        else
            $error = "نام کاربری یا ایمیل ویا تلفن وارد شده تکراری می باشد.";

        if($res)
        {
            return redirect('edit');
        }
        else
        {
            return view('edit',compact('error','user'));
        }

    }

    public function editPage()
    {
        $user = auth()->user();
        return view('edit',compact('user'));
    }
}
