<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        $attributes = request()->validate([
            "title" => "required|max:50|min:5",
            "body" => "required|max:255|min:5",
        ]);

        Comment::create([
            'post_id' => $post->id,
            'user_id' => auth()->id(),
            'title' => $attributes['title'],
            'body' => $attributes['body'],
        ]);

        return Redirect::to(URL::previous() . "#comment");
    }
}
