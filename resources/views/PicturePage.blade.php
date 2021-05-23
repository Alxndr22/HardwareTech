@extends('WithPhoto')
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/PicPage.css') }}">
    <style>
        #first-page{
            background-image: url("{{$pict}}");
        }
    </style>
{{--    <title>@yield('title')</title>--}}
</head>
@section('picpage')
    <div id="first-page">
        <div>
            <p class="slogan" id="top-slogan">Сучасне комп’ютерне обладнання</p>
            <p class="slogan" id="bottom-slogan">Більше 20 тисяч товарів за привабливою низькою ціною</p>
        </div>
    </div>
    @yield('content')
@endsection
