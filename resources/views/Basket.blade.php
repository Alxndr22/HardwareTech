@extends('index')

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Basket.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}" >
    <script
        src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
        crossorigin="anonymous"></script>
</head>

@section('title')
    Кошик
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
    <div id="catalog-page">
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

<form method="POST" action="/add-order">
    {{ csrf_field() }}
    <div id="second-page">
        <p id="second-page_title">Кошик</p>
        <hr>
        <?php $counter = 0; ?>
        @if (!empty($new_total))
            @if($total = $new_total)
            @endif
        @elseif($total = 0)
        @endif
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @if ($total += $details['price'] * $details['quantity']) @endif
                @if ($id = $details['id']) @endif
                <div class="item">
                    <div class="item_inner">
                        <a class="item_img" href="/">
                            <img src="{{ asset('images/Container/'.$details['image']) }}" alt="{{$details['name']}}">
                        </a>
                        <a href="/"><p class="item_title">{{$details['name']}}</p></a>

                        <div class="amount_price">
                            <div id="second-page_amount">
                                <img id="button_minus<?php echo $counter;?>" src="{{ asset('images/left-arrow.svg') }}" alt="">
                                <input class ="second-page_amount_digit" type="number" readonly step="1" min="1" max="10" id="second-page_amount_digit<?php echo $counter;?>" name="quantity" value="{{$details['quantity']}}" title="Qty">
                                <img id="button_plus<?php echo $counter;?>" style="transform: rotate(180deg)" src="{{ asset('images/left-arrow.svg') }}" alt="1">
                            </div>
                            <script>
                                $(document).ready(function() {
                                    <?php $maxP = count(session('cart'));
                                    for ($i = 0; $i < $maxP; $i++) {?>
                                    var numCount<?php echo $i;?> = document.getElementById('second-page_amount_digit<?php echo $i;?>');
                                    var plusBtn<?php echo $i;?> = document.getElementById('button_plus<?php echo $i;?>');
                                    var minusBtn<?php echo $i;?> = document.getElementById('button_minus<?php echo $i;?>');
                                    var price<?php echo $i;?> = document.getElementById('price<?php echo $i;?>');
                                    var price_val<?php echo $i;?> = parseInt(price<?php echo $i;?>.value);
                                    plusBtn<?php echo $i;?>.onclick = function() {
                                        var total = document.getElementById('sum_value');
                                        var tot_val = parseInt(total.value);
                                        var qty<?php echo $i;?> = parseInt(numCount<?php echo $i;?>.value);
                                        var max<?php echo $i;?> = parseInt(numCount<?php echo $i;?>.max)
                                        if (qty<?php echo $i;?> < max<?php echo $i;?>) {
                                            qty<?php echo $i;?> = qty<?php echo $i;?> + 1;
                                            total.value = tot_val + price_val<?php echo $i;?>
                                        }
                                        numCount<?php echo $i;?>.value = qty<?php echo $i;?>;
                                    }
                                    minusBtn<?php echo $i;?>.onclick = function() {
                                        var total = document.getElementById('sum_value');
                                        var tot_val = parseInt(total.value);
                                        var qty<?php echo $i;?> = parseInt(numCount<?php echo $i;?>.value);
                                        if (qty<?php echo $i;?> > 1) {
                                            qty<?php echo $i;?> = qty<?php echo $i;?> - 1;
                                            total.value = tot_val - price_val<?php echo $i;?>
                                        }
                                        numCount<?php echo $i;?>.value = qty<?php echo $i;?>;
                                    }
                                    {{--$.ajax({--}}
                                    {{--    type:get,--}}
                                    {{--    url: '<?php echo url('/totalPrice');?>/'+@json($id)'/'.@json($total),--}}
                                    {{--    success:function() {--}}
                                    {{--        alert('nice');--}}
                                    {{--    }--}}
                                    {{--})--}}
                                    <?php }?>
                                })
                            </script>
                            <div class="item_price">
                                <input type="number" readonly value="{{$details['price']}}" id="price<?php echo $counter;?>" name="item_price">
                                <span> ₴</span>
                            </div>
                        </div>


                        <a href="{{ url('remove-from-cart/'.$details['id']) }}"  class="item_delete">
                            <img src="{{ asset('images/letter-x.svg') }}">
                        </a>
                    </div>
                    <hr class="item_hr">
                </div>
            <?php $counter++; ?>
            @endforeach
        @endif
        <div id="sum">
            <p id="sum_title">Всього:</p>
            <input id="sum_value" type="number" min="{{ $total }}" readonly value="{{ $total }}" name="total">
            <p id="sum_title" style="margin-right: 0">₴</p>
        </div>
    <div id="third-page">
        <p id="second-page_title">Оплата замовлення</p>
        <hr id="payment_hr" >

        <div class="inner_element">
            <div class="field_row">
                <label for="your_comment_input" class="field_label" >Ім'я</label>
                <input class="field_input" type="text" name="name" value="@if(auth()->user()){{auth()->user()->name}}@endif">
            </div>
            <div class="field_row">
                <label for="your_comment_input" class="field_label" >Прізвище</label>
                <input class="field_input" type="text" name="surname" value="@if(auth()->user()){{auth()->user()->surname}}@endif">
            </div>
            <div class="field_row">
                <label for="your_comment_input" class="field_label" >Телефон</label>
                <input class="field_input" type="text" name="phone" value="@if(auth()->user()){{auth()->user()->phone}}@endif">
            </div>
            <div class="field_row">
                <label for="your_comment_input" class="field_label" >Почта</label>
                <input class="field_input" <?php if (auth()->user()) echo 'readonly'?> type="text" name="email" value="@if(auth()->user()){{auth()->user()->email}}@endif">
            </div>
        </div>


        <hr class="hr_sub_title">
        <p class="sub_title">Доставка</p>

        <input id="NP" value="NP" name="deliv" checked type="radio">
        <label class="delivery_label" for="NP">У відділення "Нова пошта"</label><br>

        <div id="NP_inner" class="inner_element">
            <div class="field_row">
                <label for="your_comment_input" class="field_label" >Місто</label>
                <label class="custom_select">
                    <select name="sel1">
                        <option value="Київ">Київ</option>
                        <option value="Суми">Суми</option>
                        <option value="Харків">Харків</option>
                    </select>
                </label>
            </div>
            <div class="field_row">
                <label for="your_comment_input" class="field_label">Відділення</label>
                <label class="custom_select">
                    <select name="sel2">
                        <option value="1">№1</option>
                        <option value="2">№2</option>
                        <option value="3">№3</option>
                    </select>
                </label>
            </div>
            <p class="additional_info">* Вартість доставки обраховується за тарифами “Нова пошта”</p>
        </div>

            <input id="runner" value="runner" name="deliv" type="radio">
            <label class="delivery_label" for="runner">Кур'єром по Києву</label><br>

        <div id="runner_inner" class="inner_element">
            <div class="field_row">
                <label for="your_comment_input" class="field_label" >Адреса</label>
                <input class="field_input" placeholder=" Вулиця, будинок, квартира" type="text" value="">
            </div>
            <p class="additional_info">* Вартість доставки, при замовленні на суму до 5 тис. - 60₴. Більше 5 тис. - 1₴.</p>
        </div>

            <input id="pick-up" value="pick-up" name="deliv" type="radio">
            <label class="delivery_label" for="pick-up">Пункт видачі замовлень (м. Київ, вул. Калачівстка 13)</label>

        <div id="pick-up_inner" class="inner_element">
            <div style="display: flex">
                <p class="additional_info">Графік роботи:<br></p>
                <p class="additional_info" style="margin-left: 20px">ПН-ПТ: 08:00-21:00<br>СБ: 09:00-18:00<br>ВС: 11:00-16:00</p>
            </div>
        </div>

        <hr class="hr_sub_title">
        <p class="sub_title">Оплата</p>

        <input id="privat24" value="privat24" name="payment" checked type="radio">
        <label class="delivery_label" for="privat24">Приват24</label><br>

        <div id="privat_inner" class="inner_element">
            <p class="additional_info">Інструкція щодо оплати надійде на пошту після підтвердження наявності товару</p>
        </div>

        <input id="visa-master" value="visa-master" name="payment" type="radio">
        <label class="delivery_label" for="visa-master">Visa, Mastercard</label>

        <div id="visa-master_inner" class="inner_element">
            <p class="additional_info">Інструкція щодо оплати надійде на пошту після підтвердження наявності товару</p>
        </div>

        <input id="field_button" type="submit" name="doGO" value="Оформити замовлення">
    </div>
    </div>
</form>
@endsection
