@extends('index')

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Product.css') }}" >
    <script
        src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
        crossorigin="anonymous"></script>
</head>
@section('title')
    {{ $products[0]->name }}
@endsection

@section('main_content')
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
    <div id="first-page">
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


    <div id="second-page">
        <p id="second-page_title">{{ $products[0]->name }}</p>
        <div id="second-page_inner">
            <div style="display: flex; width: 90vw">
                <div id="second-page_left">
                    <a class="pp_img" href="#popup1">
                        @if(!empty($products[0]->image))
                            <img src="{{ asset('images/Container/' . $products[0]->image) }}" alt="{{ $products[0]->name }}">
                        @endif
                    </a>
                    <a class="pp_img" href="#popup2">
                        @if(!empty($products[1]->image))
                            <img src="{{ asset('images/Container/' . $products[1]->image) }}" alt="{{ $products[0]->name }}">
                        @endif
                    </a>
                    <a class="pp_img" href="#popup3">
                        @if(!empty($products[2]->image))
                            <img src="{{ asset('images/Container/' . $products[2]->image) }}" alt="{{ $products[0]->name }}">
                        @endif
                    </a>
                </div>
                <div id="second-page_centre">
                    <a class="pp_img" href="#popup0">
                        <img src="{{ asset('images/Container/' . $products[0]->main_image) }}" alt='{{ $products[0]->name }}'>
                    </a>
                </div>
            </div>
            <div id="second-page_right">
                <p id="second-page_price">{{ $products[0]->price }} ₴</p>
                <form id="second-page_amount_comparison_basket" method="get" action="{{ url('add-to-cart/'.$products[0]->id) }}">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                    <div id="second-page_amount_comparison">
                        <div id="second-page_amount">
                            <img id="button_minus" src="{{ asset('images/left-arrow.svg') }}" alt="">
                            <input type="number" readonly step="1" min="1" max="{{ $products[0]->quantity }}" id="second-page_amount_digit" name="quantity" value="1" title="Qty">
                            <img id="button_plus" style="transform: rotate(180deg)" src="{{ asset('images/left-arrow.svg') }}" alt="{{ $products[0]->name }}">
                        </div>
                        <script>
                            var numCount = document.getElementById('second-page_amount_digit');
                            var plusBtn = document.getElementById('button_plus');
                            var minusBtn = document.getElementById('button_minus');
                            plusBtn.onclick = function() {
                                var qty = parseInt(numCount.value);
                                var max = parseInt(numCount.max)
                                if (qty < max)
                                    qty = qty + 1;
                                numCount.value = qty;
                            }
                            minusBtn.onclick = function() {
                                var qty = parseInt(numCount.value);
                                if (qty > 1)
                                    qty = qty - 1;
                                numCount.value = qty;
                            }
                        </script>
                        <div id="second-page_amount">
                            <img src="{{ asset('images/comparison.svg') }}" alt="">
                        </div>
                    </div>
                        <input class="button_basket" type="submit" value="В кошик" style="background-image: url({{ asset('images/shopping-basket.svg') }});">
{{--                        <label for="sub">--}}
{{--                            <img src="{{ asset('images/shopping-basket.svg') }}">--}}
{{--                            <p class="button_basket_text">В кошик</p>--}}
{{--                        </label>--}}
                </form>
            </div>


            <div id="popup0" class="popup">
                <a href="#header" class="popup_area"></a>
                <div class="popup_body">
                    <div class="popup_content" id="popup_content_with_img">
                        <a href="#header"  class="popup_close">
                            <img src="{{ asset('images/letter-x.svg') }}">
                        </a>
                        <img style="width: 100%" src="{{ asset('images/Container/' . $products[0]->main_image) }}" alt='{{ $products[0]->name }}'>
                    </div>
                </div>
            </div>
            <div id="popup1" class="popup">
                <a href="#header" class="popup_area"></a>
                <div class="popup_body">
                    <div class="popup_content" id="popup_content_with_img">
                        <a href="#header"  class="popup_close">
                            <img src="{{ asset('images/letter-x.svg') }}">
                        </a>
                        @if(!empty($products[0]->image))
                            <img style="width: 100%" src="{{ asset('images/Container/' . $products[0]->image) }}" alt="{{ $products[0]->name }}">
                        @endif
                    </div>
                </div>
            </div>
            <div id="popup2" class="popup">
                <a href="#header" class="popup_area"></a>
                <div class="popup_body">
                    <div class="popup_content" id="popup_content_with_img">
                        <a href="#header"  class="popup_close">
                            <img src="{{ asset('images/letter-x.svg') }}">
                        </a>
                        @if(!empty($products[1]->image))
                            <img style="width: 100%" src="{{ asset('images/Container/' . $products[1]->image) }}" alt="{{ $products[0]->name }}">
                        @endif
                    </div>
                </div>
            </div>
            <div id="popup3" class="popup">
                <a href="#header" class="popup_area"></a>
                <div class="popup_body">
                    <div class="popup_content" id="popup_content_with_img">
                        <a href="#header"  class="popup_close">
                            <img src="{{ asset('images/letter-x.svg') }}">
                        </a>
                        @if(!empty($products[2]->image))
                            <img style="width: 100%" src="{{ asset('images/Container/' . $products[2]->image) }}" alt="{{ $products[0]->name }}">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="third-page">
        <div id="third-page_left">
            <p id="third-page_title">Характеристики  </p>
            <hr>
            <div id="perfomance">
                <div id="performance_column_left">
                    @foreach ($tags as $tag)
                        <p id="perfomance_text">{{ $tag->tag_name }}</p>
                    @endforeach
                </div>
                <div id="performance_column_right">
                    @foreach ($tags as $tag)
                        <p id="perfomance_text">{{ $tag->tag }}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div id="third-page_right">
            <p id="third-page_title">Відгуки [21]</p>       {{--  Number from SQL  --}}
            <hr style="width: 300px; margin-bottom: 33px">
            <?php $counter = 0; ?>
{{--            <div class="review-row" style="width: 60px" id="count<?php echo $counter;?>">--}}
{{--                <input type="number" readonly value="@if(!empty($groupedScores[0]->sumScore)){{$groupedScores[0]->sumScore}}@else{{0}}@endif" id="score<?php echo $counter;?>">--}}
{{--                <div class="review" id="review-top"></div>--}}
{{--            </div>--}}


            @if(!empty($groupedScores))
                <div class="review-row" style="width: 60px" id="count0">
                    <input type="number" readonly value="@if(!empty($groupedScores[$counter]) and $groupedScores[$counter]->maxScore == 5){{$groupedScores[$counter++]->sumScore}}@else{{0}}@endif" id="score0">
                    <div class="review" id="review-top"></div>
                </div>
                <div class="review-row" style="width: 60px" id="count1">
                    <input type="number" readonly value="@if(!empty($groupedScores[$counter]) and $groupedScores[$counter]->maxScore == 4){{$groupedScores[$counter++]->sumScore}}@else{{0}}@endif" id="score1">
                    <div class="review"></div>
                </div>
                <div class="review-row" style="width: 60px" id="count2">
                    <input type="number" readonly value="@if(!empty($groupedScores[$counter]) and $groupedScores[$counter]->maxScore == 3){{$groupedScores[$counter++]->sumScore}}@else{{0}}@endif" id="score2">
                    <div class="review"></div>
                </div>
                <div class="review-row" style="width: 60px" id="count3">
                    <input type="number" readonly value="@if(!empty($groupedScores[$counter]) and $groupedScores[$counter]->maxScore == 2){{$groupedScores[$counter++]->sumScore}}@else{{0}}@endif" id="score3">
                    <div class="review"></div>
                </div>
                <div class="review-row" style="width: 60px" id="count4">
                    <input type="number" readonly value="@if(!empty($groupedScores[$counter]) and $groupedScores[$counter]->maxScore == 1){{$groupedScores[$counter++]->sumScore}}@else{{0}}@endif" id="score4">
                    <div class="review"></div>
                </div>
            @else
                @for($i = 0; $i < 5; $i++)
                    <div class="review-row" style="width: 60px" id="count<?php echo $counter;?>">
                        <input type="number" readonly value="0" id="score<?php echo $counter;?>">
                        <div class="review"></div>
                    </div>
                    <?php $counter++; ?>
                @endfor
            @endif

