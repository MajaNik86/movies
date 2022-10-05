<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', ['movies' => $movies]);
    }
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movies.show', compact('movie'));
    }

    public function create()
    {
        return view('movies.create');
    }
    public function store()
    {


        request()->validate([
            'title' => 'required',
            'genre' => 'required',
            'director' => 'required',
            'year' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'storyline' => 'required|max:1000'
        ]);
        Movie::create([
            'title' => request('title'),
            'genre' => request('genre'),
            'director' => request('director'),
            'year' => request('year'),
            'storyline' => request('storyline'),
        ]);

        return redirect('/movies');
    }
}