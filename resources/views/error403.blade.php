<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 403</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
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
    <div class="error">
        <h1>403</h1>
        <img src="img/white-lines.svg" alt="style">
        <h4>Forbidden</h4>
    </div>
</main>
</body>
</html>