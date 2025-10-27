<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Register</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="wrapper">
    @include('header')
    <main>
        <section class="login-register">
            <h2>Регистрация</h2>
            <form action="{{route('register')}}" method="post">
                @csrf
                <fieldset class="register">
                    <label for="surname">Введите фамилию</label><br>
                    <input type="text" id="surname" placeholder="Иванов" name="surname"><br><br>
                    <label for="name">Введите имя</label><br>
                    <input type="text" id="name" placeholder="Иван" name="name"><br><br>
                    <label for="patronymic">Введите отчество</label><br>
                    <input type="text" id="patronymic" placeholder="Иванович" name="patronymic"><br><br>
                    <label for="login">Введите логин</label><br>
                    <input type="text" id="login" placeholder="exampleLogin2000" name="login"><br><br>
                    <label for="phone-number">Введите номер телефона</label><br>
                    <input type="tel" id="phone-number" placeholder="+7(999)123-45-67" name="phone_number"><br><br>
                    <label for="email">Введите email</label><br>
                    <input type="email" id="email" placeholder="example@mail.com" name="email"><br><br>
                    <label for="pass1">Введите пароль</label><br>
                    <input type="password" id="pass1" name="password"><br><br>
                    <label for="pass2">Повторите пароль</label><br>
                    <input type="password" id="pass2" name="confirm_password"><br><br>
                </fieldset>
                <button class="yellow-btn" type="submit">Зарегистрироваться</button>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </section>
    </main>
    @include('footer')
</div>
</body>
</html>