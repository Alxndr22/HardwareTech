<!doctype html>
<html lang="en" style="box-sizing: border-box; padding: 0; margin: 0">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/catalog_list_and_menu.css') }}">
    <title>@yield('title')</title>
</head>
<div id="header">
    <div class="inner">
        <a href="/" class="logo">
            <img src="{{ asset('images/Logo_HT_1.svg') }}">
        </a>
        <div id="pics">
            <a href="" id="cart-icon">
                <img src="{{ asset('images/add-to-cart.svg') }}">
            </a>
            <a href="" id="user-icon">
                <img src="{{ asset('images/user.svg') }}">
            </a>
            <a href="#menu_list" id="menu">
                <img src="{{ asset('images/Menu.svg') }}">
            </a>
        </div>
    </div>
</div>
<div id="menu_list" class="catalog_list">
    <a href="#header" class="popup_area"></a>
    <div class="catalog_list_body">
        <div class="menu_list_content">
            <a href="#header"  class="catalog_list_close">
                <img src="{{ asset('images/letter-x.svg') }}">
            </a>
            <a id="menu_list_link" href="#catalog_list"><img src="{{ asset('images/dots-menu (empty).svg') }}"><p class="menu_item">Каталог</p></a>
            <a id="menu_list_link" href="/info"><img src="{{ asset('images/Phone(black).svg') }}"><p class="menu_item">Контакти</p></a>
            <a id="menu_list_link" href=""><img src="{{ asset('images/information.svg') }}"><p class="menu_item">Доставка/Оплата</p></a><br>
            <a id="menu_list_link" href=""><img src="{{ asset('images/user.svg') }}"><p class="menu_item">Профіль</p></a>
            <a id="menu_list_link" href=""><img src="{{ asset('images/add-to-cart.svg') }}"><p class="menu_item">Кошик</p></a>
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
        $("#menu").click(function ()  {
            $("body").addClass("lock");
        });
        $(".catalog_list_area").click(function ()  {
            if ( $("body").hasClass("lock")) {
                $("body").removeClass("lock");
            }
        });
    });</script>
<body>

@yield('main_content')

</body>
<div id="footer">
    <div class="inner">
        <div class="logo">
            <img src="{{ asset('images/Logo_HT_1.svg') }}">
        </div>
        <div id="contacts">
            <p>Каталог</p>
            <p>Доставка і оплата</p>
            <p>Контакти</p>
        </div>
        <div id="link">
            <div id="top-cont">
                <img src="{{ asset('images/Phone(white).svg') }}">
                <div>
                    <p>+38 066 451-51-93</p>
                    <p>+38 093 511-45-75</p>
                </div>

            </div>
            <div id="bottom-cont">
                <img src="{{ asset('images/mail.svg') }}">
                <p>hardwaretech@gmail.com</p>
            </div>
        </div>
    </div>
</div>
</html>
