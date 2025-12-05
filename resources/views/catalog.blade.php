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
{{--                        НАДО СДЕЛАТЬ ТАК, ТОЛЬКО КОГДА ПОПРАВЛЮ ТАБЛИЦУ БД BOOKSTYPE
                            <img src="{{ asset('storage/ЧТО-ТО ТАМ/' . basename($catalog->book->booksType->type_img) }}"
                 alt="нет иконки">
                            --}}
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

        <article class="book-info-description">
            <h3>Описание</h3>
            <p>{{ $catalog->book->summary }}</p>
        </article>
@endforeach

</section>
</body>
</html>