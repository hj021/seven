<?php

namespace App\Http\Controllers;

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
}
