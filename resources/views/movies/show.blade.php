@extends('layouts.master')
@section('title', $movie->title)

@section('content')

    <div class="blog-post">
        <h2 class="blog-post-title">{{ $movie->title }}</h2>
        <p class="blog-post-meta"> Genre: <a href="{{ route('list-genre', ['genre' => $movie->genre]) }}">
                {{ $movie->genre }}</a></p>
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

    <form method="POST" action="/movies/{{ $movie->id }}/comments">
        @csrf
        <div class="mb-3">
            <label class="form-label">Leave a comment: </label>
            <textarea name="content" rows="3 " class="form-control"></textarea>
        </div>

        @error('content')
            @include('partials.error')
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
