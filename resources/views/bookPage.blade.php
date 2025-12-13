<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Book</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="wrapper">
    @include('header')
    <main>
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
                            @if($catalog->book->booksType->type == 'Бумажная книга')
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
                            @else
                                <tr>
                                    <td>Размер файла, Мб</td>
                                    <td>{{ $catalog->book->filesize }}</td>
                                </tr>
                                <tr>
                                    <td>Формат файла</td>
                                    <td>{{ $catalog->book->file_format }}</td>
                                </tr>
                            @endif
                            <tr>
                                <td>Возрастные ограничения</td>
                                <td>{{ $catalog->book->ageLimit->age_limit_type }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="book-info-main-interaction">
                        <div class="book-info-main-interaction-variables">
                            <img src="{{ asset('storage/icons/' . basename($catalog->book->booksType->type_img)) }}"
                                 alt="нет иконки">
                            <h5>{{ number_format($catalog->book->price) }} ₽</h5>

                        </div>
                        <form action="{{route('addToShoppingBag', ['id' => $catalog->id])}}" method="post">
                            @csrf
                            <button class="to-bag-btn">В корзину</button>
                        </form>
                        <form action="{{route('fav', ['id' => $catalog->id])}}" method="post">
                            @csrf
                            <button class="to-fav-btn">В избранное</button>
                        </form>
                    </div>
                </article>

                <article class="book-info-description">
                    <h3>Описание</h3>
                    <p>{{ $catalog->book->summary }}</p>
                </article>
            @endforeach
        </section>

        <section class="book-reviews">
            <h3>Отзывы</h3>
            <div class="book-reviews-table">
                @foreach($review as $rev)
                    <article class="book-review">
                            <div class="book-review-head">
                                <div class="login-n-date">
                                    <h6>{{ $rev->user->login }}</h6>
                                    <p>21.10.2023</p>
                                </div>
                                <div class="rating-stars-show">
                                    @for($i = 1; $i <= 5; $i++)
                                        <span class="checked-star {{ $i <= $rev->rating ? 'checked-star' : 'unchecked-star'}}">★</span>
                                    @endfor
                                </div>
                            </div>
                            <p>{{ $rev->text }}</p>
                    </article>
                @endforeach
            </div>

            <a class="yellow-btn" href="{{ route('review', $catalog->book->id) }}">Напишите отзыв!</a>
        </section>
    </main>
    @include('footer')
</div>
</body>
</html>