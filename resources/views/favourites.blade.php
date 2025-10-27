<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Favourites</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="wrapper">
    @include('header')
    <main>
        <div class="favourites">
            <h2>Избранное</h2>
            <table>
                <thead>
                <tr>
                    <th>Автор</th>
                    <th>Название</th>
                    <th>Вид книги</th>
                    <th>Цена</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>А.С. Пушкин</td>
                    <td>Евгений Онегин</td>
                    <td><img src="img/icons/paper-book.svg" alt="paper book"></td>
                    <td>650 ₽</td>
                    <td>
                        <button class="to-bag-btn">В корзину</button>
                    </td>
                </tr>
                <tr>
                    <td>О. Уальд</td>
                    <td>Портрет Дориана Грея</td>
                    <td><img src="img/icons/e-book.svg" alt="e-book"></td>
                    <td>390 ₽</td>
                    <td>
                        <button class="to-bag-btn">В корзину</button>
                    </td>
                </tr>
                <tr>
                    <td>Н. Сакавич</td>
                    <td>Лисья Нора</td>
                    <td><img src="img/icons/e-book.svg" alt="e-book"></td>
                    <td>640 ₽</td>
                    <td>
                        <button class="to-bag-btn">В корзину</button>
                    </td>
                </tr>
                <tr>
                    <td>Мосян Тунсю</td>
                    <td>Благословение небожителей том 4</td>
                    <td><img src="img/icons/paper-book.svg" alt="paper book"></td>
                    <td>1250 ₽</td>
                    <td>
                        <button class="to-bag-btn">В корзину</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </main>
    @include('footer')
</div>

</body>
</html>