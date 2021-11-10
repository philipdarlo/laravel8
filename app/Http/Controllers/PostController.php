<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            //Could use simplePaginate here which just gives next and previous
            'posts' => Post::latest('published_at')->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
            'currentCategory' => Category::firstWhere('slug', \request('category'))
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
