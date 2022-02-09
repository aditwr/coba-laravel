<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title_page' => 'Posts',
            'posts' => \App\Models\Post::all()
        ]);
    }

    public function showSinglePost($slug)
    {
        return view('post', [
            'title_page' => 'Single Post',
            'post' => \App\Models\Post::find($slug)
        ]);
    }
}
