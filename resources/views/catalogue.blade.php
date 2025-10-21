<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Catalogue</title>
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
        <div class="catalogue">
            <div class="catalogue-heading">
                <h2>Каталог</h2>
                <img src="img/icons/paper-book.svg" alt="paper book">
            </div>
            <section class="genres">
                <h3>Художественная литература</h3>
                <div class="books">
                    <a><img src="img/button-icons/left.svg" alt="previous"></a>
                    <div class="book-slider">
                        <div class="book">
                            <a class="book-cover" href="book-page.html">
                                <img src="img/book1.jpg" alt="book-cover">
                                <h4>А.С. Пушкин <br>Евгений Онегин</h4>
                            </a>
                            <h5>650 ₽</h5>
                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </div>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/book2.jpg" alt="book-cover">
                                <h4>Дж.К. Роулинг <br>Гарри Поттер и дары смерти</h4>
                            </div>
                            <h5>1350 ₽</h5>
                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/book3.jpg" alt="book-cover">
                                <h4>С. Моэм <br>Театр</h4>
                            </div>
                            <h5>820 ₽</h5>

                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/book4.jpg" alt="book-cover">
                                <h4>О. Уальд <br>Портрет Дориана Грея</h4>
                            </div>
                            <h5>690 ₽</h5>

                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/book5.jpg" alt="book-cover">
                                <h4>М.А. Булгаков <br>Мастер и Маргарита</h4>
                            </div>
                            <h5>780 ₽</h5>

                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/book6.jpg" alt="book-cover">
                                <h4>Мосян Тунсю <br>Благословение небожителей</h4>
                            </div>
                            <h5>1250 ₽</h5>

                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/book7.jpg" alt="book-cover">
                                <h4>Ж.П. Сартр <br>Тошнота</h4>
                            </div>
                            <h5>750 ₽</h5>

                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/book8.jpg" alt="book-cover">
                                <h4>Л.Н. Толстой <br>Анна Каренина</h4>
                            </div>
                            <h5>620 ₽</h5>

                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/book9.jpg" alt="book-cover">
                                <h4>Н. Сакавич <br>Лисья Нора</h4>
                            </div>
                            <h5>890 ₽</h5>

                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/book10.jpg" alt="book-cover">
                                <h4>Н. Гейман <br>Коралина</h4>
                            </div>
                            <h5>780 ₽</h5>

                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                    </div>
                    <a><img src="img/button-icons/right.svg" alt="next"></a>

                </div>
                <div class="pagination">
                    <div class="inactive-circle"></div>
                    <div class="active-circle1"></div>
                    <div class="inactive-circle"></div>
                    <div class="inactive-circle"></div>
                    <div class="inactive-circle"></div>
                    <div class="inactive-circle"></div>
                </div>
                <h3>Книги для детей</h3>

                <div class="books">
                    <a><img src="img/button-icons/left.svg" alt="previous"></a>
                    <div class="book-slider">
                        <div class="book">
                            <div class="book-cover">
                                <img src="img/childbook1.jpg" alt="book-cover">
                                <h4>А. Экзюпери <br>Маленький принц</h4>
                            </div>
                            <h5>490 ₽</h5>
                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </div>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/childbook2.jpg" alt="book-cover">
                                <h4>Дж.К. Роулинг <br>Гарри Поттер и тайная комната</h4>
                            </div>
                            <h5>1350 ₽</h5>
                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/childbook3.jpg" alt="book-cover">
                                <h4>Л. Кэррол <br>Алиса в стране чудес</h4>
                            </div>
                            <h5>820 ₽</h5>

                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/childbook4.jpg" alt="book-cover">
                                <h4>Н. Жукова <br>Букварь</h4>
                            </div>
                            <h5>390 ₽</h5>

                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/childbook5.jpg" alt="book-cover">
                                <h4>Г.Х. Андерсон <br>Русалочка</h4>
                            </div>
                            <h5>580 ₽</h5>

                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/childbook6.jpg" alt="book-cover">
                                <h4>Энциклопедия для детей: <br>Кошки</h4>
                            </div>
                            <h5>1200 ₽</h5>

                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/childbook7.jpg" alt="book-cover">
                                <h4>Е. Колесникова <br>Я считаю до пяти</h4>
                            </div>
                            <h5>450 ₽</h5>

                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/childbook8.jpg" alt="book-cover">
                                <h4>Л.Н. Толстой <br>Филипок</h4>
                            </div>
                            <h5>620 ₽</h5>

                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/childbook9.jpg" alt="book-cover">
                                <h4>Финансовая грамотность для детей</h4>
                            </div>
                            <h5>890 ₽</h5>

                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                        <article class="book">
                            <div class="book-cover">
                                <img src="img/childbook10.jpg" alt="book-cover">
                                <h4>К. Чуковский <br>Сказки</h4>
                            </div>
                            <h5>1280 ₽</h5>

                            <div class="book-order-btns">
                                <button class="to-bag-btn">В корзину</button>
                                <button class="heart-btn">
                                    <img src="img/icons/heart-sm.svg" alt="fav">
                                </button>
                            </div>
                        </article>
                    </div>
                    <a><img src="img/button-icons/right.svg" alt="next"></a>

                </div>
                <div class="pagination">
                    <div class="inactive-circle"></div>
                    <div class="active-circle1"></div>
                    <div class="inactive-circle"></div>
                    <div class="inactive-circle"></div>
                    <div class="inactive-circle"></div>
                    <div class="inactive-circle"></div>
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