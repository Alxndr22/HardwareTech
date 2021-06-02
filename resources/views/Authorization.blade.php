@extends('index')

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Authorization.css') }}" >
    <script
        src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
        crossorigin="anonymous"></script>
</head>

@section('title')
    Реєстрація / Вхід
@endsection

@section('main_content')
    <div id="first-page">
        <div id="first-page_inner">
            <form id="first-page_left" method="POST" action="/register">
                {{ csrf_field() }}

                    <p id="first-page_title">Реєстрація</p>

                    <input id="change_author" checked name="ch" type="radio">
                    <input id="change_author2" name="ch" type="radio">
                    <label for="change_author">
                        <p id="register">Реєстрація </p>
                        <p id="slash">/ </p>
                        <label for="change_author2">
                            <p id="enter">Вхід</p>
                        </label>
                    </label>

                <script>
                    $(document).ready(function () {
                        $("#register").click(function ()  {
                            if ( !$("#entrance").hasClass("non-display")) {
                                $("#entrance").addClass("non-display");
                                $("#registr").removeClass("non-display");
                                $("#entrance").removeClass("display");
                            }
                        });
                        $("#enter").click(function ()  {
                            if ( !$("#registr").hasClass("non-display")) {
                                $("#registr").addClass("non-display");
                                $("#entrance").removeClass("non-display");
                                $("#entrance").addClass("display");
                            }
                        });
                    });</script>

                    <hr>
                    <div id="registr">
                        <div class="field_row">
                            <label for="your_comment_input" class="field_label" >Ім'я<span style="color: #C60000"> *</span></label>
                            <input class="field_input" type="text" name="name" value="">
                        </div>
                        <div class="field_row">
                            <label for="your_comment_input" class="field_label" >Прізвище<span style="color: #C60000"> *</span></label>
                            <input class="field_input" type="text" name="surname" value="">
                        </div>
                        <div class="field_row">
                            <label for="your_comment_input" class="field_label" >По-батькові</label>
                            <input class="field_input" type="text" name="mid_name" value="">
                        </div>
                        <div class="field_row">
                            <label for="your_comment_input" class="field_label" >Телефон<span style="color: #C60000"> *</span></label>
                            <input class="field_input" type="text" name="phone" value="">
                        </div>
                        <div class="field_row">
                            <label for="your_comment_input" class="field_label" >E-mail<span style="color: #C60000"> *</span></label>
                            <input class="field_input" type="text" name="email" value="">
                        </div>
                        <div class="field_row">
                            <label for="your_comment_input" class="field_label" >Пароль<span style="color: #C60000"> *</span></label>
                            <input class="field_input" type="text" name="password" value="">
                        </div>
                        <div class="field_row">
                            <label for="your_comment_input" class="field_label" >Підтвердити пароль<span style="color: #C60000"> *</span></label>
                            <input class="field_input" type="text" name="password_confirm" value="">
                        </div>
                        <input id="field_button" class="field_button_register" type="submit" name="doGO" value="Зареєструватися">
                        @if(session()->get('error'))
                            <p id="error">{{session()->get('error')}}</p>
                        @endif
                    </div>

            </form>

            <form id="entrance" method="POST" action="/login">
                <p id="first-page_title">Вхід</p>
                <hr>
                {{ csrf_field() }}
                    <div class="field_row">
                        <label for="your_comment_input" class="field_label" id="field_label_right">Email</label>
                        <input class="field_input" type="text" name="email" value="">
                    </div>
                    <div class="field_row">
                        <label for="your_comment_input" class="field_label" id="field_label_right">Пароль</label>
                        <input class="field_input" type="text" name="password" value="">
                    </div>
                    <div class="field_row">
                        <div></div>
                        <a id="forgot_password" href="#forgot">
                            Забули пароль?
                        </a>
                    </div>
                    <input id="field_button" type="submit" name="doGO" value="Увійти">
                @if(session()->get('error_login'))
                    <p id="error">{{session()->get('error_login')}}</p>
                @endif
            </form>
        </div>
    </div>
    <div id="forgot" class="popup">
        <a href="#header" class="popup_area"></a>
        <div class="popup_body">
            <div class="popup_content">
                <a href="#header" class="popup_close">
                    <img src="{{ asset('images/letter-x.svg') }}">
                </a>
                <p class="comment_header">
                    Відновлення паролю
                    <p class="additional_info">Код відновлення надійде на пошту</p>
                </p>
                <form method="POST">
                    <label for="your_comment_input" class="field_label" id="field_label_right">Введіть Email</label>
                    <input class="field_input" id="field_input_forgot" type="text" name="email" value="">

                    <input id="forgot_button" type="submit" name="doGO" value="Відправити">
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#forgot_password").click(function ()  {
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

        });</script>

@endsection
