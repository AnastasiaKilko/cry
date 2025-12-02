<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<header>
    <div class="header-block">
        <a href={{ route('welcome') }}><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
        <div class="nav-and-search">
            <nav>
                <a href={{ route('createBook') }}>Добавить книгу</a>
                <a href="#">Управление заказами</a>
                <a href="#">Помощь</a>
            </nav>
            <div class="search-line">
                <form>
                    <input type="text" name="search" placeholder="Введите текст...">
                </form>
                <img src="{{ asset('img/icons/search.svg') }}" alt="search">
            </div>
        </div>
        <div class="icons">
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

</body>
</html>
