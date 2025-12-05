<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Catalogue</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<section class="book-info">
    @foreach($authorship as $catalog)
        <article class="book-info-main">
            <img src="{{ asset('storage/cover_images/' . basename($catalog->book->cover_image)) }}"
                 alt="нет обложки">
            <div class="book-info-main-table">
                <h3>{{ $catalog->author->name }} {{ $catalog->author->patronymic }} {{ $catalog->author->surname }}
                    <br> {{ $catalog->book->title }}</h3>
                <table>
                    <tbody>
                    <tr>
                        <td>ID товара</td>
                        <td>{{ $catalog->book->id }}</td>
                    </tr>
                    @foreach($publication as $public)
                        <tr>
                            <td>Издательство</td>
                            <td>{{ $public->publisher->publisher_name}}</td>
                        </tr>
                        <tr>
                            <td>Год издания</td>
                            <td>{{ $public->release_year }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td>ISBN</td>
                        <td>{{ $catalog->book->ISBN }}</td>
                    </tr>
                    <tr>
                        <td>Количество страниц</td>
                        <td>{{ $catalog->book->pages }}</td>
                    </tr>
                    <tr>
                        <td>Размер</td>
                        <td>{{ $catalog->book->size }}</td>
                    </tr>
                    <tr>
                        <td>Тип обложки</td>
                        <td>{{ $catalog->book->book_cover }}</td>
                    </tr>
                    <tr>
                        <td>Тираж</td>
                        <td>{{ $catalog->book->copies }}</td>
                    </tr>
                    <tr>
                        <td>Вес, г</td>
                        <td>{{ $catalog->book->weight }}</td>
                    </tr>
                    <tr>
                        <td>Возрастные ограничения</td>
                        <td>{{ $catalog->book->ageLimit->age_limit_type }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>


            <div class="book-info-main-interaction">
                <div class="book-info-main-interaction-variables">
                    <div class="paper-book">
                        <img src="{{ asset('img/icons/paper-book.svg') }}" alt="paper book">
                        <h5>{{ number_format($catalog->book->price) }} ₽</h5>
                    </div>
                    <div class="e-book">
                        <img src="{{ asset('img/icons/e-book.svg') }}" alt="e-book">
                        <h5>350 ₽</h5>
                    </div>
                </div>
                <button class="to-bag-btn">В корзину</button>
                <button class="to-fav-btn">В избранное</button>
            </div>

            @if($catalog->book->booksType->type == 'Бумажная книга')
                <p>1</p>
            @else
                <p>2</p>
@endif


@endforeach


</body>
</html>