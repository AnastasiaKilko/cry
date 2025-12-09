<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Catalogue</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="day-book">
    @foreach($authorship as $catalog)
        <img src="{{ asset('storage/cover_images/' . basename($catalog->book->cover_image)) }}"
             alt="нет обложки">
        <div class="day-book-info">
            <div class="day-book-desc">
                <div class="book-type-pic">
                    <h3>Книга дня</h3>
                    <img src="{{ asset('storage/icons/' . basename($catalog->book->booksType->type_img)) }}" alt="нет иконки">
                </div>


                <h4>{{ $catalog->author->name }} {{ $catalog->author->surname }}
                    "{{ $catalog->book->title }}"</h4>
                <p>{{ $catalog->book->summary }}</p>
            </div>
            <div class="day-book-order-block">
                <div class="day-book-price">
                    <h5>{{ number_format($catalog->book->price) }} ₽</h5>
                    <h4>{{ number_format($sale) }} ₽</h4>
                </div>
                <button class="to-bag-btn">В корзину</button>
            </div>
            @endforeach
        </div>
</div>


{{--<section class="book-info">--}}
{{--    @foreach($authorship as $catalog)--}}
{{--        <article class="book-info-main">--}}
{{--            <img src="{{ asset('storage/cover_images/' . basename($catalog->book->cover_image)) }}"--}}
{{--                 alt="нет обложки">--}}
{{--            <div class="book-info-main-table">--}}
{{--                <h3>{{ $catalog->author->name }} {{ $catalog->author->patronymic }} {{ $catalog->author->surname }}--}}
{{--                    <br> {{ $catalog->book->title }}</h3>--}}
{{--                <table>--}}
{{--                    <tbody>--}}

{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}


{{--            <div class="book-info-main-interaction">--}}
{{--                <div class="book-info-main-interaction-variables">--}}
{{--                    @if($catalog->book->booksType->type == 'Бумажная книга')--}}
{{--                        <img src="{{ asset('img/icons/paper-book.svg') }}" alt="paper book">--}}
{{--                    @else--}}
{{--                        <img src="{{ asset('img/icons/e-book.svg') }}" alt="e-book">--}}
{{--                    @endif--}}
{{--                    <h5>{{ number_format($catalog->book->price) }} ₽</h5>--}}

{{--                </div>--}}
{{--                <button class="to-bag-btn">В корзину</button>--}}
{{--                <button class="to-fav-btn">В избранное</button>--}}
{{--            </div>--}}
{{--        </article>--}}

{{--        <article class="book-info-description">--}}
{{--            <h3>Описание</h3>--}}
{{--            <p>{{ $catalog->book->summary }}</p>--}}
{{--        </article>--}}
{{--    @endforeach--}}

{{--</section>--}}
</body>
</html>