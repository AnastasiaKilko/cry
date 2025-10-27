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
    @include('header')
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
    @include('footer')
</div>
</body>
</html>