<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Book</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="wrapper">
    @include('header')
    <main>
        <section class="book-info">
            <article class="book-info-main">
                <img src="img/bookcover1.jpg" alt="А.С.Пушкин, Евгений Онегин">
                <div class="book-info-main-table">
                    <h3>А.С.Пушкин Евгений Онегин</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td>ID товара</td>
                            <td>2976790</td>
                        </tr>
                        <tr>
                            <td>Издательство</td>
                            <td>Манн, Иванов и Фербер</td>
                        </tr>
                        <tr>
                            <td>Год издания</td>
                            <td>2023</td>
                        </tr>
                        <tr>
                            <td>ISBN</td>
                            <td>978-5-00195-977-9</td>
                        </tr>
                        <tr>
                            <td>Количество страниц</td>
                            <td>288</td>
                        </tr>
                        <tr>
                            <td>Размер</td>
                            <td>21x13.1x2.1</td>
                        </tr>
                        <tr>
                            <td>Тип обложки</td>
                            <td>Твердый переплёт</td>
                        </tr>
                        <tr>
                            <td>Тираж</td>
                            <td>9000</td>
                        </tr>
                        <tr>
                            <td>Вес, г</td>
                            <td>370</td>
                        </tr>
                        <tr>
                            <td>Вес, Мб</td>
                            <td>78</td>
                        </tr>
                        <tr>
                            <td>Возрастные ограничения</td>
                            <td>12+</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="book-info-main-interaction">
                    <div class="book-info-main-interaction-variables">
                        <div class="paper-book">
                            <img src="img/icons/paper-book.svg" alt="paper book">
                            <h5>650 ₽</h5>
                        </div>
                        <div class="e-book">
                            <img src="img/icons/e-book.svg" alt="e-book">
                            <h5>350 ₽</h5>
                        </div>
                    </div>
                    <button class="to-bag-btn">В корзину</button>
                    <button class="to-fav-btn">В избранное</button>
                </div>

            </article>
            <article class="book-info-description">
                <h3>Описание</h3>
                <p>Великий роман в ярком современном оформлении. Самый известный роман в стихах А.С.
                    Пушкина назван В.Г. Белинским “энциклопедией русской жизни”.
                    <br>Пушкин писал “Евгения Онегина” больше семи лет и называл работу над книгой
                    подвигом. Каждая глава издавалась отдельным выпуском и становилась событием
                    литературной жизни. В истории молодого повесы Онегина каждое поколение открывает
                    что-то новое там, где все казалось ясным.</p>
            </article>
        </section>
        <section class="book-reviews">
            <h3>Отзывы</h3>
            <div class="book-reviews-table">
                <article class="book-review">
                    <div class="book-review-pic-date">
                        <img src="img/icons/profile-circle.svg" alt="profile picture">
                        <p>21.10.2023</p>
                    </div>
                    <div class="book-review-main">
                        <div class="book-review-head">
                            <h6>Имя Автора отзыва</h6>
                            <div class="rating-stars-show">
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                            </div>
                        </div>
                        <p>Положительный отзыв очень крутая книга! Пушкин наше всё </p>
                    </div>
                </article>
                <article class="book-review">
                    <div class="book-review-pic-date">
                        <img src="img/icons/profile-circle.svg" alt="profile picture">
                        <p>21.10.2023</p>
                    </div>
                    <div class="book-review-main">
                        <div class="book-review-head">
                            <h6>Имя Автора отзыва</h6>
                            <div class="rating-stars-show">
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="unchecked-star">★</p>
                            </div>
                        </div>
                        <p>А чё так дорого </p>
                    </div>
                </article>
                <article class="book-review">
                    <div class="book-review-pic-date">
                        <img src="img/icons/profile-circle.svg" alt="profile picture">
                        <p>21.10.2023</p>
                    </div>
                    <div class="book-review-main">
                        <div class="book-review-head">
                            <h6>Имя Автора отзыва</h6>
                            <div class="rating-stars-show">
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                            </div>
                        </div>
                        <p>Книга огонь, доставили быстро и всё такое </p>
                    </div>
                </article>
                <article class="book-review">
                    <div class="book-review-pic-date">
                        <img src="img/icons/profile-circle.svg" alt="profile picture">
                        <p>21.10.2023</p>
                    </div>
                    <div class="book-review-main">
                        <div class="book-review-head">
                            <h6>Имя Автора отзыва</h6>
                            <div class="rating-stars-show">
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                            </div>
                        </div>
                        <p>Шикарное издание просто пушка! Мне так нравится, так нравится, не могу сдерждать слёз! Книга - восторг! Ваш магазин - восторг! Была бы моя воля, поставила бы 100 звёзд!</p>
                    </div>
                </article>
            </div>
            <button onclick="document.location='review-modal-page.html'" class="yellow-btn">Напишите отзыв!</button>
        </section>
    </main>
    @include('footer')
</div>
</body>
</html>