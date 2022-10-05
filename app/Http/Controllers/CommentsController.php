<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Movie;
use App\Http\Requests\CreateCommentRequest;

class CommentsController extends Controller
{
    public function store(CreateCommentRequest $request, $id)
    {
        Movie::find($id)->addComments($request->validated()['content']);

        return redirect()->back();
    }
}