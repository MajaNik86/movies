@extends('layouts.master')
@section('title', $movie->title)

@section('content')

    <div class="blog-post">
        <h2 class="blog-post-title">{{ $movie->title }}</h2>
        <p class="blog-post-meta"> Genre: {{ $movie->genre }}</p>
        <p class="blog-post-meta">Release date: {{ $movie->year }}, directed by:<a href="#">{{ $movie->director }}</a>
        </p>

        <p>Storyline:{{ $movie->storyline }}</p>
    </div><!-- /.blog-post -->

    <div>
        <h4>Comments: </h4>
        <ul>
            @foreach ($movie->comments as $comment)
                <li>{{ $comment->content }}
                    <p>created at: {{ $comment->created_at }}</p>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
