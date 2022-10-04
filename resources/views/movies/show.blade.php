@extends('layouts.master')
@section('title', $movie->title)

@section('content')


    <h2>{{ $movie->title }}</h2>


    <p>Genre:{{ $movie->genre }}</p>
    Release date:{{ $movie->year }}
    <p>Director:{{ $movie->director }}</p>
    <p>Storyline:{{ $movie->storyline }}</p>




@endsection
