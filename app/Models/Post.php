<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use the Eloquent ORM
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // fillable berkebalikan dengan guarded
    // fillable
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'category_id'
    ];

    // eager load user $ category for post
    protected $with = [
        'user',
        'category'
    ];

    // relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // relationship with User Model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
