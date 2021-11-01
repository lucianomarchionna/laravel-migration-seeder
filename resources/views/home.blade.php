<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LISTA VIAGGI</title>
    </head>
    <body>
        @foreach ($travels as $travel)
        <p><h2>Città di partenza: </h2>{{ $travel['departure'] }}</p>
        <p><h2>Città di arrivo: </h2>{{ $travel['destination'] }}</p>
        <p><h2>Scali: </h2>{{ $travel['stopovers'] }}</p>
        <p><h2>Data partenza: </h2>{{ $travel['departure_date'] }}</p>
        <p><h2>Prezzo: </h2>{{ $travel['price'] }} €</p>
    @endforeach
    </body>
</html>
