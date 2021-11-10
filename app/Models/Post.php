<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters) // Post::newQuery()->filter()
    {
        if(isset($filters['search'])){
            $query->where( function ($query) {
                $query->where('title', 'like', '%' . request('search') . '%')
                    ->orwhere('body', 'like', '%' . request('search') . '%');
            });
        }

        if(isset($filters['category'])){
            $query->whereHas('category', function($query) use ($filters){
                $query->where('slug', $filters['category']);
            });
        }

        if(isset($filters['author'])){
            $query->whereHas('author', function($query) use ($filters){
                $query->where('username', $filters['author']);
            });
        }
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
