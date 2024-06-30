<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Lista dei Fumetti</h1>
    <ul>
        @foreach($comics as $comic)
        <li>
            <h2>{{ $comic['title'] }}</h2>
            <img src="{{ $comic['thumb'] }}" style="max-width: 200px;">
            <p>{{ $comic['description'] }}</p>
            <p><strong>Prezzo:</strong> {{ $comic['price'] }}</p>
            <p><strong>Serie:</strong> {{ $comic['series'] }}</p>
            <p><strong>Data di vendita:</strong> {{ $comic['sale_date'] }}</p>
            <p><strong>Tipo:</strong> {{ $comic['type'] }}</p>
        </li>
        @endforeach
    </ul>

</body>

</html>