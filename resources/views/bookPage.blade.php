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
                            <img src="{{ asset('storage/icons/' . basename($catalog->book->booksType->type_img)) }}" alt="нет иконки">

                            {{--                            @if($catalog->book->booksType->type == 'Бумажная книга')--}}
                            {{--                                <img src="{{ asset('img/icons/paper-book.svg') }}" alt="paper book">--}}
                            {{--                            @else--}}
                            {{--                                <img src="{{ asset('img/icons/e-book.svg') }}" alt="e-book">--}}
                            {{--                            @endif--}}
                            <h5>{{ number_format($catalog->book->price) }} ₽</h5>

                        </div>
                        <button class="to-bag-btn">В корзину</button>
                        <button class="to-fav-btn">В избранное</button>
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
                <article class="book-review">
                    <div class="book-review-pic-date">
                        <img src="{{ asset('img/icons/profile-circle.svg') }}" alt="profile picture">
                        <p>21.10.2023</p>
                    </div>
                    <div class="book-review-main">
                        <div class="book-review-head">
                            <h6>Имя Автора отзыва</h6>
                            <div class="rating-stars-show">
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                            </div>
                        </div>
                        <p>Положительный отзыв очень крутая книга! Пушкин наше всё </p>
                    </div>
                </article>
                <article class="book-review">
                    <div class="book-review-pic-date">
                        <img src="{{ asset('img/icons/profile-circle.svg') }}" alt="profile picture">
                        <p>21.10.2023</p>
                    </div>
                    <div class="book-review-main">
                        <div class="book-review-head">
                            <h6>Имя Автора отзыва</h6>
                            <div class="rating-stars-show">
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="unchecked-star">★</p>
                            </div>
                        </div>
                        <p>А чё так дорого </p>
                    </div>
                </article>
                <article class="book-review">
                    <div class="book-review-pic-date">
                        <img src="{{ asset('img/icons/profile-circle.svg') }}" alt="profile picture">
                        <p>21.10.2023</p>
                    </div>
                    <div class="book-review-main">
                        <div class="book-review-head">
                            <h6>Имя Автора отзыва</h6>
                            <div class="rating-stars-show">
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                            </div>
                        </div>
                        <p>Книга огонь, доставили быстро и всё такое </p>
                    </div>
                </article>
                <article class="book-review">
                    <div class="book-review-pic-date">
                        <img src="{{ asset('img/icons/profile-circle.svg') }}" alt="profile picture">
                        <p>21.10.2023</p>
                    </div>
                    <div class="book-review-main">
                        <div class="book-review-head">
                            <h6>Имя Автора отзыва</h6>
                            <div class="rating-stars-show">
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                                <p class="checked-star">★</p>
                            </div>
                        </div>
                        <p>Шикарное издание просто пушка! Мне так нравится, так нравится, не могу сдерждать слёз! Книга
                            - восторг! Ваш магазин - восторг! Была бы моя воля, поставила бы 100 звёзд!</p>
                    </div>
                </article>
            </div>

            <a class="yellow-btn" href="{{ route('reviewModalPage') }}">Напишите отзыв!</a>


        </section>
    </main>
    @include('footer')
</div>
</body>
</html>