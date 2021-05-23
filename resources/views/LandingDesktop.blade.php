<?php
$connect = mysqli_connect("webhosting.apeps.pp.ua", "c49_ht", "rmRkWy@UkR6X", "c49_ht");
?>
@extends('PicturePage')
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/LandingDesktop.css') }}" >
</head>
@section('content')
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

    <div class="body-el slider-page">
        <div class="category-label">
            <hr>
            <a href="{{ url('container', ['Відеокарти']) }}">
                <p>Відеокарти</p>
            </a>
            <hr>
        </div>
        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-1"></label>
                <label for="slide-dot-2"></label>
                <label for="slide-dot-3"></label>
            </div>

            <?php
            $query = "SELECT p.id, image, p.name, price FROM categories c INNER JOIN products p ON c.id = p.category_id INNER JOIN
                        images i ON p.id = i.product_id WHERE c.category = 'Відеокарти'";
            $result = mysqli_query($connect, $query);
            ?>
            <input id="slide-dot-1" type="radio" name="slides" style="display: none" checked>
            <div class="slide slide-1">
                <?php
                for($i = 0; $i < 3; $i++) {
                    $row = mysqli_fetch_array($result)
                    ?>
                    <a href="{{ url('product', [$row['id']]) }}">
                        <div class="slide-img">
                            <img src = 'images/Container/<?=$row['image']?>'>
                            <p class="product-name"><?=$row['name']?></p>
                            <p class="price"><?=intval($row['price'])?> ₴</p>
                        </div>
                    </a>
                    <?php
                }
                ?>
            </div>

            <input id="slide-dot-2" type="radio" name="slides" style="display: none">
            <div class="slide slide-2">
                <?php
                for($i = 0; $i < 3; $i++) {
                    $row = mysqli_fetch_array($result)
                    ?>
                    <a href="{{ url('product', [$row['id']]) }}">
                        <div class="slide-img">
                            <img src = 'images/Container/<?=$row['image']?>'>
                            <p class="product-name"><?=$row['name']?></p>
                            <p class="price"><?=intval($row['price'])?> ₴</p>
                        </div>
                    </a>
                    <?php
                }
                ?>
            </div>

            <input id="slide-dot-3" type="radio" name="slides" style="display: none">
            <div class="slide slide-3">
                <?php
                for($i = 0; $i < 3; $i++) {
                    $row = mysqli_fetch_array($result)
                    ?>
                    <a href="{{ url('product', [$row['id']]) }}">
                        <div class="slide-img">
                            <img src = 'images/Container/<?=$row['image']?>'>
                            <p class="product-name"><?=$row['name']?></p>
                            <p class="price"><?=intval($row['price'])?> ₴</p>
                        </div>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
        </div>

    </div>
    <div class="body-el slider-page">

        <div class="category-label">
            <hr>
            <a href="{{ url('container', ['Материнські плати']) }}">
                <p>Материнські плати</p>
            </a>
            <hr>
        </div>
        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-7"></label>
                <label for="slide-dot-8"></label>
                <label for="slide-dot-9"></label>
            </div>

            <?php
            $query = "SELECT * FROM categories c INNER JOIN products p ON c.id = p.category_id INNER JOIN
                        images i ON p.id = i.product_id WHERE c.category = 'Материнські плати'";
            $result = mysqli_query($connect, $query);
            ?>
            <input id="slide-dot-7" type="radio" name="slides3" style="display: none" checked>
            <div class="slide slide-1">
                <?php
                for($i = 0; $i < 3; $i++) {
                    $row = mysqli_fetch_array($result)
                    ?>
                    <a href="{{ url('product', [$row['id']]) }}">
                        <div class="slide-img">
                            <img src = 'images/Container/<?=$row['image']?>'>
                            <p class="product-name"><?=$row['name']?></p>
                            <p class="price"><?=intval($row['price'])?> ₴</p>
                        </div>
                    </a>
                    <?php
                }
                ?>
            </div>

            <input id="slide-dot-8" type="radio" name="slides3" style="display: none">
            <div class="slide slide-2">
                <?php
                for($i = 0; $i < 3; $i++) {
                    $row = mysqli_fetch_array($result)
                    ?>
                    <a href="{{ url('product', [$row['id']]) }}">
                        <div class="slide-img">
                            <img src = 'images/Container/<?=$row['image']?>'>
                            <p class="product-name"><?=$row['name']?></p>
                            <p class="price"><?=intval($row['price'])?> ₴</p>
                        </div>
                    </a>
                    <?php
                }
                ?>
            </div>

            <input id="slide-dot-9" type="radio" name="slides3" style="display: none">
            <div class="slide slide-3">
                <?php
                for($i = 0; $i < 3; $i++) {
                    $row = mysqli_fetch_array($result)
                    ?>
                    <a href="{{ url('product', [$row['id']]) }}">
                        <div class="slide-img">
                            <img src = 'images/Container/<?=$row['image']?>'>
                            <p class="product-name"><?=$row['name']?></p>
                            <p class="price"><?=intval($row['price'])?> ₴</p>
                        </div>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>

    </div>
    <div class="body-el  slider-page">
        <div class="category-label">
            <hr>
            <a href="{{ url('container', ['Процесори']) }}">
                <p>Процесори</p>
            </a>
            <hr>
        </div>
        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-10"></label>
                <label for="slide-dot-11"></label>
                <label for="slide-dot-12"></label>
            </div>

            <?php
            $query = "SELECT * FROM categories c INNER JOIN products p ON c.id = p.category_id INNER JOIN
                        images i ON p.id = i.product_id WHERE c.category = 'Процесори'";
            $result = mysqli_query($connect, $query);
            ?>
            <input id="slide-dot-10" type="radio" name="slides4" style="display: none" checked>
            <div class="slide slide-1">
                <?php
                for($i = 0; $i < 3; $i++) {
                    $row = mysqli_fetch_array($result)
                    ?>
                    <a href="{{ url('product', [$row['id']]) }}">
                        <div class="slide-img">
                            <img src = 'images/Container/<?=$row['image']?>'>
                            <p class="product-name"><?=$row['name']?></p>
                            <p class="price"><?=intval($row['price'])?> ₴</p>
                        </div>
                    </a>
                    <?php
                }
                ?>
            </div>

            <input id="slide-dot-11" type="radio" name="slides4" style="display: none">
            <div class="slide slide-2">
                <?php
                for($i = 0; $i < 3; $i++) {
                    $row = mysqli_fetch_array($result)
                    ?>
                    <a href="{{ url('product', [$row['id']]) }}">
                        <div class="slide-img">
                            <img src = 'images/Container/<?=$row['image']?>'>
                            <p class="product-name"><?=$row['name']?></p>
                            <p class="price"><?=intval($row['price'])?> ₴</p>
                        </div>
                    </a>
                    <?php
                }
                ?>
            </div>

            <input id="slide-dot-12" type="radio" name="slides4" style="display: none">
            <div class="slide slide-3">
                <?php
                for($i = 0; $i < 3; $i++) {
                    $row = mysqli_fetch_array($result)
                    ?>
                    <a href="{{ url('product', [$row['id']]) }}">
                        <div class="slide-img">
                            <img src = 'images/Container/<?=$row['image']?>'>
                            <p class="product-name"><?=$row['name']?></p>
                            <p class="price"><?=intval($row['price'])?> ₴</p>
                        </div>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="body-el  slider-page">
        <div class="category-label">
            <hr>
            <p>Оперативна пам'ять</p>
            <hr>
        </div>
        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-13"></label>
                <label for="slide-dot-14"></label>
                <label for="slide-dot-15"></label>
            </div>

            <input id="slide-dot-13" type="radio" name="slides5" style="display: none" checked>
            <div class="slide slide-1">
                <div class="slide-img">
                    <img src="{{ asset('images/1.png') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>

                <div class="slide-img">
                    <img src="{{ asset('images/1.png') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>

                <div class="slide-img slide_cont-3">
                    <img src="{{ asset('images/1.png') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>
            </div>

            <input id="slide-dot-14" type="radio" name="slides5" style="display: none">
            <div class="slide slide-2">

                <div class="slide-img">
                    <img src="{{ asset('images/2 .jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>


                <div class="slide-img">
                    <img src="{{ asset('images/2 .jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>



                <div class="slide-img slide_cont-3">
                    <img src="{{ asset('images/2 .jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>


            </div>

            <input id="slide-dot-15" type="radio" name="slides5" style="display: none">
            <div class="slide slide-3">

                <div class="slide-img">
                    <img src="{{ asset('images/3.jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>



                <div class="slide-img">
                    <img src="{{ asset('images/3.jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>



                <div class="slide-img slide_cont-3">
                    <img src="{{ asset('images/3.jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>
            </div>
        </div>

    </div>
    <div class="body-el  slider-page">
        <div class="category-label">
            <hr>
            <p>Корпуси</p>
            <hr>
        </div>
        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-16"></label>
                <label for="slide-dot-17"></label>
                <label for="slide-dot-18"></label>
            </div>

            <input id="slide-dot-16" type="radio" name="slides6" style="display: none" checked>
            <div class="slide slide-1">
                <div class="slide-img">
                    <img src="{{ asset('images/1.png') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>

                <div class="slide-img">
                    <img src="{{ asset('images/1.png') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>

                <div class="slide-img slide_cont-3">
                    <img src="{{ asset('images/1.png') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>
            </div>

            <input id="slide-dot-17" type="radio" name="slides6" style="display: none">
            <div class="slide slide-2">

                <div class="slide-img">
                    <img src="{{ asset('images/2 .jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>


                <div class="slide-img">
                    <img src="{{ asset('images/2 .jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>



                <div class="slide-img slide_cont-3">
                    <img src="{{ asset('images/2 .jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>


            </div>

            <input id="slide-dot-18" type="radio" name="slides6" style="display: none">
            <div class="slide slide-3">

                <div class="slide-img">
                    <img src="{{ asset('images/3.jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>



                <div class="slide-img">
                    <img src="{{ asset('images/3.jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>



                <div class="slide-img slide_cont-3">
                    <img src="{{ asset('images/3.jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>
            </div>
        </div>

    </div>
    <div class="body-el  slider-page">
        <div class="category-label">
            <hr>
            <p>Блоки живлення</p>
            <hr>
        </div>
        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-19"></label>
                <label for="slide-dot-20"></label>
                <label for="slide-dot-21"></label>
            </div>

            <input id="slide-dot-19" type="radio" name="slides7" style="display: none" checked>
            <div class="slide slide-1">
                <div class="slide-img">
                    <img src="{{ asset('images/1.png') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>

                <div class="slide-img">
                    <img src="{{ asset('images/1.png') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>

                <div class="slide-img slide_cont-3">
                    <img src="{{ asset('images/1.png') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>
            </div>

            <input id="slide-dot-20" type="radio" name="slides7" style="display: none">
            <div class="slide slide-2">

                <div class="slide-img">
                    <img src="{{ asset('images/2 .jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>


                <div class="slide-img">
                    <img src="{{ asset('images/2 .jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>



                <div class="slide-img slide_cont-3">
                    <img src="{{ asset('images/2 .jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>


            </div>

            <input id="slide-dot-21" type="radio" name="slides7" style="display: none">
            <div class="slide slide-3">

                <div class="slide-img">
                    <img src="{{ asset('images/3.jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>



                <div class="slide-img">
                    <img src="{{ asset('images/3.jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>



                <div class="slide-img slide_cont-3">
                    <img src="{{ asset('images/3.jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>
            </div>
        </div>

    </div>
    <div class="body-el  slider-page">
        <div class="category-label">
            <hr>
            <p>Жорсткі диски</p>
            <hr>
        </div>
        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-22"></label>
                <label for="slide-dot-23"></label>
                <label for="slide-dot-24"></label>
            </div>

            <input id="slide-dot-22" type="radio" name="slides8" style="display: none" checked>
            <div class="slide slide-1">
                <div class="slide-img">
                    <img src="{{ asset('images/1.png') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>

                <div class="slide-img">
                    <img src="{{ asset('images/1.png') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>

                <div class="slide-img slide_cont-3">
                    <img src="{{ asset('images/1.png') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>
            </div>

            <input id="slide-dot-23" type="radio" name="slides8" style="display: none">
            <div class="slide slide-2">

                <div class="slide-img">
                    <img src="{{ asset('images/2 .jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>


                <div class="slide-img">
                    <img src="{{ asset('images/2 .jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>



                <div class="slide-img slide_cont-3">
                    <img src="{{ asset('images/2 .jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>


            </div>

            <input id="slide-dot-24" type="radio" name="slides8" style="display: none">
            <div class="slide slide-3">

                <div class="slide-img">
                    <img src="{{ asset('images/3.jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>



                <div class="slide-img">
                    <img src="{{ asset('images/3.jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>



                <div class="slide-img slide_cont-3">
                    <img src="{{ asset('images/3.jpg') }}">
                    <p class="product-name">PNY gtx 560 4gb</p>
                    <p class="price">3 599 ₴</p>
                </div>
            </div>
        </div>

    </div>
@endsection
<?php $connect->close(); ?>
