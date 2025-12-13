<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Catalogue</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="wrapper">
    @include('header')
    <main>
        <div class="catalogue">
            <div class="catalogue-heading">
                <h2>Каталог</h2>
                <img src="img/icons/paper-book.svg" alt="paper book">
            </div>
            <section class="books">
                {{ $authorship->links('vendor.pagination.left') }}

                <div class="book-slider">
                    @foreach($authorship as $catalog)
                        <div class="book">
                            <a class="book-cover" href="{{ route('bookPage', ['id' => $catalog->book->id]) }}">
                                <img src="{{ asset('storage/cover_images/' . basename($catalog->book->cover_image)) }}"
                                     alt="нет обложки">
                                <h4>{{ $catalog->author->name }} {{ $catalog->author->surname }}
                                    <br> {{ $catalog->book->title }}</h4>
                            </a>
                            <h5>{{ number_format($catalog->book->price) }} ₽</h5>
                            <div class="book-order-btns">
                                <form action="{{route('addToShoppingBag', ['id' => $catalog->id])}}" method="post">
                                    @csrf
                                    <button class="to-bag-btn">В корзину</button>
                                </form>
                                <form action="{{route('fav', ['id' => $catalog->id])}}" method="post">
                                    @csrf
                                    <button class="heart-btn">
                                        <img src="img/icons/heart-sm.svg" alt="fav">
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            {{ $authorship->links('vendor.pagination.right') }}
            </section>
            {{ $authorship->links('vendor.pagination.dots') }}
        </div>
    </main>
    @include('footer')
</div>
</body>
</html>