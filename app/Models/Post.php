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

    // local query scope method
    public function scopeLocal_Filter($query, array $filters)
    {
        // null coalescing operator 
        // ambil search key ke dalam local scope functions
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, function ($query, $author) {
            return $query->whereHas('user', function ($query) use ($author) {
                $query->where('username', $author);
            });
        });

        // using arrow function
        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas(
                'user',
                fn ($query) =>
                $query->where('username', $author)
            )
        );
    }
}
