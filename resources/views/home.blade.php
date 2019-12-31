@extends('layouts.app')
@section('title','صفحه خانه')
@section('pics')

    <div class="slider-container">
        <div class="slider-control left inactive"></div>
        <div class="slider-control right"></div>
        <ul class="slider-pagi"></ul>
        <div class="slider">

            <div class="slide slide-0 active">
                <div class="slide__bg" style="
                        background-image: url({{ asset('img/slide1.jpg') }});
                        "></div>
                <div class="slide__content">
                                    <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                                        <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405"/>
                                    </svg>
                    <div class="slide__text text-bold text-white p-3" style="background: rgba(10,10,10,0.5);">
                        <h2 class="slide__text-heading">محصول 852</h2>
                        <p class="slide__text-desc">
                            انتخاب شما بهترین انتخاب نقش بوم پرداز در سال 2020
                        </p>
                        <a href="http://hkmbhutto.wix.com/abdulrasheed"
                           class="slide__text-link">خرید</a>
                    </div>
                </div>
            </div>

            <div class="slide slide-1 ">
                <div class="slide__bg" style="background-image: url({{ asset('img/slide2.jpg') }});"></div>
                <div class="slide__content">
                                    <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                                        <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405"/>
                                    </svg>
                    <div class="slide__text text-bold text-white p-3" style="background: rgba(10,10,10,0.5);">
                        <h2 class="slide__text-heading">محصول 852</h2>
                        <p class="slide__text-desc">
                            انتخاب شما بهترین انتخاب نقش بوم پرداز در سال 2020
                        </p>
                        <a href="http://hkmbhutto.wix.com/abdulrasheed"
                           class="slide__text-link">خرید</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">

        <div class="row d-flex flex-wrap portfolio my-4">
            <video class="col-12 col-md-6" muted autoplay>
                <source src="{{ asset('upload/test.mp4') }}"/>
            </video>
            <video class="col-12 col-md-6" muted autoplay>
                <source src="{{ asset('upload/test.mp4') }}"/>
            </video>
        </div>

        <div class="row justify-content-center align-content-start align-items-start my-2">

            <div class="col-12 col-lg-6">
                <div class="hover ehover1 my-2">
                    <img class="img-fluid rounded" src="{{ asset('img/2.jpg') }}" alt="">
                    <div class="overlay d-flex justify-content-center flex-column">
                        <h2>محصول شماره 9</h2>
                        <a href="#" class="btn btn-danger info nullbutton" data-toggle="modal" data-target="#modal13">
                            خرید
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center align-content-start align-items-start my-2">
                    <div class="col-12 col-lg-6">
                        <div class="hover ehover1 my-2">
                            <img class="img-fluid rounded" src="{{ asset('img/4.jpg') }}" alt="">
                            <div class="overlay d-flex justify-content-center flex-column">
                                <h2>محصول شماره 9</h2>
                                <a href="#" class="btn btn-danger info nullbutton" data-toggle="modal" data-target="#modal13">
                                    خرید
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="hover ehover1 my-2">
                            <img class="img-fluid rounded" src="{{ asset('img/3.jpg') }}" alt="">
                            <div class="overlay d-flex justify-content-center flex-column">
                                <h2>محصول شماره 9</h2>
                                <a href="#" class="btn btn-danger info nullbutton" data-toggle="modal" data-target="#modal13">
                                    خرید
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="row justify-content-center align-content-start align-items-start my-2">
                    <div class="col-12 col-lg-6">
                        <div class="hover ehover1 my-2">
                            <img class="img-fluid rounded" src="{{ asset('img/4.jpg') }}" alt="">
                            <div class="overlay d-flex justify-content-center flex-column">
                                <h2>محصول شماره 9</h2>
                                <a href="#" class="btn btn-danger info nullbutton" data-toggle="modal" data-target="#modal13">
                                    خرید
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="hover ehover1 my-2">
                            <img class="img-fluid rounded" src="{{ asset('img/3.jpg') }}" alt="">
                            <div class="overlay d-flex justify-content-center flex-column">
                                <h2>محصول شماره 9</h2>
                                <a href="#" class="btn btn-danger info nullbutton" data-toggle="modal" data-target="#modal13">
                                    خرید
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hover ehover1 my-2">
                    <img class="img-fluid rounded" src="{{ asset('img/1.jpg') }}" alt="">
                    <div class="overlay d-flex justify-content-center flex-column">
                        <h2>محصول شماره 8</h2>
                        <a href="#" class="btn btn-danger info nullbutton" data-toggle="modal" data-target="#modal13">
                            خرید
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid d-flex align-items-center justify-content-center"
         style="
        background: #74ebd5;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #ACB6E5, #74ebd5);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #ACB6E5, #74ebd5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

          height: 150px;">
        <form action="">
            <div class="mr-5 p-3 d-flex align-items-center align-content-center flex-column text-dark text-center">
                <div class="row">
                    <p>----- <b>عضویت در خبرنامه</b> -----</p>
                </div>
                <div class="row">
                    <button class="px-2" style="height: 40px;margin: 0px;background-color: white;border: 0px;outline: 0px;">
                        ارسال
                    </button>
                    <input type="email"
                           style="direction:ltr;padding: 10px;color: #fff;margin:0;border: 1px solid white;background-color: transparent;height: 40px;"
                           placeholder="ایمیل خود را وارد نمایید.">
                </div>
            </div>
        </form>
    </div>

@endsection
