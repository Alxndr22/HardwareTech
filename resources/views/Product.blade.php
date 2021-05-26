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
            <a href="#catalog_list" class="catalog2">
                <img src="{{ asset('images/dots-menu (black).svg') }}">
                <p id="catalog2_text">Каталог</p>
            </a>
            <div class="search2">
                <input type="text" placeholder="  Пошук..." >
                <button type="submit">
                    <div id="search-icon">
                        <img src="{{ asset('images/search.svg') }}">
                    </div>
                </button>
            </div>
        </div>
    </div>


    <div id="second-page">
        <p id="second-page_title">{{ $products[0]->name }}</p>
        <div id="second-page_inner">
            <div style="display: flex; width: 90vw">
                <div id="second-page_left">
                    <a class="pp_img" href="#popup1">
                        <img src="{{ asset('images/product/MSI GeForce RTX3060 12Gb VENTUS 3X OC.jpg') }}" alt="MSI GeForce RTX3060 12Gb VENTUS 3X OC 1">
                    </a>
                    <a class="pp_img" href="#popup2">
                        <img src="{{ asset('images/product/MSI GeForce RTX3060 12Gb VENTUS 3X OC_2.jpg') }}" alt="MSI GeForce RTX3060 12Gb VENTUS 3X OC 2">
                    </a>
                    <a class="pp_img" href="#popup3">
                        <img src="{{ asset('images/product/MSI GeForce RTX3060 12Gb VENTUS 3X OC_3.jpg') }}" alt="MSI GeForce RTX3060 12Gb VENTUS 3X OC 3">
                    </a>
                </div>
                <div id="second-page_centre">
                    <a class="pp_img" href="#popup0">
                        <img src="{{ asset('images/Container/' . $products[0]->image) }}" alt='{{ $products[0]->name }}'>
                    </a>
                </div>
            </div>
            <div id="second-page_right">
                <p id="second-page_price">{{ $products[0]->price }} ₴</p>
                <div id="second-page_amount_comparison_basket">
                    <div id="second-page_amount_comparison">
                        <div id="second-page_amount">
                            <img id="button_minus" src="{{ asset('images/left-arrow.svg') }}" alt="">
                            <input type="number" readonly step="1" min="1" max="10" id="second-page_amount_digit" name="quantity" value="1" title="Qty">
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
                    <div class="button_basket">
                        <a href="">
                            <img src="{{ asset('images/shopping-basket.svg') }}">
                            <p class="button_basket_text">В кошик</p>
                        </a>
                    </div>
                </div>
            </div>


            <div id="popup0" class="popup">
                <a href="#header" class="popup_area"></a>
                <div class="popup_body">
                    <div class="popup_content" id="popup_content_with_img">
                        <a href="#header"  class="popup_close">
                            <img src="{{ asset('images/letter-x.svg') }}">
                        </a>
                        <img style="width: 100%" src="{{ asset('images/Container/' . $products[0]->image) }}" alt='{{ $products[0]->name }}'>
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
                        <img style="width: 100%" src="{{ asset('images/product/MSI GeForce RTX3060 12Gb VENTUS 3X OC_1.png') }}" alt="MSI GeForce RTX3060 12Gb VENTUS 3X OC_1">
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
                        <img style="width: 100%" src="{{ asset('images/product/MSI GeForce RTX3060 12Gb VENTUS 3X OC_2.jpg') }}" alt="MSI GeForce RTX3060 12Gb VENTUS 3X OC_2">
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
                        <img style="width: 100%" src="{{ asset('images/product/MSI GeForce RTX3060 12Gb VENTUS 3X OC_3.jpg') }}" alt="MSI GeForce RTX3060 12Gb VENTUS 3X OC_3">
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
                    <p id="perfomance_text">Тип</p>
                    <p id="perfomance_text">Виробник</p>
                    <p id="perfomance_text">Сімейство GPU</p>
                    <p id="perfomance_text">Графічний чіп</p>
                    <p id="perfomance_text">Інтерфейс підключення до материнської плати</p><br><br>
                    <p id="perfomance_text">Обсяг відеопам’яті (Мб)</p>
                    <p id="perfomance_text">Тип пам’яті</p>
                    <p id="perfomance_text">Розрядність шини пам’яті, біт</p><br><br>
                    <p id="perfomance_text">Гарантія</p>
                </div>
                <div id="performance_column_right">
                    <p id="perfomance_text">Відеокарта</p>
                    <p id="perfomance_text">MSI</p>
                    <p id="perfomance_text">Nvidia</p>
                    <p id="perfomance_text">GeForce RTX 3060</p>
                    <p id="perfomance_text">PCI Express 4.0 (x16)</p><br><br>
                    <p id="perfomance_text">12288</p>
                    <p id="perfomance_text">GDDR6</p>
                    <p id="perfomance_text">192</p><br><br>
                    <p id="perfomance_text">36 місяців</p>
                </div>
            </div>
        </div>
        <div id="third-page_right">
            <p id="third-page_title">Відгуки [21]</p>       {{--  Number from SQL  --}}
            <hr style="width: 300px; margin-bottom: 33px">
            <div class="review-row">
                10
                <div class="review" id="review-top"></div>
            </div>
            <div class="review-row" style="width: 170px">
                5
                <div class="review"></div>
            </div>
            <div class="review-row" style="width: 60px">
                2
                <div class="review"></div>
            </div>
            <div class="review-row" style="width: 40px">
                1
                <div class="review"></div>
            </div>
            <div class="review-row" style="width: 70px">
                3
                <div class="review"></div>
            </div>
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

                        <p class="comment_header">
                            Дмитро
                        </p>
                        <p class="comment_body">
                            Чудова відеокарта. Вже майже відмайнив її вартість.
                        </p>
                        <hr>
                        <p class="comment_header">
                            Максим Бородько
                        </p>
                        <p class="comment_body">
                            Підскажіть, будь-ласка, кількість Hdmi виходів.
                        </p>
                        <hr>
                        <form id="your_comment_form" action="/data" method="post">
                            @csrf
                            <label for="your_comment_input" id="your_comment_label" >Ім'я</label>
                            <input id="your_comment_input" type="text" name="name" value="">
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
        <hr style="width: 100%">
        <p id="fourth-page_text">Схожі товари</p>
        <hr style="width: 100%">
    </div>
@endsection
