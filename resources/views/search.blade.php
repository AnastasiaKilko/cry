<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Search</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
@include('header')
<main>
    <div class="search">
        <h2>Поиск</h2>
        <section class="book-info">
            @foreach($authorship as $catalog)
                <article class="book-info-main">
                    <img src="{{ asset('storage/cover_images/' . basename($catalog->book->cover_image)) }}"
                         alt="нет обложки">
                    <div class="book-info-main-table">
                        <h3>{{ $catalog->author->name }} {{ $catalog->author->patronymic }} {{ $catalog->author->surname }}
                            <br> {{ $catalog->book->title }}</h3>
                        <article class="book-info-description">
                            <h3>Описание</h3>
                            <p>{{ $catalog->book->summary }}</p>
                        </article>
                    </div>
                    <div class="book-info-main-interaction">
                        <div class="book-info-main-interaction-variables">
                            @if($catalog->book->booksType->type == 'Бумажная книга')
                                <img src="{{ asset('img/icons/paper-book.svg') }}" alt="paper book">
                            @else
                                <img src="{{ asset('img/icons/e-book.svg') }}" alt="e-book">
                            @endif
                            <h5>{{ number_format($catalog->book->price) }} ₽</h5>

                        </div>
                        <button class="to-bag-btn">В корзину</button>
                        <button class="to-fav-btn">В избранное</button>
                    </div>
                </article>
                <div class="line"></div>
            @endforeach
        </section>
    </div>

</main>
@include('footer')
</body>
</html>