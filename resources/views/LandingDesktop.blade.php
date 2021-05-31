@extends('PicturePage')
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/LandingDesktop.css') }}" >
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



    <?php $counter = 0 ?>
    <div id="third-page">
        <div class="category-label">
            <hr>
            <a href="{{ url('container', ['Відеокарти']) }}">
                <p>  Відеокарти  </p>
            </a>
            <hr>
        </div>

        <div id="third-page_inner">
            <img class="button_minus" id="button_minus_<?php echo $counter; ?>" src="{{ asset('images/left-arrow.svg') }}" alt="">
            <div id="third-page_middle">
                <div id="third-page_large">
                    <ul id="catalog_<?php echo $counter; ?>" class="catalog">
                        @foreach($gpus as $gpu)
                            <li class="list_item">
                                <div class="ph">
                                    <a href="{{ url('product', [$gpu->id]) }}">
                                        <div class="for_photo">
                                            <img src="{{asset('images/Container/' . $gpu->small_image)}}">
                                        </div>
                                        <div class="description">
                                            <p class="description_info">{{$gpu->name}}</p>
                                            <p class="description_price">{{$gpu->price}} ₴</p>
                                        </div>
                                    </a>
                                </div>
{{--                                <div class="button_basket">--}}
{{--                                    <a href="">--}}
{{--                                        <img src="{{ asset('images/shopping-basket.svg') }}">--}}
{{--                                        <p class="button_basket_text">В кошик</p>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <img class="button_plus" id="button_plus_<?php echo $counter; ?>" src="{{ asset('images/left-arrow.svg') }}" alt="">
        </div>
    </div>
    <?php $counter++ ?>
    <div id="third-page">
        <div class="category-label">
            <hr>
            <a href="{{ url('container', ['Материнські плати']) }}">
                <p>Материнські плати</p>
            </a>
            <hr>
        </div>
        <div id="third-page_inner">
            <img class="button_minus" id="button_minus_<?php echo $counter; ?>" src="{{ asset('images/left-arrow.svg') }}" alt="">
            <div id="third-page_middle">
                <div id="third-page_large">
                    <ul id="catalog_<?php echo $counter; ?>" class="catalog">
                        @foreach($mbs as $mb)
                            <li class="list_item">
                                <div class="ph">
                                    <a href="{{ url('product', [$mb->id]) }}">
                                        <div class="for_photo">
                                            <img src="{{asset('images/Container/' . $mb->small_image)}}">
                                        </div>
                                        <div class="description">
                                            <p class="description_info">{{$mb->name}}</p>
                                            <p class="description_price">{{$mb->price}} ₴</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <img class="button_plus" id="button_plus_<?php echo $counter; ?>" src="{{ asset('images/left-arrow.svg') }}" alt="">
        </div>
    </div>
    <?php $counter++ ?>
    <div id="third-page">
        <div class="category-label">
            <hr>
            <a href="{{ url('container', ['Процесори']) }}">
                <p>Процесори</p>
            </a>
            <hr>
        </div>
        <div id="third-page_inner">
            <img class="button_minus" id="button_minus_<?php echo $counter; ?>" src="{{ asset('images/left-arrow.svg') }}" alt="">
            <div id="third-page_middle">
                <div id="third-page_large">
                    <ul id="catalog_<?php echo $counter; ?>" class="catalog">
                        @foreach($cpus as $cpu)
                            <li class="list_item">
                                <div class="ph">
                                    <a href="{{ url('product', [$cpu->id]) }}">
                                        <div class="for_photo">
                                            <img src="{{asset('images/Container/' . $cpu->small_image)}}">
                                        </div>
                                        <div class="description">
                                            <p class="description_info">{{$cpu->name}}</p>
                                            <p class="description_price">{{$cpu->price}} ₴</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <img class="button_plus" id="button_plus_<?php echo $counter; ?>" src="{{ asset('images/left-arrow.svg') }}" alt="">
        </div>
    </div>
    <?php $counter++ ?>
    <div id="third-page">
        <div class="category-label">
            <hr>
            <a href="{{ url('container', ["Оперативна пам'ять"]) }}">
                <p>Оперативна пам'ять</p>
            </a>
            <hr>
        </div>
        <div id="third-page_inner">
            <img class="button_minus" id="button_minus_<?php echo $counter; ?>" src="{{ asset('images/left-arrow.svg') }}" alt="">
            <div id="third-page_middle">
                <div id="third-page_large">
                    <ul id="catalog_<?php echo $counter; ?>" class="catalog">
                        @foreach($rams as $ram)
                            <li class="list_item">
                                <div class="ph">
                                    <a href="{{ url('product', [$ram->id]) }}">
                                        <div class="for_photo">
                                            <img src="{{asset('images/Container/' . $ram->small_image)}}">
                                        </div>
                                        <div class="description">
                                            <p class="description_info">{{$ram->name}}</p>
                                            <p class="description_price">{{$ram->price}} ₴</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <img class="button_plus" id="button_plus_<?php echo $counter; ?>" src="{{ asset('images/left-arrow.svg') }}" alt="">
        </div>
    </div>
    <?php $counter++ ?>
    <div id="third-page">
        <div class="category-label">
            <hr>
            <a href="{{ url('container', ["Корпуси"]) }}">
                <p>Корпуси</p>
            </a>
            <hr>
        </div>
        <div id="third-page_inner">
            <img class="button_minus" id="button_minus_<?php echo $counter; ?>" src="{{ asset('images/left-arrow.svg') }}" alt="">
            <div id="third-page_middle">
                <div id="third-page_large">
                    <ul id="catalog_<?php echo $counter; ?>" class="catalog">
                        @foreach($frames as $frame)
                            <li class="list_item">
                                <div class="ph">
                                    <a href="{{ url('product', [$frame->id]) }}">
                                        <div class="for_photo">
                                            <img src="{{asset('images/Container/' . $frame->small_image)}}">
                                        </div>
                                        <div class="description">
                                            <p class="description_info">{{$frame->name}}</p>
                                            <p class="description_price">{{$frame->price}} ₴</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <img class="button_plus" id="button_plus_<?php echo $counter; ?>" src="{{ asset('images/left-arrow.svg') }}" alt="">
        </div>
    </div>
    <?php $counter++ ?>
    <div id="third-page">
        <div class="category-label">
            <hr>
            <a href="{{ url('container', ["Блоки живлення"]) }}">
                <p>Блоки живлення</p>
            </a>
            <hr>
        </div>
        <div id="third-page_inner">
            <img class="button_minus" id="button_minus_<?php echo $counter; ?>" src="{{ asset('images/left-arrow.svg') }}" alt="">
            <div id="third-page_middle">
                <div id="third-page_large">
                    <ul id="catalog_<?php echo $counter; ?>" class="catalog">
                        @foreach($supplies as $supplie)
                            <li class="list_item">
                                <div class="ph">
                                    <a href="{{ url('product', [$supplie->id]) }}">
                                        <div class="for_photo">
                                            <img src="{{asset('images/Container/' . $supplie->small_image)}}">
                                        </div>
                                        <div class="description">
                                            <p class="description_info">{{$supplie->name}}</p>
                                            <p class="description_price">{{$supplie->price}} ₴</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <img class="button_plus" id="button_plus_<?php echo $counter; ?>" src="{{ asset('images/left-arrow.svg') }}" alt="">
        </div>
    </div>
    <?php $counter++ ?>
    <div id="third-page">
        <div class="category-label">
            <hr>
            <a href="{{ url('container', ["Жорсткі диски"]) }}">
                <p>Жорсткі диски</p>
            </a>
            <hr>
        </div>
        <div id="third-page_inner">
            <img class="button_minus" id="button_minus_<?php echo $counter; ?>" src="{{ asset('images/left-arrow.svg') }}" alt="">
            <div id="third-page_middle">
                <div id="third-page_large">
                    <ul id="catalog_<?php echo $counter; ?>" class="catalog">
                        @foreach($hdds as $hdd)
                            <li class="list_item">
                                <div class="ph">
                                    <a href="{{ url('product', [$hdd->id]) }}">
                                        <div class="for_photo">
                                            <img src="{{asset('images/Container/' . $hdd->small_image)}}">
                                        </div>
                                        <div class="description">
                                            <p class="description_info">{{$hdd->name}}</p>
                                            <p class="description_price">{{$hdd->price}} ₴</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <img class="button_plus" id="button_plus_<?php echo $counter; ?>" src="{{ asset('images/left-arrow.svg') }}" alt="">
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $width = parseInt($(".list_item").css("width"));
            $("#button_minus_0").click(function () {
                if (parseInt($("#catalog_0").css("left")) < -100) {
                    $("#catalog_0").css("right", "-=" + $width);
                }
            });
            $("#button_plus_0").click(function ()  {
                if (parseInt($("#catalog_0").css("left")) > (-6.4 * $width)) {  /*-1900*/
                    $("#catalog_0").css("right", "+=" + $width);  /*300*/
                }
            });
            $("#button_minus_1").click(function () {
                if (parseInt($("#catalog_1").css("left")) < -100) {
                    $("#catalog_1").css("right", "-=" + $width);
                }
            });
            $("#button_plus_1").click(function ()  {
                if (parseInt($("#catalog_1").css("left")) > (-6.4 * $width)) {
                    $("#catalog_1").css("right", "+=" + $width);
                }
            });
            $("#button_minus_2").click(function () {
                if (parseInt($("#catalog_2").css("left")) < -100) {
                    $("#catalog_2").css("right", "-=" + $width);
                }
            });
            $("#button_plus_2").click(function ()  {
                if (parseInt($("#catalog_2").css("left")) > (-6.4 * $width)) {
                    $("#catalog_2").css("right", "+=" + $width);
                }
            });
            $("#button_minus_3").click(function () {
                if (parseInt($("#catalog_3").css("left")) < -100) {
                    $("#catalog_3").css("right", "-=" + $width);
                }
            });
            $("#button_plus_3").click(function ()  {
                if (parseInt($("#catalog_3").css("left")) > (-4 * $width)) {  /*7*/
                    $("#catalog_3").css("right", "+=" + $width);
                }
            });
            $("#button_minus_4").click(function () {
                if (parseInt($("#catalog_4").css("left")) < -100) {
                    $("#catalog_4").css("right", "-=" + $width);
                }
            });
            $("#button_plus_4").click(function ()  {
                if (parseInt($("#catalog_4").css("left")) > (-5 * $width)) {  /*8*/
                    $("#catalog_4").css("right", "+=" + $width);
                }
            });
            $("#button_minus_5").click(function () {
                if (parseInt($("#catalog_5").css("left")) < -100) {
                    $("#catalog_5").css("right", "-=" + $width);
                }
            });
            $("#button_plus_5").click(function ()  {
                if (parseInt($("#catalog_5").css("left")) > (-5 * $width)) {
                    $("#catalog_5").css("right", "+=" + $width);
                }
            });
            $("#button_minus_6").click(function () {
                if (parseInt($("#catalog_6").css("left")) < -100) {
                    $("#catalog_6").css("right", "-=" + $width);
                }
            });
            $("#button_plus_6").click(function ()  {
                if (parseInt($("#catalog_6").css("left")) > (-4 * $width)) {
                    $("#catalog_6").css("right", "+=" + $width);
                }
            });

        });</script>




