@extends('layouts.app')
@section('title','محصول')
@section('pics')
    <svg class="d-none d-lg-block" style="position: fixed;z-index: -1;margin-top: -600px;margin-right: -500px;"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            width="1085px" height="2413px">
        <path fill-rule="evenodd"  fill="rgb(34, 34, 34)"
              d="M63.199,-0.000 C63.199,-0.000 34.863,155.915 43.772,384.836 C48.856,515.491 97.456,667.836 91.368,833.812 C85.539,992.717 -2.399,1151.288 0.061,1320.687 C0.919,1379.785 100.525,1484.598 101.081,1542.260 C101.828,1619.638 59.018,1706.276 60.285,1778.409 C62.358,1896.445 124.394,2019.334 124.394,2112.711 C124.394,2312.162 66.113,2413.000 66.113,2413.000 L1085.000,2413.000 L1082.086,5.831 L63.199,-0.000 Z"/>
    </svg>

    <div class="p-5 row mb-5" style="margin-top: 150px;">

        <div class="col-12 col-md-6 my-3 mx-auto">
                <div class="row d-flex justify-content-center">
                    <img id="mainImage" style="width: 500px;height: 380px;" class="img-fluid rounded shadow" src="{{ asset('img/test.png') }}" alt="">
                </div>
                <div class="gallery-content row mt-2 d-flex justify-content-center">
                    <img src="{{ asset('img/test.png') }}" class="img-fluid rounded" style="width:100px;height: 100px;margin: 10px;" alt="">
                    <img src="{{ asset('img/test2.png') }}" class="img-fluid rounded" style="width:100px;height: 100px;margin: 10px;" alt="">
                    <img src="{{ asset('img/test.png') }}" class="img-fluid rounded" style="width:100px;height: 100px;margin: 10px;" alt="">
                </div>

        </div>


        <div class="col-12 col-md-6 my-3 text-center text-md-left">
            <h2>ساعت جال سوییسی</h2>
            <p><b>21.000 تومان</b></p>
            <p><b>قیمت بدون مالیات</b></p>
            <p><a href="" class="btn btn-dark p-3"><span>افزودن به سبد خرید</span><span><img class="img-fluid p-1 col-2" src="{{ asset('img/basket.png') }}" alt=""></span></a></p>
            <a href=""><span><img src="{{ asset('img/love.png') }}" alt=""></span> <b>افزودن به علاقه مندی ها</b></a>
        </div>


    </div>

    <div class="container-fluid d-flex justify-content-center" style="background-color: #f5f5f5;">
        <div class="container row p-3 d-flex justify-content-center">
            <div class="col-12 col-md-6">
                <table class="table table-hover">
                    <tr class="border-top border-bottom border-dark"><td>توضیحات</td></tr>
                </table>
            </div>
            <div class="col-12 col-md-6 p-3 text-justify">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolores est eum minima nesciunt sapiente voluptatum. Atque id in ipsam, necessitatibus nihil praesentium qui repellendus similique soluta voluptatem voluptatibus, voluptatum!</p>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #222">
        <h3 class="text-center text-white pt-5">محصولات مشابه</h3>
        <div class="row p-3 d-flex text-center justify-content-center text-white">
            <a href="#" class="col-12 col-md-2 similar-hover rounded p-3 text-white">
                <img class="img-fluid" src="{{ asset('img/test.png') }}" alt="">
                <h2 style="font-size: 1.5rem !important;" class="my-2">product name</h2>
                <h4 style="font-size: 1rem !important;" class="my-2">25.000 تومان</h4>
            </a>
        </div>
    </div>

    <script>
        let imageWrapper = document.getElementsByClassName('gallery-content')[0];
        let images  = imageWrapper.children;
        for (let i=0;i<images.length;i++)
        {
            images[i].onclick = function(e){
                mainImage.src = images[i].src;
                mainImage.classList.add('gallery-animation');
                setTimeout(()=>{mainImage.classList.remove('gallery-animation');},800);
            }
        }
    </script>

@endsection
