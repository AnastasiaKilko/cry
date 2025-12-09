<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Main page</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    @include('header')
    <main>
        <section class="banner">
            <div class="banner-all">
                <h1>Библиотека в твоём доме <br>и в твоём телефоне</h1>
            </div>
        </section>
        <section class="book-block">
            <div class="book-block">
                <div class="day-book">
                    @foreach($authorship as $catalog)
                        <img src="{{ asset('storage/cover_images/' . basename($catalog->book->cover_image)) }}"
                             alt="нет обложки">
                        <div class="day-book-info">
                            <div class="day-book-desc">
                                <div class="book-type-pic">
                                    <h3>Книга дня</h3>
                                    <img src="{{ asset('storage/icons/' . basename($catalog->book->booksType->type_img)) }}" alt="нет иконки">
                                </div>


                                <h4>{{ $catalog->author->name }} {{ $catalog->author->surname }}
                                    "{{ $catalog->book->title }}"</h4>
                                <p>{{ $catalog->book->summary }}</p>
                            </div>
                            <div class="day-book-order-block">
                                <div class="day-book-price">
                                    <h5>{{ number_format($catalog->book->price) }} ₽</h5>
                                    <h4>{{ number_format($sale) }} ₽</h4>
                                </div>
                                <button class="to-bag-btn">В корзину</button>
                            </div>
                            @endforeach
                        </div>
                </div>
                <div class="main-buttons">
                    <button onclick="document.location='error403.html'" class="blue-btn">Хиты продаж</button>
                    <button onclick="document.location='error404.html'" class="blue-btn">Новинки</button>
                    <button onclick="document.location='error404.html'" class="blue-btn">Предзаказ</button>
                </div>
            </div>
        </section>
        <section class="catalogue-main-page">
            <div class="catalogue-btns">
                <button onclick="document.location='catalogue.html'" class="yellow-btn">Каталог</button>
                <button onclick="document.location='e-catalogue.html'" class="blue-btn">Электронная библиотека</button>
            </div>
            <div class="catalogue-genres">
                <a><img src="img/button-icons/left.svg" alt="previous"></a>
                <div class="catalogue-slider">
                    <div class="genre">
                        <img src="img/genre1.jpg" alt="fiction">
                        <h6>Художественная литература</h6>
                    </div>
                    <div class="genre">
                        <img src="img/genre2.jpg" alt="study">
                        <h6>Учебная литература</h6>
                    </div>
                    <div class="genre">
                        <img src="img/genre3.jpg" alt="children">
                        <h6>Книги для детей</h6>
                    </div>
                    <div class="genre">
                        <img src="img/genre4.jpg" alt="foreign">
                        <h6>Зарубежная литература</h6>
                    </div>
                </div>
                <a><img src="img/button-icons/right.svg" alt="next"></a>
            </div>
        </section>
        <a class="up-btn"><img src="img/button-icons/up.svg" alt="up"></a>
    </main>
    @include('footer')
</div>
</body>
</html>