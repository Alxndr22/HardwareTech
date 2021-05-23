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
            <div id="first-page_left">
                <p id="first-page_title">Реєстрація</p>
                <hr>
                <div>
                    <label for="your_comment_input" class="field_label" >Ім'я</label>
                    <input class="field_input" type="text" name="name" value="">
                </div>
                <div>
                    <label for="your_comment_input" class="field_label" >Прізвище</label>
                    <input class="field_input" type="text" name="name" value="">
                </div>
                <div>
                    <label for="your_comment_input" class="field_label" >По-батькові</label>
                    <input class="field_input" type="text" name="name" value="">
                </div>
                <div>
                    <label for="your_comment_input" class="field_label" >Телефон</label>
                    <input class="field_input" type="text" name="name" value="">
                </div>
                <div>
                    <label for="your_comment_input" class="field_label" >E-mail</label>
                    <input class="field_input" type="text" name="name" value="">
                </div>
                <div>
                    <label for="your_comment_input" class="field_label" >Пароль</label>
                    <input class="field_input" type="text" name="name" value="">
                </div>
                <div>
                    <label for="your_comment_input" class="field_label" >Підтвердити пароль</label>
                    <input class="field_input" type="text" name="name" value="">
                </div>
                <input id="your_comment_button" type="submit" name="doGO" value="Зареєструватися">
            </div>
            <div id="first-page_right">
                <p id="first-page_title">Вхід</p>
                <hr>
                <div>
                    <label for="your_comment_input" class="field_label" >Email / Телефон</label>
                    <input class="field_input" type="text" name="name" value="">
                </div>
                <div>
                    <label for="your_comment_input" class="field_label" >Пароль</label>
                    <input class="field_input" type="text" name="name" value="">
                </div>
                <a href="">
                    Забули пароль?
                </a>
                <input id="your_comment_button" type="submit" name="doGO" value="Увійти">
            </div>
        </div>


    </div>

@endsection
