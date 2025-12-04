<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Catalogue</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="books">
    <div class="book-slider">
        <div class="book">
            @foreach($authorship as $catalog)
                <a class="book-cover" href="{{ route('bookPage') }}">
                    <img src="{{ asset('storage/cover_images/' . basename($catalog->book->cover_image)) }}"
                         alt="нет обложки">
                    <h4>{{ $catalog->author->name }} {{ $catalog->author->surname }}
                        <br> {{ $catalog->book->title }}</h4>
                </a>
                <div class="book-order-btns">
                    <button class="to-bag-btn">В корзину</button>
                    <button class="heart-btn">
                        <img src="img/icons/heart-sm.svg" alt="fav">
                    </button>
                </div>

            @endforeach
        </div>
    </div>
</div>
</body>
</html>