<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Shopping Bag</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="wrapper">
    @include('header')
    <main>
        <div class="shopping-bag">
            <h2>Корзина</h2>
            <p>Здесь пока ничего нет. Чтобы добавить книгу в корзину, перейдите в Каталог или  Электронную библиотку.</p>
            <div class="catalogue-btns">
                <button onclick="document.location='catalogue.html'" class="yellow-btn">Каталог</button>
                <button onclick="document.location='e-catalogue.html'" class="blue-btn">Электронная библиотека</button>
            </div>
        </div>
    </main>
    @include('footer')
</div>

</body>
</html>