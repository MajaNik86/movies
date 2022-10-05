@extends('layouts.master')
@section('title', $movie->title)

@section('content')

    <div class="blog-post">
        <h2 class="blog-post-title">{{ $movie->title }}</h2>
        <p class="blog-post-meta">Release date: {{ $movie->year }}, directed by:<a href="#">{{ $movie->director }}</a>
        </p>

        <p>Storyline:{{ $movie->storyline }}</p>
    </div><!-- /.blog-post -->

@endsection
