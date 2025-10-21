<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: E-Book-reader</title>
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
                        <input type="text" name="search" placeholder="Введите текст..." size="100vw">
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
        <div class="e-book-head">
            <h3>А.С. Пушкин Евгений Онегин</h3>
            <div class="e-book-settings">
                <div class="e-book-setting">
                    <img src="img/icons/help.svg" alt="help">
                    <p>помощь</p>
                </div>
                <div class="e-book-setting">
                    <img src="img/icons/contents.svg" alt="contents">
                    <p>оглавление</p>
                </div>
                <div class="e-book-setting">
                    <img src="img/icons/settings.svg" alt="settings">
                    <p>настройки</p>
                </div>
                <div class="e-book-setting">
                    <img src="img/icons/bookmarks.svg" alt="bookmarks">
                    <p>закладки</p>
                </div>
                <div class="e-book-setting">
                    <img src="img/icons/add-bookmark.svg" alt="add bookmark">
                    <p>добавить<br> закладку</p>
                </div>
            </div>
        </div>
        <div class="e-book-text">
            <h5>ГЛАВА ПЕРВАЯ<br></h5>
            <i>И жить торопится, и чувствовать спешит.<br></i>
            <p>Кн. Вяземский.<br><br></p>
            <p>I<br></p>
            <p>«Мой дядя самых честных правил,<br></p>
            <p>Когда не в шутку занемог,<br></p>
            <p>Он уважать себя заставил<br></p>
            <p>И лучше выдумать не мог.<br></p>
            <p>Его пример другим наука;<br></p>
            <p>Но, боже мой, какая скука<br></p>
            <p>С больным сидеть и день и ночь,<br></p>
            <p>Не отходя ни шагу прочь!<br></p>
            <p>Какое низкое коварство<br></p>
            <p>Полуживого забавлять,<br></p>
            <p>Ему подушки поправлять,<br></p>
            <p>Печально подносить лекарство,<br></p>
            <p>Вздыхать и думать про себя:<br></p>
            <p>Когда же черт возьмет тебя!»<br><br></p>
            <p>II<br></p>
            <p>Так думал молодой повеса,<br></p>
            <p>Летя в пыли на почтовых,<br></p>
            <p>Всевышней волею Зевеса<br></p>
            <p>Наследник всех своих родных.<br></p>
            <p>Друзья Людмилы и Руслана!<br></p>
            <p>С героем моего романа<br></p>
            <p>Без предисловий, сей же час<br></p>
            <p>Позвольте познакомить вас:<br></p>
            <p>Онегин, добрый мой приятель,<br></p>
            <p>Родился на брегах Невы,<br></p>
            <p>Где, может быть, родились вы<br></p>
            <p>Или блистали, мой читатель;<br></p>
            <p>Там некогда гулял и я:<br></p>
            <p>Но вреден север для меня.<br></p>
        </div>
        <div class="e-book-slider">
            <img src="img/button-icons/left_icon.svg" alt="previous">
            <img src="img/button-icons/right_icon.svg" alt="next">
        </div>

        <div class="e-book-scale">
            <h5>1/345</h5>
            <div class="progress-scale"></div>
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