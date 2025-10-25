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
                <a class="icon" href={{ route('profile') }}>
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
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="logout-button" type="submit">
                        <img src="img/icons/logout.svg" alt="logout">
                        <p>Выйти</p>
                    </button>
                </form>
            </div>
        </div>
    </header>
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