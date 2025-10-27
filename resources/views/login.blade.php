<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Log In</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="wrapper">
    @include('header')
    <main>
        <section class="login-register">
            <h2>Вход</h2>
            <form action="{{route('login')}}" method="post">
                @csrf
                <fieldset class="log-in">
                    <label for="login">Введите логин</label><br>
                    <input type="text" id="login" placeholder="Ваш логин" name="login"><br><br>
                    <label for="pass1">Введите пароль</label><br>
                    <input type="password" id="pass1" placeholder="Ваш пароль" name="password"><br><br>
                </fieldset>
                <button class="yellow-btn" type="submit">Войти</button>
            </form>

            <div class="go-to-register">
                <p>Ещё не зарегистрировались?</p>
                <a href={{ route('register') }}>Перейти к регистрации</a>
            </div>
        </section>
    </main>
    @include('footer')
</div>
</body>
</html>