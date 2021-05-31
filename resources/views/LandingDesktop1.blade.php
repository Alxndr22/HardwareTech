@extends('PicturePage')
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/LandingDesktop1.css') }}" >
</head>
@section('content')
    <div id="catalog_list" class="catalog_list">
        <a href="#header" class="popup_area"></a>
        <div class="catalog_list_body">
            <div class="catalog_list_content">
                <a href="#header"  class="popup_close">
                    <img src="{{ asset('images/letter-x.svg') }}">
                </a>
                <a id="menu_list_link" href="{{ url('container', ['Відеокарти']) }}"><img src="{{ asset('images/video-card.svg') }}"><p class="menu_item">Відеокарти</p></a>
                <a id="menu_list_link" href="{{ url('container', ['Материнські плати']) }}"><img src="{{ asset('images/motherboard.svg') }}"><p class="menu_item">Материнські плати</p></a>
                <a id="menu_list_link" href="{{ url('container', ['Процесори']) }}"><img src="{{ asset('images/cpu.svg') }}"><p class="menu_item">Процесори</p></a>
                <a id="menu_list_link" href="{{ url('container', ["Оперативна пам'ять"]) }}"><img src="{{ asset('images/ram.svg') }}"><p class="menu_item">Оперативна пам'ять</p></a>
                <a id="menu_list_link" href="{{ url('container', ['Корпуси']) }}"><img src="{{ asset('images/body.svg') }}"><p class="menu_item">Корпуси</p></a>
                <a id="menu_list_link" href="{{ url('container', ['Блоки живлення']) }}"><img src="{{ asset('images/power-supply.svg') }}"><p class="menu_item">Блоки живлення</p></a>
                <a id="menu_list_link" href="{{ url('container', ['Жорсткі диски']) }}"><img src="{{ asset('images/hdd.svg') }}"><p class="menu_item">Жорсткі диски</p></a>
            </div>
            <a href="#header" class="catalog_list_area"></a>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $(".popup_close").click(function ()  {
                if ( $("body").hasClass("lock")) {
                    $("body").removeClass("lock");
                }
            });
            $(".popup_area").click(function ()  {
                if ( $("body").hasClass("lock")) {
                    $("body").removeClass("lock");
                }
            });
            $(".catalog2").click(function ()  {
                if ( $("body").hasClass("lock")) {
                    $("body").removeClass("lock");
                } else {
                    $("body").addClass("lock");
                }
            });
            $(".catalog_list_area").click(function ()  {
                if ( $("body").hasClass("lock")) {
                    $("body").removeClass("lock");
                }
            });
        });</script>
<div class="body-el" id="second-page">
    <div class="catalog_and_search">
        <form action = "/container/search" method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            <a href="#catalog_list" class="catalog2">
                <img src="{{ asset('images/dots-menu (black).svg') }}">
                <p id="catalog2_text">Каталог</p>
            </a>
            <div class="search2">
                <input type="text" placeholder="  Пошук..." name="search">
                <button type="submit">
                    <div id="search-icon">
                        <img src="{{ asset('images/search.svg') }}">
                    </div>
                </button>
            </div>
        </form>
    </div>