{{--    <div class="body-el slider-page">--}}
{{--        <div class="category-label">--}}
{{--            <hr>--}}
{{--            <a href="{{ url('container', ['Відеокарти']) }}">--}}
{{--                <p>Відеокарти</p>--}}
{{--            </a>--}}
{{--            <hr>--}}
{{--        </div>--}}
{{--        <div class="slider-container">--}}
{{--            <img id="button_minus" style="width: 50px" src="{{ asset('images/left-arrow.svg') }}" alt="">--}}
{{--            <div class="menu">--}}
{{--                <label for="slide-dot-1"></label>--}}
{{--                <label for="slide-dot-2"></label>--}}
{{--                <label for="slide-dot-3"></label>--}}
{{--            </div>--}}

{{--            <input id="slide-dot-1" type="radio" name="slides" style="display: none" checked>--}}
{{--            <div class="slide slide-1">--}}
{{--                @for($i = 0; $i < 3; $i++)--}}
{{--                    <a href="{{ url('product', [$gpus[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $gpus[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$gpus[$i]->name}}</p>--}}
{{--                            <p class="price">{{$gpus[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}

{{--            <input id="slide-dot-2" type="radio" name="slides" style="display: none">--}}
{{--            <div class="slide slide-2">--}}
{{--                @for($i = 3; $i < 6; $i++)--}}
{{--                    <a href="{{ url('product', [$gpus[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $gpus[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$gpus[$i]->name}}</p>--}}
{{--                            <p class="price">{{$gpus[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}

{{--            <input id="slide-dot-3" type="radio" name="slides" style="display: none">--}}
{{--            <div class="slide slide-3">--}}
{{--                @for($i = 6; $i < 9; $i++)--}}
{{--                    <a href="{{ url('product', [$gpus[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $gpus[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$gpus[$i]->name}}</p>--}}
{{--                            <p class="price">{{$gpus[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        </div>--}}

{{--    <div class="body-el slider-page">--}}

{{--        <div class="category-label">--}}
{{--            <hr>--}}
{{--            <a href="{{ url('container', ['Материнські плати']) }}">--}}
{{--                <p>Материнські плати</p>--}}
{{--            </a>--}}
{{--            <hr>--}}
{{--        </div>--}}
{{--        <div class="slider-container">--}}
{{--            <div class="menu">--}}
{{--                <label for="slide-dot-7"></label>--}}
{{--                <label for="slide-dot-8"></label>--}}
{{--                <label for="slide-dot-9"></label>--}}
{{--            </div>--}}

{{--            <input id="slide-dot-7" type="radio" name="slides3" style="display: none" checked>--}}
{{--            <div class="slide slide-1">--}}
{{--                @for($i = 0; $i < 3; $i++)--}}
{{--                    <a href="{{ url('product', [$mbs[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $mbs[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$mbs[$i]->name}}</p>--}}
{{--                            <p class="price">{{$mbs[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}

{{--            <input id="slide-dot-8" type="radio" name="slides3" style="display: none">--}}
{{--            <div class="slide slide-2">--}}
{{--                @for($i = 3; $i < 6; $i++)--}}
{{--                    <a href="{{ url('product', [$mbs[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $mbs[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$mbs[$i]->name}}</p>--}}
{{--                            <p class="price">{{$mbs[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}

{{--            <input id="slide-dot-9" type="radio" name="slides3" style="display: none">--}}
{{--            <div class="slide slide-3">--}}
{{--                @for($i = 6; $i < 9; $i++)--}}
{{--                    <a href="{{ url('product', [$mbs[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $mbs[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$mbs[$i]->name}}</p>--}}
{{--                            <p class="price">{{$mbs[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--    <div class="body-el  slider-page">--}}
{{--        <div class="category-label">--}}
{{--            <hr>--}}
{{--            <a href="{{ url('container', ['Процесори']) }}">--}}
{{--                <p>Процесори</p>--}}
{{--            </a>--}}
{{--            <hr>--}}
{{--        </div>--}}
{{--        <div class="slider-container">--}}
{{--            <div class="menu">--}}
{{--                <label for="slide-dot-10"></label>--}}
{{--                <label for="slide-dot-11"></label>--}}
{{--                <label for="slide-dot-12"></label>--}}
{{--            </div>--}}

{{--            <input id="slide-dot-10" type="radio" name="slides4" style="display: none" checked>--}}
{{--            <div class="slide slide-1">--}}
{{--                @for($i = 0; $i < 3; $i++)--}}
{{--                    <a href="{{ url('product', [$cpus[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $cpus[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$cpus[$i]->name}}</p>--}}
{{--                            <p class="price">{{$cpus[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}

{{--            <input id="slide-dot-11" type="radio" name="slides4" style="display: none">--}}
{{--            <div class="slide slide-2">--}}
{{--                @for($i = 3; $i < 6; $i++)--}}
{{--                    <a href="{{ url('product', [$cpus[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $cpus[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$cpus[$i]->name}}</p>--}}
{{--                            <p class="price">{{$cpus[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}

{{--            <input id="slide-dot-12" type="radio" name="slides4" style="display: none">--}}
{{--            <div class="slide slide-3">--}}
{{--                @for($i = 6; $i < 9; $i++)--}}
{{--                    <a href="{{ url('product', [$cpus[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $cpus[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$cpus[$i]->name}}</p>--}}
{{--                            <p class="price">{{$cpus[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="body-el  slider-page">--}}
{{--        <div class="category-label">--}}
{{--            <hr>--}}
{{--            <p>Оперативна пам'ять</p>--}}
{{--            <hr>--}}
{{--        </div>--}}
{{--        <div class="slider-container">--}}
{{--            <div class="menu">--}}
{{--                <label for="slide-dot-13"></label>--}}
{{--                <label for="slide-dot-14"></label>--}}
{{--                <label for="slide-dot-15"></label>--}}
{{--            </div>--}}

{{--            <input id="slide-dot-13" type="radio" name="slides5" style="display: none" checked>--}}
{{--            <div class="slide slide-1">--}}
{{--                @for($i = 0; $i < 3; $i++)--}}
{{--                    <a href="{{ url('product', [$rams[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $rams[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$rams[$i]->name}}</p>--}}
{{--                            <p class="price">{{$rams[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}

{{--            <input id="slide-dot-14" type="radio" name="slides5" style="display: none">--}}
{{--            <div class="slide slide-2">--}}
{{--                @for($i = 3; $i < 6; $i++)--}}
{{--                    <a href="{{ url('product', [$rams[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $rams[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$rams[$i]->name}}</p>--}}
{{--                            <p class="price">{{$rams[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}

{{--            <input id="slide-dot-15" type="radio" name="slides5" style="display: none">--}}
{{--            <div class="slide slide-3">--}}
{{--                @for($i = 4; $i < 7; $i++)--}}
{{--                    <a href="{{ url('product', [$rams[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $rams[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$rams[$i]->name}}</p>--}}
{{--                            <p class="price">{{$rams[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="body-el  slider-page">--}}
{{--        <div class="category-label">--}}
{{--            <hr>--}}
{{--            <p>Корпуси</p>--}}
{{--            <hr>--}}
{{--        </div>--}}
{{--        <div class="slider-container">--}}
{{--            <div class="menu">--}}
{{--                <label for="slide-dot-16"></label>--}}
{{--                <label for="slide-dot-17"></label>--}}
{{--                <label for="slide-dot-18"></label>--}}
{{--            </div>--}}

{{--            <input id="slide-dot-16" type="radio" name="slides6" style="display: none" checked>--}}
{{--            <div class="slide slide-1">--}}
{{--                @for($i = 0; $i < 3; $i++)--}}
{{--                    <a href="{{ url('product', [$frames[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $frames[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$frames[$i]->name}}</p>--}}
{{--                            <p class="price">{{$frames[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}

{{--            <input id="slide-dot-17" type="radio" name="slides6" style="display: none">--}}
{{--            <div class="slide slide-2">--}}
{{--                @for($i = 3; $i < 6; $i++)--}}
{{--                    <a href="{{ url('product', [$frames[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $frames[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$frames[$i]->name}}</p>--}}
{{--                            <p class="price">{{$frames[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}

{{--            <input id="slide-dot-18" type="radio" name="slides6" style="display: none">--}}
{{--            <div class="slide slide-3">--}}
{{--                @for($i = 5; $i < 8; $i++)--}}
{{--                    <a href="{{ url('product', [$frames[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $frames[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$frames[$i]->name}}</p>--}}
{{--                            <p class="price">{{$frames[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="body-el  slider-page">--}}
{{--        <div class="category-label">--}}
{{--            <hr>--}}
{{--            <p>Блоки живлення</p>--}}
{{--            <hr>--}}
{{--        </div>--}}
{{--        <div class="slider-container">--}}
{{--            <div class="menu">--}}
{{--                <label for="slide-dot-19"></label>--}}
{{--                <label for="slide-dot-20"></label>--}}
{{--                <label for="slide-dot-21"></label>--}}
{{--            </div>--}}

{{--            <input id="slide-dot-19" type="radio" name="slides7" style="display: none" checked>--}}
{{--            <div class="slide slide-1">--}}
{{--                @for($i = 0; $i < 3; $i++)--}}
{{--                    <a href="{{ url('product', [$supplies[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $supplies[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$supplies[$i]->name}}</p>--}}
{{--                            <p class="price">{{$supplies[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}

{{--            <input id="slide-dot-20" type="radio" name="slides7" style="display: none">--}}
{{--            <div class="slide slide-2">--}}
{{--                @for($i = 3; $i < 6; $i++)--}}
{{--                    <a href="{{ url('product', [$supplies[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $supplies[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$supplies[$i]->name}}</p>--}}
{{--                            <p class="price">{{$supplies[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}

{{--            <input id="slide-dot-21" type="radio" name="slides7" style="display: none">--}}
{{--            <div class="slide slide-3">--}}
{{--                @for($i = 5; $i < 8; $i++)--}}
{{--                    <a href="{{ url('product', [$supplies[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $supplies[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$supplies[$i]->name}}</p>--}}
{{--                            <p class="price">{{$supplies[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="body-el  slider-page">--}}
{{--        <div class="category-label">--}}
{{--            <hr>--}}
{{--            <p>Жорсткі диски</p>--}}
{{--            <hr>--}}
{{--        </div>--}}
{{--        <div class="slider-container">--}}
{{--            <div class="menu">--}}
{{--                <label for="slide-dot-22"></label>--}}
{{--                <label for="slide-dot-23"></label>--}}
{{--                <label for="slide-dot-24"></label>--}}
{{--            </div>--}}

{{--            <input id="slide-dot-22" type="radio" name="slides8" style="display: none" checked>--}}
{{--            <div class="slide slide-1">--}}
{{--                @for($i = 0; $i < 3; $i++)--}}
{{--                    <a href="{{ url('product', [$hdds[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $hdds[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$hdds[$i]->name}}</p>--}}
{{--                            <p class="price">{{$hdds[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}

{{--            <input id="slide-dot-23" type="radio" name="slides8" style="display: none">--}}
{{--            <div class="slide slide-2">--}}
{{--                @for($i = 3; $i < 6; $i++)--}}
{{--                    <a href="{{ url('product', [$hdds[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $hdds[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$hdds[$i]->name}}</p>--}}
{{--                            <p class="price">{{$hdds[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}

{{--            <input id="slide-dot-24" type="radio" name="slides8" style="display: none">--}}
{{--            <div class="slide slide-3">--}}
{{--                @for($i = 4; $i < 7; $i++)--}}
{{--                    <a href="{{ url('product', [$hdds[$i]->id]) }}">--}}
{{--                        <div class="slide-img">--}}
{{--                            <img src = '{{asset('images/Container/' . $hdds[$i]->small_image)}}'>--}}
{{--                            <p class="product-name">{{$hdds[$i]->name}}</p>--}}
{{--                            <p class="price">{{$hdds[$i]->price}} ₴</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endfor--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
