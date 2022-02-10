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
        'body'
    ];
}
