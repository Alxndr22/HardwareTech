@extends('WithPhoto')
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/PicPage.css') }}">
</head>
@section('picpage')
    <div class="body-el" id="picture-page">
        <div class="banner">
            <img src="{{$pict}}" alt="1">
            <div class="text_before_banner">
                @foreach($slogan as $k => $v)
                    @if($k == 'top')
                        <p class="slogan" id="top-slogan">{{ $v }}</p>
{{--                {{ $products[0]->category }}--}}
                    @else
                        <p class="slogan" id="bottom-slogan">{{ $v }}</p>
                    @endif

{{--                {{ $products[0]->slogan }}--}}
                @endforeach
            </div>
        </div>
    </div>
    @yield('content')
@endsection
