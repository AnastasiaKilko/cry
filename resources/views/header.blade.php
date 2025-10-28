<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris</title>
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
                    <img src="{{ asset('img/icons/search.svg') }}" alt="search">
                </div>
            </div>
            <div class="icons">
                @if (Auth::check())
                    <a class="icon" href={{ route('profile',  ['id' => auth()->user()->id]) }}>
                        <img src="{{ asset('img/icons/profile.svg') }}" alt="profile">
                        <p>Профиль</p>
                    </a>
                    <a class="icon" href={{ route('shoppingBag') }}>
                        <img src="{{ asset('img/icons/shopping%20bag.svg') }}" alt="shopping bag">
                        <p>Корзина</p>
                    </a>
                    <a class="icon" href={{ route('favourites') }}>
                        <img src="{{ asset('img/icons/heart.svg') }}" alt="heart">
                        <p>Избранное</p>
                    </a>
                @endif
                @if (!Auth::check())
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <button class="logout-button" type="submit">
                            <img src="{{ asset('img/icons/login.svg') }}" alt="login">
                            <p>Войти</p>
                        </button>
                    </form>
                @endif
                @if (Auth::check())
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="logout-button" type="submit">
                            <img src="{{ asset('img/icons/logout.svg') }}" alt="logout">
                            <p>Выйти</p>
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </header>
</div>
</body>
</html>