</div>

    <div class="body-el slider-page">
        <div class="category-label">
            <hr>
            <a href="{{ url('container', ['Відеокарти']) }}">
                <p>Відеокарти</p>
            </a>
            <hr>
        </div>
        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-1"></label>
                <label for="slide-dot-2"></label>
                <label for="slide-dot-3"></label>
            </div>

            <input id="slide-dot-1" type="radio" name="slides" style="display: none" checked>
            <div class="slide slide-1">
                @for($i = 0; $i < 3; $i++)
                    <a href="{{ url('product', [$gpus[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $gpus[$i]->small_image)}}'>
                            <p class="product-name">{{$gpus[$i]->name}}</p>
                            <p class="price">{{$gpus[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>

            <input id="slide-dot-2" type="radio" name="slides" style="display: none">
            <div class="slide slide-2">
                @for($i = 3; $i < 6; $i++)
                    <a href="{{ url('product', [$gpus[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $gpus[$i]->small_image)}}'>
                            <p class="product-name">{{$gpus[$i]->name}}</p>
                            <p class="price">{{$gpus[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>

            <input id="slide-dot-3" type="radio" name="slides" style="display: none">
            <div class="slide slide-3">
                @for($i = 6; $i < 9; $i++)
                    <a href="{{ url('product', [$gpus[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $gpus[$i]->small_image)}}'>
                            <p class="product-name">{{$gpus[$i]->name}}</p>
                            <p class="price">{{$gpus[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>
        </div>
        </div>

    </div>
    <div class="body-el slider-page">

        <div class="category-label">
            <hr>
            <a href="{{ url('container', ['Материнські плати']) }}">
                <p>Материнські плати</p>
            </a>
            <hr>
        </div>
        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-7"></label>
                <label for="slide-dot-8"></label>
                <label for="slide-dot-9"></label>
            </div>

            <input id="slide-dot-7" type="radio" name="slides3" style="display: none" checked>
            <div class="slide slide-1">
                @for($i = 0; $i < 3; $i++)
                    <a href="{{ url('product', [$mbs[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $mbs[$i]->small_image)}}'>
                            <p class="product-name">{{$mbs[$i]->name}}</p>
                            <p class="price">{{$mbs[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>

            <input id="slide-dot-8" type="radio" name="slides3" style="display: none">
            <div class="slide slide-2">
                @for($i = 3; $i < 6; $i++)
                    <a href="{{ url('product', [$mbs[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $mbs[$i]->small_image)}}'>
                            <p class="product-name">{{$mbs[$i]->name}}</p>
                            <p class="price">{{$mbs[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>

            <input id="slide-dot-9" type="radio" name="slides3" style="display: none">
            <div class="slide slide-3">
                @for($i = 6; $i < 9; $i++)
                    <a href="{{ url('product', [$mbs[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $mbs[$i]->small_image)}}'>
                            <p class="product-name">{{$mbs[$i]->name}}</p>
                            <p class="price">{{$mbs[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>
        </div>

    </div>
    <div class="body-el  slider-page">
        <div class="category-label">
            <hr>
            <a href="{{ url('container', ['Процесори']) }}">
                <p>Процесори</p>
            </a>
            <hr>
        </div>
        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-10"></label>
                <label for="slide-dot-11"></label>
                <label for="slide-dot-12"></label>
            </div>

            <input id="slide-dot-10" type="radio" name="slides4" style="display: none" checked>
            <div class="slide slide-1">
                @for($i = 0; $i < 3; $i++)
                    <a href="{{ url('product', [$cpus[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $cpus[$i]->small_image)}}'>
                            <p class="product-name">{{$cpus[$i]->name}}</p>
                            <p class="price">{{$cpus[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>

            <input id="slide-dot-11" type="radio" name="slides4" style="display: none">
            <div class="slide slide-2">
                @for($i = 3; $i < 6; $i++)
                    <a href="{{ url('product', [$cpus[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $cpus[$i]->small_image)}}'>
                            <p class="product-name">{{$cpus[$i]->name}}</p>
                            <p class="price">{{$cpus[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>

            <input id="slide-dot-12" type="radio" name="slides4" style="display: none">
            <div class="slide slide-3">
                @for($i = 6; $i < 9; $i++)
                    <a href="{{ url('product', [$cpus[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $cpus[$i]->small_image)}}'>
                            <p class="product-name">{{$cpus[$i]->name}}</p>
                            <p class="price">{{$cpus[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>
        </div>
    </div>
    <div class="body-el  slider-page">
        <div class="category-label">
            <hr>
            <p>Оперативна пам'ять</p>
            <hr>
        </div>
        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-13"></label>
                <label for="slide-dot-14"></label>
                <label for="slide-dot-15"></label>
            </div>

            <input id="slide-dot-13" type="radio" name="slides5" style="display: none" checked>
            <div class="slide slide-1">
                @for($i = 0; $i < 3; $i++)
                    <a href="{{ url('product', [$rams[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $rams[$i]->small_image)}}'>
                            <p class="product-name">{{$rams[$i]->name}}</p>
                            <p class="price">{{$rams[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>

            <input id="slide-dot-14" type="radio" name="slides5" style="display: none">
            <div class="slide slide-2">
                @for($i = 3; $i < 6; $i++)
                    <a href="{{ url('product', [$rams[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $rams[$i]->small_image)}}'>
                            <p class="product-name">{{$rams[$i]->name}}</p>
                            <p class="price">{{$rams[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>

            <input id="slide-dot-15" type="radio" name="slides5" style="display: none">
            <div class="slide slide-3">
                @for($i = 4; $i < 7; $i++)
                    <a href="{{ url('product', [$rams[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $rams[$i]->small_image)}}'>
                            <p class="product-name">{{$rams[$i]->name}}</p>
                            <p class="price">{{$rams[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>
        </div>
    </div>
    <div class="body-el  slider-page">
        <div class="category-label">
            <hr>
            <p>Корпуси</p>
            <hr>
        </div>
        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-16"></label>
                <label for="slide-dot-17"></label>
                <label for="slide-dot-18"></label>
            </div>

            <input id="slide-dot-16" type="radio" name="slides6" style="display: none" checked>
            <div class="slide slide-1">
                @for($i = 0; $i < 3; $i++)
                    <a href="{{ url('product', [$frames[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $frames[$i]->small_image)}}'>
                            <p class="product-name">{{$frames[$i]->name}}</p>
                            <p class="price">{{$frames[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>

            <input id="slide-dot-17" type="radio" name="slides6" style="display: none">
            <div class="slide slide-2">
                @for($i = 3; $i < 6; $i++)
                    <a href="{{ url('product', [$frames[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $frames[$i]->small_image)}}'>
                            <p class="product-name">{{$frames[$i]->name}}</p>
                            <p class="price">{{$frames[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>

            <input id="slide-dot-18" type="radio" name="slides6" style="display: none">
            <div class="slide slide-3">
                @for($i = 5; $i < 8; $i++)
                    <a href="{{ url('product', [$frames[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $frames[$i]->small_image)}}'>
                            <p class="product-name">{{$frames[$i]->name}}</p>
                            <p class="price">{{$frames[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>
        </div>
    </div>
    <div class="body-el  slider-page">
        <div class="category-label">
            <hr>
            <p>Блоки живлення</p>
            <hr>
        </div>
        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-19"></label>
                <label for="slide-dot-20"></label>
                <label for="slide-dot-21"></label>
            </div>

            <input id="slide-dot-19" type="radio" name="slides7" style="display: none" checked>
            <div class="slide slide-1">
                @for($i = 0; $i < 3; $i++)
                    <a href="{{ url('product', [$supplies[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $supplies[$i]->small_image)}}'>
                            <p class="product-name">{{$supplies[$i]->name}}</p>
                            <p class="price">{{$supplies[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>

            <input id="slide-dot-20" type="radio" name="slides7" style="display: none">
            <div class="slide slide-2">
                @for($i = 3; $i < 6; $i++)
                    <a href="{{ url('product', [$supplies[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $supplies[$i]->small_image)}}'>
                            <p class="product-name">{{$supplies[$i]->name}}</p>
                            <p class="price">{{$supplies[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>

            <input id="slide-dot-21" type="radio" name="slides7" style="display: none">
            <div class="slide slide-3">
                @for($i = 5; $i < 8; $i++)
                    <a href="{{ url('product', [$supplies[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $supplies[$i]->small_image)}}'>
                            <p class="product-name">{{$supplies[$i]->name}}</p>
                            <p class="price">{{$supplies[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>
        </div>
    </div>
    <div class="body-el  slider-page">
        <div class="category-label">
            <hr>
            <p>Жорсткі диски</p>
            <hr>
        </div>
        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-22"></label>
                <label for="slide-dot-23"></label>
                <label for="slide-dot-24"></label>
            </div>

            <input id="slide-dot-22" type="radio" name="slides8" style="display: none" checked>
            <div class="slide slide-1">
                @for($i = 0; $i < 3; $i++)
                    <a href="{{ url('product', [$hdds[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $hdds[$i]->small_image)}}'>
                            <p class="product-name">{{$hdds[$i]->name}}</p>
                            <p class="price">{{$hdds[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>

            <input id="slide-dot-23" type="radio" name="slides8" style="display: none">
            <div class="slide slide-2">
                @for($i = 3; $i < 6; $i++)
                    <a href="{{ url('product', [$hdds[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $hdds[$i]->small_image)}}'>
                            <p class="product-name">{{$hdds[$i]->name}}</p>
                            <p class="price">{{$hdds[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>

            <input id="slide-dot-24" type="radio" name="slides8" style="display: none">
            <div class="slide slide-3">
                @for($i = 4; $i < 7; $i++)
                    <a href="{{ url('product', [$hdds[$i]->id]) }}">
                        <div class="slide-img">
                            <img src = '{{asset('images/Container/' . $hdds[$i]->small_image)}}'>
                            <p class="product-name">{{$hdds[$i]->name}}</p>
                            <p class="price">{{$hdds[$i]->price}} ₴</p>
                        </div>
                    </a>
                @endfor
            </div>
        </div>
    </div>
@endsection
