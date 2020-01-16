@extends('admin.master')

@section('title')
    مدیریت اسلاید ها
@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                @if(isset($message))
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <span class="alert alert-info ">{{ $message }}</span>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-2 text-bold">تنظیمات سایت</h5>

                            <p class="card-text">
                            <form action="{{ url('manager/site-setting') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                نام سایت:
                                <input type="text" name="siteName" class="form-control my-2" value="{{ $setting['siteName'] ?? ''}}">
                                درباره ما:
                                <textarea type="text" name="aboutUs" class="form-control my-2">{{ $setting['aboutUs'] ?? ''}}</textarea>
                                توضیح درمورد سایت (در نتایج گوگل نوشته میشود):
                                <textarea type="text" name="description" class="form-control my-2">{{ $setting['description'] ?? ''}}</textarea>
                                لینک تلگرام:
                                <input type="text" name="telegram" class="form-control my-2" value="{{ $setting['telegram'] ?? ''}}">
                                لینک اینستاگرام:
                                <input type="text" name="instagram" class="form-control my-2" value="{{ $setting['instagram'] ?? ''}}">
                                لوگو:
                                <img src="{{ asset('img/logo.png') }}" class="img-fluid" style="width: 50px;height: 50px;">
                                <input type="file" name="logo" class="my-2 form-control my-2">

                                <input type="submit" class="btn btn-primary" value="ویرایش">

                            </form>
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

