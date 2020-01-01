@extends('layouts.app')
@section('title','سبد خرید')
@section('pics')
    <div class="container" style="margin-top: 150px;">
        <div class="col-12 mx-auto col-md-6 rounded p-3 my-5" style="box-shadow:0px 0px 10px gray;background-color: rgba(40,100,20,0.1)">
            <h2 class="text-center my-4">ثبت نام</h2>
            @isset($error)
                <div class="alert alert-warning">{{ $error }}</div>
            @endif
            <form action="{{ url('register') }}" method="post">
                @csrf
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="نام و نام خانوادگی" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="نام کاربری" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="رمز عبور" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="phone" placeholder="شماره تلفن" required  >
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="ایمیل">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="address" placeholder="آدرس (جهت ارسال سفارش)">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">ثبت نام</button>
                </div>
            </form>
        </div>
    </div>
@endsection
