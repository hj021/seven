@extends('layouts.app')
@section('title','سبد خرید')
@section('pics')
    <div class="container" style="margin-top: 150px;">
        <div class="col-12 mx-auto col-md-6 rounded p-3 my-5" style="box-shadow:0px 0px 10px gray;background-color: rgba(40,100,20,0.1)">
            <h2 class="text-center my-4">ویرایش اطلاعات</h2>
            @isset($error)
                <div class="alert alert-warning">{{ $error }}</div>
            @endif
            <form action="{{ url('edit') }}" method="post">
                @csrf
                <div class="form-group">
                    <p>نام و نام خانوادگی</p>
                    <input class="form-control" type="text" name="name" placeholder="نام و نام خانوادگی" required value="{{ $user->name ?? '' }}">
                </div>
                <div class="form-group">
                    <p>نام کاربری</p>
                    <input class="form-control" type="text" name="username" placeholder="نام کاربری" required disabled value="{{ $user->username ?? '' }}">
                </div>
                <div class="form-group">
                    <p>رمز عبور</p>
                    <input class="form-control" type="password" name="password" placeholder=" (اگر نمیخواهید تغییر کند آن را رها کنید) رمز عبور">
                </div>
                <div class="form-group">
                    <p>شماره تلفن</p>
                    <input class="form-control" type="text" name="phone" placeholder="شماره تلفن" required value="{{ $user->phone ?? '' }}">
                </div>
                <div class="form-group">
                    <p>آدرس</p>
                    <input class="form-control" type="text" name="address" placeholder="آدرس (جهت ارسال سفارش)" value="{{ $user->address ?? '' }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">ویرایش اطلاعات</button>
                </div>
            </form>
        </div>
    </div>
@endsection
