<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Profile</title>
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
                    <button class="logout-button" type="submit"><a class="icon" href={{ route('login') }}>
                            <img src="img/icons/logout.svg" alt="logout">
                            <p>Выйти</p>
                        </a></button>
                </form>
            </div>
        </div>
    </header>
    <main>
        <div class="profile">
            <h2>Личный кабинет</h2>
            <div class="profile-info">
                <h3>Личные данные</h3>
                <div class="profile-info-data">
                    <div class="profile-info-data-main">
                        <p>Килко Анастасия Валериевна</p>
                        <p>+7 (913) 100-24-49 · anastasia.kilko@yandex.ru</p>
                    </div>
                    <button onclick="document.location='change-personal-data-modal.html'" class="yellow-btn">Редактировать</button>
                </div>
            </div>
            <div class="profile-orders">
                <div class="catalogue-heading">
                    <h3>Активные заказы</h3>
                    <img src="img/icons/paper-book.svg" alt="paper book">
                </div>
                <p>У вас пока нет активных заказов</p>
            </div>
            <div class="profile-e-books">
                <div class="catalogue-heading">
                    <h3>Ваши электронные книги</h3>
                    <img src="img/icons/e-book.svg" alt="paper book">
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>Автор</th>
                        <th>Название</th>
                        <th>Прогресс</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>А.С. Пушкин</td>
                        <td>Евгений Онегин</td>
                        <td>1%</td>
                        <td>
                            <a href="e-book-reader.html"><button class="blue-btn">Читать</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>О. Уальд</td>
                        <td>Портрет Дориана Грея</td>
                        <td>54%</td>
                        <td>
                            <a href="/"><button class="blue-btn">Читать</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Н. Сакавич</td>
                        <td>Лисья Нора</td>
                        <td>0%</td>
                        <td>
                            <a href="/"><button class="blue-btn">Читать</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Мосян Тунсю</td>
                        <td>Благословение небожителей том 4</td>
                        <td>0%</td>
                        <td>
                            <a href="/"><button class="blue-btn">Читать</button></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
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