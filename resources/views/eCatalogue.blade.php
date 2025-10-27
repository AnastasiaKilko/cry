<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: E-Catalogue</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="wrapper">
    @include('header')
    <main>
        <div class="catalogue">
            <div class="catalogue-heading">
                <h2>Библиотека электронных книг</h2>
                <img src="img/icons/e-book.svg" alt="paper book">
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
                            <h5>350 ₽</h5>
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
                            <h5>680 ₽</h5>
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
                            <h5>320 ₽</h5>

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
                                <img src="img/book5.jpg" alt="book-cover">
                                <h4>М.А. Булгаков <br>Мастер и Маргарита</h4>
                            </div>
                            <h5>480 ₽</h5>

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
                                <img src="img/book7.jpg" alt="book-cover">
                                <h4>Ж.П. Сартр <br>Тошнота</h4>
                            </div>
                            <h5>250 ₽</h5>

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
                            <h5>320 ₽</h5>

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
                                <img src="img/book10.jpg" alt="book-cover">
                                <h4>Н. Гейман <br>Коралина</h4>
                            </div>
                            <h5>380 ₽</h5>

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
                            <h5>290 ₽</h5>
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
                                <img src="img/childbook3.jpg" alt="book-cover">
                                <h4>Л. Кэррол <br>Алиса в стране чудес</h4>
                            </div>
                            <h5>320 ₽</h5>

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
                            <h5>190 ₽</h5>

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
                            <h5>280 ₽</h5>

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
                            <h5>600 ₽</h5>

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
                            <h5>250 ₽</h5>

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
                            <h5>320 ₽</h5>

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
                            <h5>490 ₽</h5>

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
                            <h5>580 ₽</h5>

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
    @include('footer')
</div>
</body>
</html>