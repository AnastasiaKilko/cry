<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change your profile</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="wrapper">
    @include('header')
    <main>
        <div class="modal-window">
{{--            <a href="#"><img src="{{ asset('img/button-icons/close.svg') }}" alt="close"></a>--}}
            <h2>Редактировать личные данные</h2>
            <form action="{{route('update')}}" method="post">
                @csrf
                @method('PUT')
                <fieldset class="personal-data">
                    <legend>Ваши данные</legend>
                    @error('surname')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="surname">Введите новую фамилию</label><br>
                    <input type="text" id="surname" value="{{ old('surname', Auth::user()->surname) }}"
                           placeholder="{{Auth::user()->surname}}" name="surname"><br><br>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="name">Введите новое имя</label><br>
                    <input type="text" id="name" value="{{ old('name', Auth::user()->name) }}"
                           placeholder="{{Auth::user()->name}}" name="name"><br><br>
                    @error('patronymic')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="patronymic">Введите новое отчество</label><br>
                    <input type="text" id="patronymic" value="{{ old('patronymic', Auth::user()->patronymic) }}"
                           placeholder="{{Auth::user()->patronymic}}" name="patronymic"><br><br>
                    @error('login')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="login">Введите новый логин</label><br>
                    <input type="text" id="login" value="{{ old('login', Auth::user()->login) }}"
                           placeholder="{{Auth::user()->login}}" name="login"><br><br>
                    @error('phone_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="phone_number">Введите новый номер телефона</label><br>
                    <input type="tel" id="phone_number" value="{{ old('phone_number', Auth::user()->phone_number) }}"
                           placeholder="{{Auth::user()->phone_number}}" name="phone_number"><br><br>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="email">Введите новый email</label><br>
                    <input type="email" id="email" value="{{ old('email', Auth::user()->email) }}"
                           placeholder="{{Auth::user()->email}}" name="email"><br><br>
                </fieldset>
                <div class="form-btns">
                    <a href="{{ route('profile', ['id' => Auth::user()->id]) }}" class="reset-btn">Отмена</a>
                    <button class="yellow-btn" type="submit">Сохранить</button>
                </div>
            </form>
        </div>
    </main>
    @include('footer')
</div>
</body>
</html>