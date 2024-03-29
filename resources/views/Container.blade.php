@extends('index')

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Container.css') }}" >
    <script
        src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
        crossorigin="anonymous"></script>
</head>
@section('title')
{{ $category }}
@endsection

@section('main_content')
{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            $('#submit_btn').click(function() {--}}
{{--                alert('clicked');--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
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
    <div class="body-el" id="first-page">
        <div class="banner">
            @if(!empty($products[0]->cat_image))
                <img src="{{asset('images/banners/' . $products[0]->cat_image)}}" alt="1">
            @else
                <img src="{{asset('images/banners/Banner(search).jpg')}}" alt="1">
            @endif
            <div class="text_before_banner">
                <p class="slogan" id="top-slogan">{{ $category }}</p>
                @if(!empty($slogan))
                    <p class="slogan" id="bottom-slogan">{{ $slogan }}</p>
                @elseif(!empty($products[0]->slogan))
                    <p class="slogan" id="bottom-slogan">{{ $products[0]->slogan }}</p>
                @endif
            </div>
        </div>
    </div>

    <div class="body-el" id="second-page">
        <div class="catalog_and_search">
            @if(!empty($products[0]->category))
                <form action = "{{ url('container/search', [$products[0]->category]) }}" method = "post">
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
            @else
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
            @endif
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
                                    <input type="text" name="from" value="2541">
                                </div>
                                <div class="custom_input">
                                    до
                                    <input type="text" name="to" value="34729">
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
                        <input type="text" name="from" value="2541">
                    </div>
                    <div class="custom_input">
                        до
                        <input type="text" name="to" value="34729">
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
                <?php $counter = 0; ?>
                @foreach($products as $product)
                    <input type="hidden" id="pro_id<?php echo $counter;?>" value="{{ $product->id }}">
{{--                    <script>--}}
{{--                        $(document).ready(function() {--}}
{{--                            <?for ($i = 0; $i < $counter; $i++) {?>--}}
{{--                                $('#submit_btn<?php echo $i;?>').click(function () {--}}
{{--                                    var pro_id<?php echo $i;?> = $('#pro_id<?php echo $i;?>').val();--}}
{{--                                    $.ajax({--}}
{{--                                        type: 'get',--}}
{{--                                        url: '<?php echo url('/add-to-cart');?>/' + pro_id<?php echo $i;?>,--}}
{{--                                        success: function () {--}}
{{--                                            alert('nice');--}}
{{--                                        }--}}
{{--                                    });--}}
{{--                                });--}}
{{--                            <?php }?>--}}
{{--                        });--}}
{{--                    </script>--}}
                <li class="list_item">
                    <div class="ph">
                        <a href="{{ url('product', [$product->id]) }}">
                            <div class="for_photo">
                                <img src="{{ asset('images/Container/' . $product->small_image) }}" alt="{{ $product->name }}">
                            </div>
                            <div class="description">
                                <p class="description_info">{{ $product->name }}</p>
                                <p class="description_price">{{ $product->price }} ₴</p>
                            </div>
                        </a>
                    </div>
                    <div class="button_basket">
                        <a href="{{ url('add-to-cart/'.$product->id) }}">
                            <img src="{{ asset('images/shopping-basket.svg') }}">
                            <p class="button_basket_text">В кошик</p>
                        </a>
                    </div>
                    <div id="display_item"></div>
                </li>
                        <?php $counter++; ?>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        $('#submit_btn').click(function (e) {--}}
{{--            e.preventDefault();--}}

{{--            $.ajaxSetup({--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('main_content')--}}
{{--                }--}}
{{--            });--}}

{{--            $.ajax({--}}
{{--                url: {{ url('add-to-cart/'.$product->id) }},--}}
{{--                method: "POST",--}}
{{--                data: {--}}
{{--                    'id': {{$product->id}},--}}
{{--                },--}}
{{--                success: function () {--}}
{{--                    $('#display_item').html('Success');--}}
{{--                },--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}

{{--@section('scripts')--}}
{{--    <script type="text/javascript">--}}
{{--        $(function() {--}}
{{--            $(".button").click(function() {--}}
{{--                $.ajax({--}}
{{--                    type: "POST",--}}
{{--                    url: {{ url('add-to-cart/'.$product->id) }},--}}
{{--                    data: {_token: '{{ csrf_token() }}',--}}
{{--                    success: function() {--}}
{{--                        $('#contact_form').html("<div id='message'></div>");--}}
{{--                        $('#message').html("<h2>Contact Form Submitted!</h2>")--}}
{{--                            .append("<p>We will be in touch soon.</p>")--}}
{{--                            .hide()--}}
{{--                            .fadeIn(1500, function() {--}}
{{--                                $('#message').append("<img id='checkmark' src='images/check.png' />");--}}
{{--                            });--}}
{{--                    }--}}
{{--                });--}}
{{--                return false;--}}
{{--            })--}}
{{--        });--}}
{{--        --}}{{--$(".item_delete").click(function (e) {--}}
{{--        --}}{{--    e.preventDefault();--}}
{{--        --}}{{--    var ele = $(this);--}}
{{--        --}}{{--    if(confirm("Are you sure")) {--}}
{{--        --}}{{--        $.ajax({--}}
{{--        --}}{{--            url: '{{ url('remove-from-cart') }}',--}}
{{--        --}}{{--            method: "DELETE",--}}
{{--        --}}{{--            data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},--}}
{{--        --}}{{--            success: function (response) {--}}
{{--        --}}{{--                window.location.reload();--}}
{{--        --}}{{--            }--}}
{{--        --}}{{--        });--}}
{{--        --}}{{--    }--}}
{{--        --}}{{--});--}}
{{--    </script>--}}
{{--@endsection--}}
