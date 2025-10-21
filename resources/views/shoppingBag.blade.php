<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Shopping Bag</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="wrapper">
    <header>
        <div class="header-block">
            <a href="main-page.html"><img src="img/logo.png" alt="logo"></a>
            <div class="nav-and-search">
                <nav>
                    <a href="catalogue.html">Каталог</a>
                    <a href="e-catalogue.html">Электронная библиотека</a>
                    <a href="about-us.html">О нас</a>
                    <a href="about-us.html">Доставка</a>
                    <a href="special-offers.html">Акции</a>
                    <a href="e-book-reader.html">Читалка</a>
                </nav>
                <div class="search-line">
                    <form>
                        <input type="text" name="search" placeholder="Введите текст...">
                    </form>
                    <img src="img/icons/search.svg" alt="search">
                </div>
            </div>
            <div class="icons">
                <a class="icon" href="profile.html">
                    <img src="img/icons/profile.svg" alt="profile">
                    <p>Профиль</p>
                </a>
                <a class="icon" href="shopping-bag.html">
                    <img src="img/icons/shopping%20bag.svg" alt="shopping bag">
                    <p>Корзина</p>
                </a>
                <a class="icon" href="favourites.html">
                    <img src="img/icons/heart.svg" alt="heart">
                    <p>Избранное</p>
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="shopping-bag">
            <h2>Корзина</h2>
            <p>Здесь пока ничего нет. Чтобы добавить книгу в корзину, перейдите в Каталог или  Электронную библиотку.</p>
            <div class="catalogue-btns">
                <button onclick="document.location='catalogue.html'" class="yellow-btn">Каталог</button>
                <button onclick="document.location='e-catalogue.html'" class="blue-btn">Электронная библиотека</button>
            </div>
        </div>
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