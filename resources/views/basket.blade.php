@extends('layouts.app')
@section('title','سبد خرید')
@section('pics')
    <div class="container" style="margin-top: 120px;">
        <h2 class="text-center my-4">سبد خرید</h2>
        <table class="table table-responsive table-striped  d-flex justify-content-center">
            <tr>
                <td>حذف</td>
                <td>قیمت واحد</td>
                <td>مجموع</td>
                <td>تعداد</td>
                <td>نام محصول</td>
                <td>تصویر محصول</td>
            </tr>
            <tr>
                <td><a href=""><img src="{{ asset('img/recycle.png') }}" class="img-fluid" alt=""></a></td>
                <td>10</td>
                <td>50</td>
                <td><input type="number" style="width: 50px;" class="text-center p-1" value="1"></td>
                <td>تابلوی شماره 154</td>
                <td><img style="width: 100px;" class="img-fluid" src="{{ asset('img/1.jpg') }}" alt=""></td>
            </tr>
            <tr>
                <td colspan="6">
                    <a href="" class="btn btn-secondary">ادامه خرید</a>
                    <a href="" class="btn btn-secondary">آپدیت لیست</a>
                </td>
            </tr>
            <tr>
                <td colspan="6"><span>مجموع :</span> <span>10 تومان</span></td>
            </tr>
        </table>
    </div>
@endsection
