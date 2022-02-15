<?php
// membuat namespace
namespace App\Http\Controllers;

// menggunakan namespace
use App\Models\Post;
use App\Models\Category;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $data = [
            'title' => 'Home',
            'active' => 'home',
            'posts' => Post::latest()->get(),
            'categories' => Category::all()
        ];
        return view('home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'active' => 'about',
            'name' => 'Haruka Nishizawa',
            'email' => 'haruka@gmail.com',
            'job' => 'Programmer'
        ];
        return view('about', $data);
    }
}
