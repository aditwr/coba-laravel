<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'All Post',
            'posts' => \App\Models\Post::latest()->get()
        ]);
    }

    public function showSinglePost(Post $post)
    {
        return view('post', [
            'title' => "{$post->title} by {$post->user->username}",
            'post' => $post
        ]);
    }
}
