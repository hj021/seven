<!doctype html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
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
</html>
