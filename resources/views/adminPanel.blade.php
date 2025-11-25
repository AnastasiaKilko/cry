<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<header class="admin-header">
    <a href={{ route('welcome') }}><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
    <div class="admin-navigation">
        <h3>Управление каталогом</h3>
        <nav><a href={{ route('createBook') }}>Добавить книгу</a></nav>
        <nav><a href={{ route('createBook') }}>Редактировать каталог</a></nav>
        <h3>Управление заказами</h3>
        <nav><a href={{ route('createBook') }}>Создать новую книгу</a></nav>
        <h3>Помощь</h3>
    </div>
</header>

</body>
</html>