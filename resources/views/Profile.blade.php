@extends('index')
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Profile.css') }}" >
    <script
        src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
        crossorigin="anonymous"></script>
</head>

@section('main_content')
    <div id="info">
        <div class="body-el info-block" id="questions">
            @if(session()->get('error'))
                <p>{{session()->get('error')}}</p>
            @endif
            <div id="label">
                <div class="info-label">
                    <p>Особисті дані         </p>
                    <hr>
                </div>
                <a class="pp_edit" href="#pp_editing" id="edit-profile">
                    <img src="{{ asset('images/edit.svg') }}">
                    <p id="edit">Редагувати</p>
                </a>
                <div id="pp_editing" class="popup">
                    <a href="#header" class="popup_area"></a>
                    <div class="popup_body">
                        <form method="POST" action="/updateUser">
                            {{ csrf_field() }}
                            <div class="popup_content">
                                <a href="#header"  class="popup_close">
                                    <img src="{{ asset('images/letter-x.svg') }}">
                                </a>
                                <div class="field_row">
                                    <label for="your_comment_input" class="field_label" >Ім'я</label>
                                    <input class="field_input" value="{{auth()->user()->name}}" type="text" name="name">
                                </div>
                                <div class="field_row">
                                    <label for="your_comment_input" class="field_label" >Прізвище</label>
                                    <input class="field_input" value="{{auth()->user()->surname}}" type="text" name="surname">
                                </div>
                                <div class="field_row">
                                    <label for="your_comment_input" class="field_label" >По-батькові</label>
                                    <input class="field_input" value="{{auth()->user()->mid_name}}" type="text" name="mid_name">
                                </div>
                                <div class="field_row">
                                    <label for="your_comment_input" class="field_label" >Телефон</label>
                                    <input class="field_input" value="{{auth()->user()->phone}}" type="text" name="phone">
                                </div>
                                <div class="field_row">
                                    <label for="your_comment_input" class="field_label" >E-mail</label>
                                    <input class="field_input" value="{{auth()->user()->email}}" type="text" name="email">
                                </div>
                                <a href="#header">
                                    <input id="field_button" type="submit" name="doGO" value="Оновити">
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        $("#edit-profile").click(function ()  {
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
                        $("#field_button").click(function ()  {
                            if ( $("body").hasClass("lock")) {
                                $("body").removeClass("lock");
                            }
                        });
                    });</script>
            </div>

            <div class="info-content" id="quest">
                <div id="quest-left">
                    <p>Прізвище</p>
                    <p>Ім'я</p>
                    <p>По-батькові</p>
                    <p>Телефон</p>
                    <p>E-mail</p>
                </div>
                <div id="quest-right">
                    <p>{{ auth()->user()->surname }}</p>
                    <p>{{ auth()->user()->name }}</p>
                    <p>{{ auth()->user()->mid_name }}</p>
                    <p>{{ auth()->user()->phone }}</p>
                    <p>{{ auth()->user()->email }}</p>
                </div>

            </div>
        </div>
        <div class="body-el info-block" id="orders">
            <div class="info-label">
                <p>Мої замовлення         </p>
                <hr>
            </div>
            <div class="info-content">
                @foreach($orders as $order)
                    <div class="order">
                        <div class="order-info">
                            <div class="status">
                                <p class="top-text">№ {{$order->id}} від {{$order->created_at}}</p>
                                <p class="bottom-text">Виконано</p>
                            </div>
                            <div class="sum">
                                <p class="top-text">Сума замовлення</p>
                                <p class="bottom-text">{{$order->price}} ₴</p>
                            </div>
                        </div>
                        <div class="pict">
                            <img src="{{ asset('images/Container/' . $order->main_image) }}" class="item-pic">
                            <img src="{{ asset('images/left-arrow.svg') }}" style="transform: rotate(-90deg);" class="arrow">
                        </div>
                    </div>
                    <hr id="order-sep">
                @endforeach
            </div>
        </div>
    </div>
@endsection
