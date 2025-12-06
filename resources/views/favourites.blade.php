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
            @if($favourites->isEmpty())
                <br><br>
                <p>Здесь пока ничего нет. Чтобы добавить книгу в корзину, перейдите в Каталог или Электронную
                    библиотку.</p>
                <div class="catalogue-btns">
                    <a href="{{route('catalogue')}}">
                        <button class="yellow-btn">Каталог</button>
                    </a>
                    <a href="{{route('eCatalogue')}}">
                        <button class="blue-btn">Электронная библиотека</button>
                    </a>
                </div>
            @else
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
                    @foreach($favourites as $fav)
                        <tr>
                            <td>{{ $fav->authorship->author->name }} {{ $fav->authorship->author->surname }}</td>
                            <td>{{ $fav->authorship->book->title }}</td>
                            <td>
                                <img src="{{ asset('storage/icons/' . basename($fav->authorship->book->booksType->type_img)) }}"
                                     alt="нет иконки"></td>
                            <td>{{ number_format($fav->authorship->book->price) }} ₽</td>
                            <td>
                                <button class="to-bag-btn">В корзину</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </main>
    @include('footer')
</div>

</body>
</html>