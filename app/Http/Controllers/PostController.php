<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'All Post',
            'active' => 'posts',
            'breadcrumb' => ['Blog', 'All Post'],
            // 'posts' => \App\Models\Post::latest()->get()

            // eager load ( not route model bindings )
            'posts' => Post::latest()->get(),
        ];
        return view('posts', $data);
    }

    public function showSinglePost(Post $post)
    {
        $data = [
            'title' => "{$post->title} by {$post->user->username}",
            'active' => 'posts',
            'breadcrumb' => ['Post', $post->user->username, $post->title],
            'post' => $post
        ];
        return view('post', $data);
    }
}
