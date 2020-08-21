<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Facade\Ignition\Exceptions\ViewException;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest();

        // dd($posts->paginate(8));

        return view('posts.index', [
            'posts' => $posts->paginate(8),
            'categories' => Category::orderBy('name', 'asc')->get(),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
            'comments' => $post->comments()->paginate(10),
            'posts' => Post::latest()->take(3)->get(),
            'categories' => Category::orderBy('name', 'asc')->get(),
        ]);
    }
}
