<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Favourites</title>
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
            </div>
        </div>
    </header>
    <main>
        <div class="favourites">
            <h2>Избранное</h2>
            <table>
                <thead>
                <tr>
                    <th>Автор</th>
                    <th>Название</th>
                    <th>Вид книги</th>
                    <th>Цена</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>А.С. Пушкин</td>
                    <td>Евгений Онегин</td>
                    <td><img src="img/icons/paper-book.svg" alt="paper book"></td>
                    <td>650 ₽</td>
                    <td>
                        <button class="to-bag-btn">В корзину</button>
                    </td>
                </tr>
                <tr>
                    <td>О. Уальд</td>
                    <td>Портрет Дориана Грея</td>
                    <td><img src="img/icons/e-book.svg" alt="e-book"></td>
                    <td>390 ₽</td>
                    <td>
                        <button class="to-bag-btn">В корзину</button>
                    </td>
                </tr>
                <tr>
                    <td>Н. Сакавич</td>
                    <td>Лисья Нора</td>
                    <td><img src="img/icons/e-book.svg" alt="e-book"></td>
                    <td>640 ₽</td>
                    <td>
                        <button class="to-bag-btn">В корзину</button>
                    </td>
                </tr>
                <tr>
                    <td>Мосян Тунсю</td>
                    <td>Благословение небожителей том 4</td>
                    <td><img src="img/icons/paper-book.svg" alt="paper book"></td>
                    <td>1250 ₽</td>
                    <td>
                        <button class="to-bag-btn">В корзину</button>
                    </td>
                </tr>
                </tbody>
            </table>
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