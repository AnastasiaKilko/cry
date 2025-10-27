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
                    <a href="book-page.html"><img src="img/bookcover1.jpg" alt="А.С.Пушкин, Евгений Онегин"></a>
                    <div class="day-book-info">
                        <div class="day-book-desc">
                            <h3>Книга дня</h3>
                            <h4>А.С. Пушкин "Евгений Онегин"</h4>
                            <p>Великий роман в ярком современном оформлении. <br>Самый известный роман в стихах А.С.
                                Пушкина
                                назван В.Г. Белинским “энциклопедией русской жизни”.
                                <br>Пушкин писал “Евгения Онегина” больше семи лет и называл работу над книгой
                                подвигом. Каждая глава издавалась отдельным выпуском и становилась событием
                                литературной жизни. В истории молодого повесы Онегина каждое поколение открывает
                                что-то новое там, где все казалось ясным.</p>
                        </div>
                        <div class="day-book-order-block">
                            <div class="day-book-price">
                                <h5>650 ₽</h5>
                                <h4>450 ₽</h4>
                            </div>
                            <button class="to-bag-btn">В корзину</button>
                        </div>
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