<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write your feedback</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="modal-window">
    <a href={{ route('bookPage') }}><img src="img/button-icons/close.svg" alt="close"></a>
    <h2>Напишите отзыв!</h2>
    <form>
        <fieldset class="rating-stars">
            <legend>Оцените книгу, её электронный вариант или доставку</legend>
            <input type="radio" id="star1" name="rating" value="1"/>
            <label for="star1">★</label>
            <input type="radio" id="star2" name="rating" value="2"/>
            <label for="star2">★</label>
            <input type="radio" id="star3" name="rating" value="3"/>
            <label for="star3">★</label>
            <input type="radio" id="star4" name="rating" value="4"/>
            <label for="star4">★</label>
            <input type="radio" id="star5" name="rating" value="5"/>
            <label for="star5">★</label>
        </fieldset>
        <fieldset class="feedback">
            <legend>Напишите Ваше мнение о книге, её электронном варианте или доставке</legend>
            <textarea maxlength="500" placeholder="Введите текст..."></textarea>
        </fieldset>
        <button class="yellow-btn">Опубликовать</button>
    </form>
</div>
</body>
</html>