@extends('layouts.master')
@section('title', 'Add new movie')

@section('content')
    <form method="POST" action="/movies">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" />
        </div>

        @error('title')
            @include('partials.error')
        @enderror

        <div class="mb-3">
            <label class="form-label">Genre</label>
            <input type="text" name="genre" class="form-control" />
        </div>

        @error('genre')
            @include('partials.error')
        @enderror

        <div class="mb-3">
            <label class="form-label">Director</label>
            <input type="text" name="director" class="form-control" />
        </div>

        @error('director')
            @include('partials.error')
        @enderror

        <div class="mb-3">
            <label class="form-label">Year</label>
            <input type="text" name="year" class="form-control" />
        </div>
        @error('year')
            @include('partials.error')
        @enderror

        <div class="mb-3">
            <label class="form-label">Storyline</label>
            <textarea name="storyline" rows="10" class="form-control"></textarea>
        </div>
        @error('storyline')
            @include('partials.error')
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