{{--            @if(!empty($groupedScores[$i]->sumScore)){{$groupedScores[$i]->sumScore - $until}}@else{{0}}@endif--}}
            <script>
                $(document).ready(function() {
                    <?php $maxP = 5;
                    for ($i = 0; $i < $maxP; $i++) {?>
                    var score<?php echo $i;?> = document.getElementById('score<?php echo $i;?>');
                    var pillar<?php echo $i;?> = document.getElementById('count<?php echo $i;?>');
                    var sc<?php echo $i;?> = parseInt(score<?php echo $i;?>.value);
                    var max = 50 + sc<?php echo $i;?> * 20;
                    if(max <= 300)
                        pillar<?php echo $i;?>.style.width = (max).toString();
                    else
                        pillar<?php echo $i;?>.style.width = (300).toString();
                    <?php }?>
                })
            </script>
            <div id="button-review">
                <a href="#popup">
                    <p id="button-review_text">Переглянути</p>
                </a>
            </div>

            <div id="popup" class="popup">
                <a href="#header" class="popup_area"></a>
                <div class="popup_body">
                    <div class="popup_content">
                        <a href="#header" class="popup_close">
                            <img src="{{ asset('images/letter-x.svg') }}">
                        </a>
                        @foreach($comments as $comment)
                            <p class="comment_header">
                                {{$comment->name}}
                            </p>
                            <p>
                                {{$comment->score}}
                            </p>
                            <p class="comment_body">
                                {{$comment->text}}
                            </p>
                            <hr>
                        @endforeach
                        <form id="your_comment_form" action="{{ url('product', [$products[0]->id, 'save-comment']) }}" method="post">
                            @csrf
                            <label for="your_comment_input" id="your_comment_label" >Ім'я</label>
                            <input id="your_comment_input" type="text" name="name" value="@if(auth()->user()){{auth()->user()->name}}@endif">
                            <div class="rating-area">
                                <input type="radio" id="star-5" name="rating" value="5">
                                <label for="star-5" title="Оценка «5»"></label>
                                <input type="radio" id="star-4" name="rating" value="4">
                                <label for="star-4" title="Оценка «4»"></label>
                                <input type="radio" id="star-3" name="rating" value="3">
                                <label for="star-3" title="Оценка «3»"></label>
                                <input type="radio" id="star-2" name="rating" value="2">
                                <label for="star-2" title="Оценка «2»"></label>
                                <input type="radio" id="star-1" name="rating" value="1">
                                <label for="star-1" title="Оценка «1»"></label>
                            </div>
                            <label for="your_comment_textarea" id="your_comment_label" >Відгук</label>
                            <textarea id="your_comment_textarea" name="message"  cols="30" rows="10"></textarea>
                            <input id="your_comment_button" type="submit" name="doGO" value="Відправити">
                        </form>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function () {

                    $("#button-review").click(function ()  {
                        if ( $("body").hasClass("lock")) {
                            $("body").removeClass("lock");
                        } else {
                            $("body").addClass("lock");
                        }
                    });
                    $(".pp_img").click(function ()  {
                        if ( $("body").hasClass("lock")) {
                            $("body").removeClass("lock");
                        } else {
                            $("body").addClass("lock");
                        }
                    });
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

        </div>
    </div>

    <div id="fourth-page">
        <div class="category-label">
            <hr style="width: 100%">
            <p id="fourth-page_text">Схожі товари</p>
            <hr style="width: 100%">
        </div>
        <div id="fourth-page_inner">
            <img class="button_minus" id="button_minus0" src="{{ asset('images/left-arrow.svg') }}" alt="">
            <div id="fourth-page_middle">
                <div id="fourth-page_large">
                    <ul id="catalog0" class="catalog">
                        @foreach($likeProduct as $prod)
                            <li class="list_item">
                                <div class="ph">
                                    <a href="{{ url('product', [$prod->id]) }}">
                                        <div class="for_photo">
                                            <img src="{{asset('images/Container/' . $prod->small_image)}}">
                                        </div>
                                        <div class="description">
                                            <p class="description_info">{{$prod->name}}</p>
                                            <p class="description_price">{{$prod->price}} ₴</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="button_basket_slider">
                                    <a href="">
                                        <img src="{{ asset('images/shopping-basket.svg') }}">
                                        <p class="button_basket_slider_text">В кошик</p>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <img class="button_plus" id="button_plus0" src="{{ asset('images/left-arrow.svg') }}" alt="">
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $width = parseInt($(".list_item").css("width"));
            $("#button_minus0").click(function () {
                if (parseInt($("#catalog0").css("left")) < -100) {
                    $("#catalog0").css("right", "-=" + $width);
                }
            });
            $("#button_plus0").click(function ()  {
                if (parseInt($("#catalog0").css("left")) > (-4 * $width)) {
                    $("#catalog0").css("right", "+=" + $width);
                }
            });

        });</script>
@endsection
