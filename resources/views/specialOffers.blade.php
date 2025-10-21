<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Special offers</title>
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
        <div class="special-offers">
            <h2>Акции</h2>
            <div class="special-offers-info">
                <h5>Добро пожаловать!<br>
                    Скидка на первую покупку 20%<br><br><br>
                    Приобрети карту постоянного читателя и покупай электронные книги или заказывай доставку книг со
                    скидкой!
                </h5>
                <div class="special-offers-buttons">
                    <button class="yellow-btn">Выбрать книгу!</button>
                    <button class="blue-btn">Приобрести карту<br> постоянного читателя</button>
                </div>
            </div>
            <section class="books-of-month">
                <h3>Книги месяца – все по 500!</h3>
                <div class="book-slider">
                    <article class="book">
                        <a class="book-cover" href="book-page.html">
                            <img src="img/book1.jpg" alt="book-cover">
                            <img class="icon" src="img/icons/paper-book.svg" alt="paper-book">
                            <h4>А.С. Пушкин <br>Евгений Онегин</h4>
                        </a>
                    </article>
                    <article class="book">
                        <div class="book-cover">
                            <img src="img/book2.jpg" alt="book-cover">
                            <img class="icon" src="img/icons/e-book.svg" alt="e-book">
                            <h4>Дж.К. Роулинг <br>Гарри Поттер и дары смерти</h4>
                        </div>
                    </article>
                    <article class="book">
                        <div class="book-cover">
                            <img src="img/childbook2.jpg" alt="book-cover">
                            <img class="icon" src="img/icons/e-book.svg" alt="e-book">
                            <h4>Дж.К. Роулинг <br>Гарри Поттер и тайная комната</h4>
                        </div>
                    </article>
                    <article class="book">
                        <div class="book-cover">
                            <img src="img/book4.jpg" alt="book-cover">
                            <img class="icon" src="img/icons/paper-book.svg" alt="paper-book">
                            <h4>О. Уальд <br>Портрет Дориана Грея</h4>
                        </div>
                    </article>
                    <article class="book">
                        <div class="book-cover">
                            <img src="img/childbook10.jpg" alt="book-cover">
                            <img class="icon" src="img/icons/paper-book.svg" alt="paper-book">
                            <h4>К. Чуковский <br>Сказки</h4>
                        </div>
                    </article>
                    <article class="book">
                        <div class="book-cover">
                            <img src="img/book6.jpg" alt="book-cover">
                            <img class="icon" src="img/icons/e-book.svg" alt="e-book">
                            <h4>Мосян Тунсю <br>Благословение небожителей</h4>
                        </div>
                    </article>
                    <article class="book">
                        <div class="book-cover">
                            <img src="img/childbook3.jpg" alt="book-cover">
                            <img class="icon" src="img/icons/paper-book.svg" alt="paper-book">
                            <h4>Л. Кэррол <br>Алиса в стране чудес</h4>
                        </div>
                    </article>
                    <article class="book">
                        <div class="book-cover">
                            <img src="img/book8.jpg" alt="book-cover">
                            <img class="icon" src="img/icons/e-book.svg" alt="e-book">
                            <h4>Л.Н. Толстой <br>Анна Каренина</h4>
                        </div>
                    </article>
                    <article class="book">
                        <div class="book-cover">
                            <img src="img/book9.jpg" alt="book-cover">
                            <img class="icon" src="img/icons/e-book.svg" alt="e-book">
                            <h4>Н. Сакавич <br>Лисья Нора</h4>
                        </div>
                    </article>
                    <article class="book">
                        <div class="book-cover">
                            <img src="img/book10.jpg" alt="book-cover">
                            <img class="icon" src="img/icons/paper-book.svg" alt="paper-book">
                            <h4>Н. Гейман <br>Коралина</h4>
                        </div>
                    </article>
                </div>
            </section>

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