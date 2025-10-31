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
                    @error('surname')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="surname">Введите фамилию</label><br>
                    <input type="text" id="surname" placeholder="Иванов" name="surname"><br><br>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="name">Введите имя</label><br>
                    <input type="text" id="name" placeholder="Иван" name="name"><br><br>
                    @error('patronymic')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="patronymic">Введите отчество</label><br>
                    <input type="text" id="patronymic" placeholder="Иванович" name="patronymic"><br><br>
                    @error('login')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="login">Введите логин</label><br>
                    <input type="text" id="login" placeholder="exampleLogin2000" name="login"><br><br>
                    @error('phone_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="phone_number">Введите номер телефона</label><br>
                    <input type="tel" id="phone_number" placeholder="+7(999)123-45-67" name="phone_number"><br><br>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="email">Введите email</label><br>
                    <input type="email" id="email" placeholder="example@mail.com" name="email"><br><br>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="pass1">Введите пароль</label><br>
                    <input type="password" id="pass1" name="password"><br><br>
                    @error('confirm_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="pass2">Повторите пароль</label><br>
                    <input type="password" id="pass2" name="confirm_password"><br><br>
                </fieldset>
                <button class="yellow-btn" type="submit">Зарегистрироваться</button>
            </form>
        </section>
    </main>
    @include('footer')
</div>
</body>
</html>
