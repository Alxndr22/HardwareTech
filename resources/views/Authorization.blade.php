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
            <form method="POST" action="/register">
                {{ csrf_field() }}
                <div id="first-page_left">
                    <p id="first-page_title">Реєстрація</p>

                    <input id="change_author" type="checkbox">
                    <label for="change_author">
                        <p id="register">Реєстрація </p>
                        <p id="slash">/ </p>
                        <p id="enter">Вхід</p>
                    </label>

                    <hr>
                    <div class="field_row">
                        <label for="your_comment_input" class="field_label" >Ім'я</label>
                        <input class="field_input" type="text" name="name" value="">
                    </div>
                    <div class="field_row">
                        <label for="your_comment_input" class="field_label" >Прізвище</label>
                        <input class="field_input" type="text" name="surname" value="">
                    </div>
                    <div class="field_row">
                        <label for="your_comment_input" class="field_label" >По-батькові</label>
                        <input class="field_input" type="text" name="mid_name" value="">
                    </div>
                    <div class="field_row">
                        <label for="your_comment_input" class="field_label" >Телефон</label>
                        <input class="field_input" type="text" name="phone" value="">
                    </div>
                    <div class="field_row">
                        <label for="your_comment_input" class="field_label" >E-mail</label>
                        <input class="field_input" type="text" name="email" value="">
                    </div>
                    <div class="field_row">
                        <label for="your_comment_input" class="field_label" >Пароль</label>
                        <input class="field_input" type="text" name="password" value="">
                    </div>
                    <div class="field_row">
                        <label for="your_comment_input" class="field_label" >Підтвердити пароль</label>
                        <input class="field_input" type="text" name="password_confirm" value="">
                    </div>
                    <input id="field_button" class="field_button_register" type="submit" name="doGO" value="Зареєструватися">
                </div>
            </form>

            <form method="POST" action="/login">
                {{ csrf_field() }}
                <div id="first-page_right">
                    <div class="field_row">
                        <label for="your_comment_input" class="field_label" id="field_label_right">Email / Телефон</label>
                        <input class="field_input" type="text" name="email" value="">
                    </div>
                    <div class="field_row">
                        <label for="your_comment_input" class="field_label" id="field_label_right">Пароль</label>
                        <input class="field_input" type="text" name="password" value="">
                    </div>
                    <div class="field_row">
                        <div></div>
                        <a id="forgot_password" href="">
                            Забули пароль?
                        </a>
                    </div>
                    <input id="field_button" type="submit" name="doGO" value="Увійти">
                </div>
            </form>
            <form method="POST" action="/login">
                {{ csrf_field() }}
                <div id="first-page_right">
                    <p id="first-page_title">Вхід</p>
                    <hr>
                    <div class="field_row">
                        <label for="your_comment_input" class="field_label" id="field_label_right">Email / Телефон</label>
                        <input class="field_input" type="text" name="email" value="">
                    </div>
                    <div class="field_row">
                        <label for="your_comment_input" class="field_label" id="field_label_right">Пароль</label>
                        <input class="field_input" type="text" name="password" value="">
                    </div>
                    <a href="" style="font-family: 'Fira Sans', serif; font-size: 16px; color: #243D56; padding: 0">
                        Забули пароль?
                    </a>
                    <input id="field_button" type="submit" name="doGO" value="Увійти">
                </div>
                @if(session()->get('error'))
                    <p>{{session()->get('error')}}</p>
                @endif
            </form>
        </div>
    </div>

@endsection
