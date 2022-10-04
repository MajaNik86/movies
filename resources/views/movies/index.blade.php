@extends('layouts.master')

@section('title', 'Movie')

@section('content')

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
@endsection
