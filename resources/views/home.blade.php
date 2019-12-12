@extends('layouts.app')
@section('title','صفحه خانه')
@section('pics')
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
@endsection
