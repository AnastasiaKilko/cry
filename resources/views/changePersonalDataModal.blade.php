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
    <a href="profile.html"><img src="img/button-icons/close.svg" alt="close"></a>
    <h2>Редактировать личные данные</h2>
    <form>
        <fieldset class="personal-data">
            <legend>Ваши данные</legend>
            <label for="full-name">Введите новое имя</label><br>
            <input type="text" id="full-name" placeholder="Иванов Иван Иванович"><br><br>
            <label for="login">Введите новый логин</label><br>
            <input type="text" id="login" placeholder="exampleLogin2000"><br><br>
            <label for="phone-number">Введите новый номер телефона</label><br>
            <input type="tel" id="phone-number" placeholder="+7(999)123-45-67"><br><br>
            <label for="email">Введите новый email</label><br>
            <input type="email" id="email" placeholder="example@mail.com"><br><br>
            <label for="pass1">Введите новый пароль</label><br>
            <input type="password" id="pass1"><br><br>
            <label for="pass2">Повторите новый пароль</label><br>
            <input type="password" id="pass2"><br><br>
            <button class="yellow-btn" type="submit">Сохранить</button>
            <button type="reset">Очистить форму</button>
        </fieldset>
    </form>
</div>
</body>
</html>