<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Categories',
            'active' => 'categories',
            'breadcrumb' => ['Categories', 'All Categories'],
            'categories' => Category::all()
        ];
        return view('categories', $data);
    }

    public function category(Category $category)
    {
        return view('posts', [
            'title' => "{$category->name} Post",
            'active' => 'categories',
            'posts' => $category->posts->load('user', 'category'),
            'breadcrumb' => ['Posts', $category->name],
            'category' => $category->name
        ]);
    }
}
