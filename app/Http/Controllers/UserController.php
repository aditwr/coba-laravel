<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUserPost(User $user)
    {
        $data = [
            'title' => "Post by {$user->name}",
            'active' => 'posts',
            'posts' => $user->posts->load('user', 'category'),
            'breadcrumb' => ['Posts', $user->username],
        ];
        return view('posts', $data);
    }
}
