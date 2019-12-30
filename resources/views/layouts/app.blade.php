<!doctype html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="container2 w-100 h-100 position-fixed" style="z-index: 10000">
    <svg class="loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 340">
        <circle cx="170" cy="170" r="160" stroke="#E2007C"/>
        <circle cx="170" cy="170" r="135" stroke="#404041"/>
        <circle cx="170" cy="170" r="110" stroke="#E2007C"/>
        <circle cx="170" cy="170" r="85" stroke="#404041"/>
    </svg>
</div>

<!--background-->
<div class="area position-fixed w-100 h-100" style="z-index: -10;">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
@includeIf('layouts.header')
@yield('slider')
@yield('pics')
@yield('news')
@include('layouts.footer')


</body>
<script src="{{ asset('js/jquery.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.js') }}" defer></script>
<script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
<script src="{{ asset('js/owl.popper.min.js') }}" defer></script>
<script src="{{ asset('js/custom.js') }}" defer></script>
<script src="{{ asset('js/production.min.js') }}" defer></script>
<script>
    window.onload = () => {
        document.querySelector('.container2').classList.add('d-none');
    }
</script>
</html>
