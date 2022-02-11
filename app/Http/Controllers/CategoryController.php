<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title_page' => 'Categories',
            'categories' => Category::all()
        ]);
    }

    public function category(Category $category)
    {
        return view('category', [
            'title_page' => $category->name,
            'posts' => $category->posts, // dinamic property
            'category' => $category->name
        ]);
    }
}
