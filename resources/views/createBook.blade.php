<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: Create a Book</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="wrapper">
    @include('header')
    <main>
        <section class="login-register">
            <h2>Новая книга</h2>
            <form action="{{route('createBook')}}" method="post">
                @csrf
                <fieldset class="register">
                    <label for="name">Введите название книги</label><br>
                    <input type="text" id="name" name="name"><br><br>
                    <label for="ISBN">Введите ISBN</label><br>
                    <input type="text" id="ISBN" placeholder="000-0-00000-000-0" name="ISBN"><br><br>
                    <label for="id_age_limit">Выберите возрастное ограничение</label><br>
                    <select id="id_age_limit" name="id_age_limit">
                        @foreach ($age as $age_limit)
                            <option value="{{ $age_limit->id }}">{{ $age_limit->age_limit_type }}</option>
                        @endforeach
                    </select><br><br>

                    <label for="id_book_types">Выберите тип книги</label><br>
                    <select id="id_book_types" name="id_book_types">
                        @foreach($type as $book_type)
                            <option value="{{ $book_type->id }}">{{ $book_type->type }}</option>
                        @endforeach
                    </select><br><br>

                    <label for="pages">Введите количество страниц</label><br>
                    <input type="text" id="pages" placeholder="100" name="pages"><br><br>
                    <label for="price">Введите цену, руб</label><br>
                    <input type="text" id="price" placeholder="500" name="price"><br><br>

                    <div id="paper-book-fields" style="display:none;">
                        <label for="size">Введите параметры размера бумажной книги</label><br>
                        <input type="text" id="size" placeholder="10x10x10" name="size"><br><br>
                        <label for="book_cover">Выберите тип обложки</label><br>
                        <select id="book_cover" name="book_cover">
                            <option value="hardcover">Твёрдый переплёт</option>
                            <option value="softcover">Мягкая обложка</option>
                        </select><br><br>
                        <label for="copies">Введите тираж</label><br>
                        <input type="text" id="copies" placeholder="10000" name="copies"><br><br>
                        <label for="weight">Введите вес бумажной книги, г</label><br>
                        <input type="text" id="weight" placeholder="100" name="weight"><br><br>
                    </div>


                    <div id="e-book-fields" style="display:none;">
                        <label for="filesize">Введите размер файла электронной книги, Mb</label><br>
                        <input type="text" id="filesize" placeholder="100" name="filesize"><br><br>
                        <label for="file_format">Введите формат файла электронной книги</label><br>
                        <input type="text" id="file_format" placeholder="epub" name="file_format"><br><br>
                        <label for="e_book_link">Введите ссылку на электронную книгу</label><br>
                        <input type="text" id="e_book_link" name="e_book_link"><br><br>
                    </div>


                </fieldset>
                <button class="yellow-btn" type="submit">Сохранить</button>

            </form>
        </section>
    </main>
    @include('footer')
</div>
</body>
</html>


<script>
    document.getElementById('id_book_types').addEventListener('change', function () {
        if (this.value === '2') {
            document.getElementById('paper-book-fields').style.display = 'block';
        } else {
            document.getElementById('paper-book-fields').style.display = 'none';
        }

        if (this.value === '3') {
            document.getElementById('e-book-fields').style.display = 'block';
        } else {
            document.getElementById('e-book-fields').style.display = 'none';
        }


    });
</script>