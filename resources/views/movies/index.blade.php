<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>

<body>
    <ul>
        @foreach ($movies as $movie)
            <a href="{{ route('single-movie', ['id' => $movie->id]) }}">
                <li>{{ $movie->title }}
                </li>
            </a>
            <p> {{ $movie->storyline }}
            </p>
        @endforeach
    </ul>

</body>

</html>
