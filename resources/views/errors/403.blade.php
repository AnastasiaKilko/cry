<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 403</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
@include('header')
<main>
    <div class="error">
        <h1>403</h1>
        <img src="img/white-lines.svg" alt="style">
        <h4>Forbidden</h4>
    </div>
</main>
@include('footer')
</body>
</html>