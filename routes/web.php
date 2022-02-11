<?php
// namespace

use App\Http\Controllers\CategoryController;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        // key ini akan diakses sebagai nama variable di halaman view nya
        'title_page' => 'Home',
        'number' => 3
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title_page' => 'About',
        'name' => 'Haruka Nishizawa',
        'email' => 'haruka@gmail.com',
        'job' => 'Programmer'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// single post page route
Route::get('posts/{post:slug}', [PostController::class, 'showSinglePost']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'category']);
