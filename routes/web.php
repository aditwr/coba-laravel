<?php
// namespace

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/', [Controller::class, 'index']);

Route::get('/about', [Controller::class, 'about']);

Route::get('/posts', [PostController::class, 'index']);

// single post page route
Route::get('posts/{post:slug}', [PostController::class, 'showSinglePost']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'category']);

Route::get('/authors/{user:username}', [UserController::class, 'showUserPost']);
