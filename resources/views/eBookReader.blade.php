<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Libris: E-Book-reader</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="wrapper">
    @include('header')
    <main>
        <div class="e-book-head">
            <h3>А.С. Пушкин Евгений Онегин</h3>
            <div class="e-book-settings">
                <div class="e-book-setting">
                    <img src="img/icons/help.svg" alt="help">
                    <p>помощь</p>
                </div>
                <div class="e-book-setting">
                    <img src="img/icons/contents.svg" alt="contents">
                    <p>оглавление</p>
                </div>
                <div class="e-book-setting">
                    <img src="img/icons/settings.svg" alt="settings">
                    <p>настройки</p>
                </div>
                <div class="e-book-setting">
                    <img src="img/icons/bookmarks.svg" alt="bookmarks">
                    <p>закладки</p>
                </div>
                <div class="e-book-setting">
                    <img src="img/icons/add-bookmark.svg" alt="add bookmark">
                    <p>добавить<br> закладку</p>
                </div>
            </div>
        </div>
        <div class="e-book-text">
            <h5>ГЛАВА ПЕРВАЯ<br></h5>
            <i>И жить торопится, и чувствовать спешит.<br></i>
            <p>Кн. Вяземский.<br><br></p>
            <p>I<br></p>
            <p>«Мой дядя самых честных правил,<br></p>
            <p>Когда не в шутку занемог,<br></p>
            <p>Он уважать себя заставил<br></p>
            <p>И лучше выдумать не мог.<br></p>
            <p>Его пример другим наука;<br></p>
            <p>Но, боже мой, какая скука<br></p>
            <p>С больным сидеть и день и ночь,<br></p>
            <p>Не отходя ни шагу прочь!<br></p>
            <p>Какое низкое коварство<br></p>
            <p>Полуживого забавлять,<br></p>
            <p>Ему подушки поправлять,<br></p>
            <p>Печально подносить лекарство,<br></p>
            <p>Вздыхать и думать про себя:<br></p>
            <p>Когда же черт возьмет тебя!»<br><br></p>
            <p>II<br></p>
            <p>Так думал молодой повеса,<br></p>
            <p>Летя в пыли на почтовых,<br></p>
            <p>Всевышней волею Зевеса<br></p>
            <p>Наследник всех своих родных.<br></p>
            <p>Друзья Людмилы и Руслана!<br></p>
            <p>С героем моего романа<br></p>
            <p>Без предисловий, сей же час<br></p>
            <p>Позвольте познакомить вас:<br></p>
            <p>Онегин, добрый мой приятель,<br></p>
            <p>Родился на брегах Невы,<br></p>
            <p>Где, может быть, родились вы<br></p>
            <p>Или блистали, мой читатель;<br></p>
            <p>Там некогда гулял и я:<br></p>
            <p>Но вреден север для меня.<br></p>
        </div>
        <div class="e-book-slider">
            <img src="img/button-icons/left_icon.svg" alt="previous">
            <img src="img/button-icons/right_icon.svg" alt="next">
        </div>

        <div class="e-book-scale">
            <h5>1/345</h5>
            <div class="progress-scale"></div>
        </div>

    </main>
    @include('footer')
</div>
</body>
</html>