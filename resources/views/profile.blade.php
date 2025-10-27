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
    @include('header')
    <main>
        <div class="profile">
            <h2>Личный кабинет</h2>
            <div class="profile-info">
                <h3>Личные данные</h3>
                <div class="profile-info-data">
                    <div class="profile-info-data-main">
                        <h5>{{ $user->login }}</h5>
                        <p>{{ $user->surname }} {{ $user->name }} {{ $user->patronymic }}</p>
                        <p>{{ $user->phone_number }}</p>
                        <p>{{ $user->email }}</p>
                    </div>
                    <button onclick="document.location='change-personal-data-modal.html'" class="yellow-btn">Редактировать</button>
                </div>
            </div>
            <div class="profile-orders">
                <div class="catalogue-heading">
                    <h3>Активные заказы</h3>
                    <img src="{{ asset('img/icons/paper-book.svg') }}" alt="paper book">
                </div>
                <p>У вас пока нет активных заказов</p>
            </div>
            <div class="profile-e-books">
                <div class="catalogue-heading">
                    <h3>Ваши электронные книги</h3>
                    <img src="{{ asset('img/icons/e-book.svg') }}" alt="e-book">
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
    @include('footer')
</div>
</body>
</html>