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
    <header>
        <div class="header-block">
            <a href={{ route('welcome') }}><img src="img/logo.png" alt="logo"></a>
            <div class="nav-and-search">
                <nav>
                    <a href={{ route('catalogue') }}>Каталог</a>
                    <a href={{ route('eCatalogue') }}>Электронная библиотека</a>
                    <a href={{ route('aboutUs') }}>О нас</a>
                    <a href={{ route('aboutUs') }}>Доставка</a>
                    <a href={{ route('specialOffers') }}>Акции</a>
                    <a href={{ route('eBookReader') }}>Читалка</a>
                </nav>
                <div class="search-line">
                    <form>
                        <input type="text" name="search" placeholder="Введите текст...">
                    </form>
                    <img src="img/icons/search.svg" alt="search">
                </div>
            </div>
            <div class="icons">
                <a class="icon" href={{ route('login') }}>
                    <img src="img/icons/profile.svg" alt="profile">
                    <p>Профиль</p>
                </a>
                <a class="icon" href={{ route('shoppingBag') }}>
                    <img src="img/icons/shopping%20bag.svg" alt="shopping bag">
                    <p>Корзина</p>
                </a>
                <a class="icon" href={{ route('favourites') }}>
                    <img src="img/icons/heart.svg" alt="heart">
                    <p>Избранное</p>
                </a>
            </div>
        </div>
    </header>
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
    <footer>
        <div class="footer-bg">
            <div class="footer-block">
                <div class="footer-info">
                    <div class="footer-info-text">
                        <h3>Книжный интернет-магазин Ex Libris</h3>
                        <p>Ex Libris – это книжный магазин, осуществляющий доставку книг по всей России.
                            <br><br>А ещё это – магазин электронных книг, которые Вы можете читать прямо на нашем сайте.
                        </p>
                    </div>
                    <p>© 2024, Ex Libris</p>
                </div>
                <div class="footer-contacts">
                    <div class="footer-contacts-text">
                        <h3>Контакты</h3>
                        <div class="footer-contacts-text-p">
                            <p>Номер телефона: +7-913-100-24-49</p>
                            <p>E-mail: exlibris.shop@gmail.com</p>
                            <p>Время работы: <br>ПН–ПТ с 10:00 до 20:00
                                <br>СБ–ВС с 11:00 до 18:00</p>
                        </div>
                    </div>
                    <div class="network-icons">
                        <img class="network-icon" src="img/icons/yt.png" alt="youtube">
                        <img class="network-icon" src="img/icons/wa.png" alt="whatsapp">
                        <img class="network-icon" src="img/icons/vk.png" alt="vkontakte">
                        <img class="network-icon" src="img/icons/tg.png" alt="telegram">
                    </div>
                </div>
                <div class="footer-map">
                    <img src="img/map.jpg" alt="map">
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>