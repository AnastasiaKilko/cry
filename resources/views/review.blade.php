<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Review</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="wrapper">
    @include('header')
    <main>
        <div class="modal-window">
            <h2>Напишите отзыв!</h2>
            <form action="{{route('review', $authorship->book->id)}}" method="post">
                @csrf
                <fieldset class="rating-stars">
                    <legend>Оцените книгу, её электронный вариант или доставку</legend>
                    <input type="radio" id="star5" name="rating" value="5"/>
                    <label for="star5">★</label>
                    <input type="radio" id="star4" name="rating" value="4"/>
                    <label for="star4">★</label>
                    <input type="radio" id="star3" name="rating" value="3"/>
                    <label for="star3">★</label>
                    <input type="radio" id="star2" name="rating" value="2"/>
                    <label for="star2">★</label>
                    <input type="radio" id="star1" name="rating" value="1"/>
                    <label for="star1">★</label>
                </fieldset>
                <fieldset class="feedback">
                    <legend>Напишите Ваше мнение о книге, её электронном варианте или доставке</legend>
                    <textarea maxlength="500" placeholder="Введите текст..." name="text"></textarea>
                </fieldset>
                <button type="submit" class="yellow-btn">Опубликовать</button>
            </form>
        </div>
    </main>
    @include('footer')
</div>
</body>
</html>