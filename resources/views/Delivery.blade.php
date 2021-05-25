@extends('index')

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Delivery.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}" >
    <script
        src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
        crossorigin="anonymous"></script>
</head>

@section('title')
    Доставка / Оплата
@endsection

@section('main_content')
    <div class="body-el" id="first-page">
        <div class="banner">
            <img src="{{asset('images/DeliveryBanner.jpg')}}" alt="1">
            <div class="text_before_banner">
                <p class="slogan" id="top-slogan">Доставка / Оплата</p>
            </div>
        </div>
    </div>
    <div id="catalog_list" class="catalog_list">
        <a href="#header" class="popup_area"></a>
        <div class="catalog_list_body">
            <div class="catalog_list_content">
                <a href="#header"  class="popup_close">
                    <img src="{{ asset('images/letter-x.svg') }}">
                </a>
                <a id="menu_list_link" href="/Videocard"><img src="{{ asset('images/video-card.svg') }}"><p class="menu_item">Відеокарти</p></a>
                <a id="menu_list_link" href="/Motherboard"><img src="{{ asset('images/motherboard.svg') }}"><p class="menu_item">Материнські плати</p></a>
                <a id="menu_list_link" href="/Processor"><img src="{{ asset('images/cpu.svg') }}"><p class="menu_item">Процесори</p></a>
                <a id="menu_list_link" href="/Ram"><img src="{{ asset('images/ram.svg') }}"><p class="menu_item">Оперативна пам'ять</p></a>
                <a id="menu_list_link" href="/Body"><img src="{{ asset('images/body.svg') }}"><p class="menu_item">Корпуси</p></a>
                <a id="menu_list_link" href="/Power"><img src="{{ asset('images/power-supply.svg') }}"><p class="menu_item">Блоки живлення</p></a>
                <a id="menu_list_link" href="/HDD"><img src="{{ asset('images/hdd.svg') }}"><p class="menu_item">Жорсткі диски</p></a>
            </div>
            <a href="#header" class="catalog_list_area"></a>
        </div>
    </div>
    <div class="catalog-page_delivery">
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
        <p class="second-page_title">Оплата</p>
        <hr>
        <div class="second-page_item">
            <img src="{{ asset('images/Privat_b.svg') }}">
            <p class="second-page_text">• <strong>Приват24</strong> - Інструкцію щодо оплати Ви отримаєте на email після підтвердження наявності та вартості товару. Будь ласка, оплачуйте замовлення в день отримання інструкції. Інакше ми не можемо на 100% гарантувати збереження ціни і доступності всіх продуктів у Вашому замовленні.</p>
        </div>

        <div class="second-page_item">
            <img src="{{ asset('images/Visa.svg') }}">
            <p class="second-page_text">• <strong>Онлайн-оплата карткою Visa або MasterCard</strong> - При оплаті з Вас буде додатково утримано сервісний збір 2,2% від суми покупки. Для оплати цим способом, будь ласка, повністю і коректно заповніть поля «Прізвище», «Ім`я» і «По батькові», а також врахуйте: для отримання товару Вам необхідно буде пред'явити паспорт.</p>
        </div>
        <p class="second-page_title" id="second-page_title_margin">Доставка</p>
        <hr>
        <div class="second-page_item">
            <img src="{{ asset('images/NP_b.svg') }}">
            <p class="second-page_text">• <strong>Нова пошта</strong> - Вартість доставки: згідно з тарифами перевізника. Розрахувати вартість можна за допомогою калькулятора. Відстеження відправлень здійснюється за посиланням: Трекер посилки.
            При оплаті готівкою понад 5000 грн. , потрібно мати при собі паспорт громадянина України.</p>
        </div>
        <div class="second-page_item">
            <img src="{{ asset('images/Courier.svg') }}">
            <p class="second-page_text">• <strong>Кур'єр по Києву</strong> - Вартість доставки, при замовленні на суму до 5 тис - 60₴, більше 5 тис - 1₴. Великогабаритні товари доставляються платно від 80₴</p>
        </div>
        <div class="second-page_item">
            <div style="display: flex">
                <img src="{{ asset('images/Pickup_point.svg') }}">
                <div id="days_time">
                    <p class="second-page_text" id="pick-up">• <strong>Пункт видачі замовлень</strong> - Адреса: м. Київ, вул. Калачівстка 13. </p>
                    <div style="display: flex">
                        <p class="second-page_text" id="days">Пн-Пт:<br>Сб:<br>Нд:</p>
                        <p class="second-page_text" id="time">08:00 - 21:00<br>09:00 - 18:00<br>11:00 - 16:00</p>
                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection
