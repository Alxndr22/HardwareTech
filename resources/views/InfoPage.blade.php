@extends('PicturePage')
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Info.css') }}">
</head>

@section('content')
    <div id="info">
        <div class="body-el info-block" id="questions">
            <div class="info-label">
                <p>Будь-які питання стосовно товару і доставки             </p>
                <hr>
            </div>
            <div class="info-content" id="quest">
                <div id="quest-left">
                    <div class="callback-number">
                        <div>
                            <img src="{{ asset('images/Phone(white).svg') }}" style="filter: invert(100%)" class="info-icon">
                        </div>
                        <div id="numbers">
                            <p>+38 066 451-51-93</p>
                            <p>+38 093 511-45-75</p>
                        </div>
                    </div>

                    <div class="callback-mail" id="mail-top">
                        <div>
                            <img src="{{ asset('images/mail.svg') }}" class="info-icon">
                        </div>

                        <p>business.hardwaretech@gmail.com</p>
                    </div>
                </div>
                <div id="quest-right">
                    <div class="schedule">
                        <p class="time">Пн-Пт         8:00 - 20:00</p>
                        <p class="time">Сб-Нд         9:00 - 18:00</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="body-el info-block" id="callback">
            <div class="info-label">
                <p>Зворотній зв'язок для постачальників             </p>
                <hr>
            </div>
            <div class="info-content">
                <div class="callback-number">
                    <div>
                        <img src="{{ asset('images/Phone(white).svg') }}" class="info-icon" style="filter: invert(100%)">
                    </div>

                    <p>+38 066 902-17-23</p>
                </div>
                <div class="callback-mail">
                    <div>
                        <img src="{{ asset('images/mail.svg') }}" class="info-icon">
                    </div>

                    <p>business.hardwaretech@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="body-el info-block" id="adress">
            <div class="info-label">
                <p>Точка самовивозу товару             </p>
                <hr>
            </div>
            <div class="info-content" id="office" >
                <div id="office-text">
                    <div id="top-text">
                        <div id="location">
                            <img src="{{ asset('images/placeholder.svg') }}" class="info-icon" id="placeholder">
                        </div>
                        <div class="schedule">
                            <p>вул. Калачівська, 13, Київ</p>
                            <p class="time">Пн-Пт         8:00 - 20:00</p>
                            <p class="time">Сб-Нд         9:00 - 18:00</p>
                        </div>
                    </div>
                    <div id="bottom-text">
                        <p>Зберігання товару до 3 днів.</p>
                        <p>Точну інформацію щодо отримання <br>уточнюйте за номером:</p>
                        <div id="callback-number-bottom">
                            <img src="{{ asset('images/Phone(white).svg') }}" class="info-icon" style="filter: invert(100%)">
                            <p>   +38 066 902-17-23</p>
                        </div>
                    </div>
                </div>
                <div id="office-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4277.85280068801!2d30.59958419206118!3d50.39216093464204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c5c6406244c9%3A0xcbd0840007235b46!2z0LLRg9C70LjRhtGPINCm0LXQvdGC0YDQsNC70YzQvdCwLCAyMSwg0JrQuNGX0LIsIDAyMDAw!5e0!3m2!1suk!2sua!4v1616325700219!5m2!1suk!2sua"
                            width="100%" height="420" style="border:0;" allowfullscreen="" ></iframe>
                </div>

            </div>
        </div>
    </div>



@endsection
