@extends('layouts.app')
@section('title','صفحه خانه')
@section('pics')

    <div class="slider-container">
        <div class="slider-control left inactive"></div>
        <div class="slider-control right"></div>
        <ul class="slider-pagi"></ul>
        <div class="slider">

            <div class="slide slide-0 active">
                <div class="slide__bg"></div>
                <div class="slide__content">
                    {{--                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">--}}
                    {{--                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405"/>--}}
                    {{--                </svg>--}}
                    <div class="slide__text">
                        <h2 class="slide__text-heading">Project name 1</h2>
                        <p class="slide__text-desc">Lornihil animi facere, doloremque voluptate tempore quia.</p>
                        <a href="http://hkmbhutto.wix.com/abdulrasheed"
                           class="slide__text-link">Project link</a>
                    </div>
                </div>
            </div>

            <div class="slide slide-1 ">
                <div class="slide__bg" style="background-image: url({{ asset('img/slide.png') }});"></div>
                <div class="slide__content">
                    {{--                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">--}}
                    {{--                    <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405"/>--}}
                    {{--                </svg>--}}
                    <div class="slide__text">
                        <h2 class="slide__text-heading">Project name 2</h2>
                        <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio
                            veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil
                            animi facere, doloremque voluptate tempore quia.</p>
                        <a href="http://hkmbhutto.wix.com/abdulrasheed"
                           class="slide__text-link">Project link</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container my-4">

        <div class="row d-flex flex-wrap portfolio">
            <video class="col-12 col-md-6" muted autoplay>
                <source src="{{ asset('upload/test.mp4') }}"/>
            </video>
            <video class="col-12 col-md-6" muted autoplay>
                <source src="{{ asset('upload/test.mp4') }}"/>
            </video>
        </div>

        <div class="row d-flex flex-wrap portfolio">
            <div class="col-12 col-lg-6">
                <img class="img-fluid shadow" src="{{ asset('img/test.png') }}" alt="">
                <img class="img-fluid shadow" src="{{ asset('img/test2.png') }}" alt="">
                <img class="img-fluid shadow" src="{{ asset('img/test.png') }}" alt="">
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid shadow" src="{{ asset('img/test2.png') }}" alt="">
                <img class="img-fluid shadow" src="{{ asset('img/test.png') }}" alt="">
                <img class="img-fluid shadow" src="{{ asset('img/test.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid"
         style="background: url({{ asset('img/test.png') }});background-repeat: no-repeat;background-size: cover;height: 300px;">
        <form action="">
            <div class="p-3 d-flex align-items-center align-content-center flex-column text-white float-right text-center">
                <div class="row">
                    <p>عضویت در خبرنامه</p>
                </div>
                <div class="row">
                    <button style="height: 30px;margin: 0px;background-color: white;border: 0px;outline: 0px;"> <
                    </button>
                    <input type="email"
                           style="direction:ltr;padding: 10px;color: #fff;margin:0;border: 1px solid white;background-color: transparent;height: 30px;"
                           placeholder="ایمیل خود را وارد نمایید.">
                </div>
            </div>
        </form>
    </div>
@endsection
