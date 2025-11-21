<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change your profile</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="modal-window">
    <a href="#"><img src="{{ asset('img/button-icons/close.svg') }}" alt="close"></a>
    <h2>Редактировать личные данные</h2>
    <form action="{{route('register')}}" method="post">
        @csrf
        <fieldset class="personal-data">
            <legend>Ваши данные</legend>
            @error('surname')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label for="surname">Введите новую фамилию</label><br>
            <input type="text" id="surname" placeholder="Иванов" name="surname"><br><br>
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label for="name">Введите новое имя</label><br>
            <input type="text" id="name" placeholder="Иван" name="name"><br><br>
            @error('patronymic')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label for="patronymic">Введите новое отчество</label><br>
            <input type="text" id="patronymic" placeholder="Иванович" name="patronymic"><br><br>
            @error('login')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label for="login">Введите новый логин</label><br>
            <input type="text" id="login" placeholder="exampleLogin2000" name="login"><br><br>
            @error('phone_number')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label for="phone_number">Введите новый номер телефона</label><br>
            <input type="tel" id="phone_number" placeholder="+7(999)123-45-67" name="phone_number"><br><br>
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label for="email">Введите новый email</label><br>
            <input type="email" id="email" placeholder="example@mail.com" name="email"><br><br>
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label for="pass1">Введите новый пароль</label><br>
            <input type="password" id="pass1" name="password"><br><br>
            @error('confirm_password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label for="pass2">Повторите новый пароль</label><br>
            <input type="password" id="pass2" name="confirm_password"><br><br>
        </fieldset>
        <button type="reset">Очистить форму</button>
        <button class="yellow-btn" type="submit">Сохранить</button>

    </form>
</div>
</body>
</html>