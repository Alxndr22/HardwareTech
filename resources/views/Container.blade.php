@extends('index')

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Container.css') }}" >
    <script
        src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
        crossorigin="anonymous"></script>
</head>
@section('title')
{{ $products[0]->category }}
@endsection

@section('main_content')
    <div class="body-el" id="first-page">
        <div class="banner">
            <img src="{{asset('images/videocards/Banner(vidocard).jpg')}}" alt="1">
            <div class="text_before_banner">
                <p class="slogan" id="top-slogan">{{ $products[0]->category }}</p>
                <p class="slogan" id="bottom-slogan">{{ $products[0]->slogan }}</p>
            </div>
        </div>
    </div>

    <div class="body-el" id="second-page">
        <div class="catalog_and_search">
            <div class="catalog2">
                <img src="{{ asset('images/dots-menu (black).svg') }}">
                <p id="catalog2_text">Каталог</p>
            </div>
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

    <div class="filter_mobile">
        <div class="filter_mobile_inner">

            <div id="popup" class="popup">
                <a href="#header" class="popup_area"></a>
                <div class="popup_body">
                    <div class="popup_content">
                        <a href="#header" id="close_btn" class="popup_close">
                            <img src="{{ asset('images/letter-x.svg') }}">
                        </a>


                        <div class="third-left_price">
                            Ціна
                            <div class="third-left_price_div1">
                                <div class="custom_input">
                                    від
                                    <input type="text" name="from" value="0">
                                </div>
                                <div class="custom_input">
                                    до
                                    <input type="text" name="to" value="132499">
                                </div>
                            </div>

                        </div>

                        <hr>
                        <p class="before_checkboxes">Виробник</p>
                        <input class="checkboxes" type="checkbox" id="00">
                        <label id="fira14" for="00">Asus</label><br>
                        <input class="checkboxes" type="checkbox" id="01">
                        <label id="fira14" for="01">Dell</label><br>
                        <input class="checkboxes" type="checkbox" id="02">
                        <label id="fira14" for="02">Gigabyte</label><br>
                        <hr>
                        <p class="before_checkboxes">Сімейство GPU</p>
                        <input class="checkboxes" type="checkbox" id="03">
                        <label id="fira14" for="03">Nvidia</label><br>
                        <input class="checkboxes" type="checkbox" id="04">
                        <label id="fira14" for="04">AMD (ATI)</label><br>

                    </div>
                </div>
            </div>
            <div id="open_btn">
                <a href="#popup" style="display: flex">
                    <img src="{{ asset('images/filter.svg') }}">
                    <p id="catalog2_text">Фільтр</p>
                </a>
            </div>

            <script>
                $(document).ready(function () {
                    $("#open_btn").click(function ()  {
                        if ( $("body").hasClass("lock")) {
                            $("body").removeClass("lock");
                        } else {
                            $("body").addClass("lock");
                        }
                    });
                    $("#close_btn").click(function ()  {
                        if ( $("body").hasClass("lock")) {
                            $("body").removeClass("lock");
                        }
                    });
                    $(".popup_area").click(function ()  {
                        if ( $("body").hasClass("lock")) {
                            $("body").removeClass("lock");
                        }
                    });
                });</script>


            <div id="vertical_separator"></div>
            <div class="third-left_sort">
                Сортування:
                <label class="custom_select">
                    <select name="sel1">
                        <option value="1">за замовч.</option>
                        <option value="2">ціна за зростанням</option>
                        <option value="3">ціна за спаданням</option>
                    </select>
                </label>
            </div>
        </div>
    </div>

    <div class="body-el" id="third-page">
        <div class="third-left">
            <div class="third-left_sort">
                Сортування
                <label class="custom_select">
                    <select name="sel1">
                        <option value="1">за замовч.</option>
                        <option value="2">ціна за зростанням</option>
                        <option value="3">ціна за спаданням</option>
                    </select>
                </label>
            </div>
            <hr>
            <div class="third-left_price">
                Ціна
                <div class="third-left_price_div1">
                    <div class="custom_input">
                        від
                        <input type="text" name="from" value="0">
                    </div>
                    <div class="custom_input">
                        до
                        <input type="text" name="to" value="132499">
                    </div>
                </div>

            </div>

            <hr>
            <p class="before_checkboxes">Виробник</p>
            <input class="checkboxes" type="checkbox" id="0">
            <label id="fira14" for="0">Asus</label><br>
            <input class="checkboxes" type="checkbox" id="1">
            <label id="fira14" for="1">Dell</label><br>
            <input class="checkboxes" type="checkbox" id="2">
            <label id="fira14" for="2">Gigabyte</label><br>
            <hr>
            <p class="before_checkboxes">Сімейство GPU</p>
            <input class="checkboxes" type="checkbox" id="3">
            <label id="fira14" for="3">Nvidia</label><br>
            <input class="checkboxes" type="checkbox" id="4">
            <label id="fira14" for="4">AMD (ATI)</label><br>
        </div>

        <div class="third-right">
            <ul class="catalog">
                @foreach($products as $product)
                <li class="list_item">
                    <div class="ph">
                        <a href="{{ url('product', [$product->id]) }}">
                            <div class="for_photo">
                                <img src="{{ asset('images/Container/' . $product->image) }}" alt="{{ $product->name }}">
                            </div>
                            <div class="description">
                                <p class="description_info">{{ $product->name }}</p>
                                <p class="description_price">{{ $product->price }} ₴</p>
                            </div>
                        </a>
                    </div>
                    <div class="button_basket">
                        <a href="">
                            <img src="{{ asset('images/shopping-basket.svg') }}">
                            <p class="button_basket_text">В кошик</p>
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

