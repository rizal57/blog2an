<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() 
    {
        $title = '';
        
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = 'In Category: ' . $category->name;
        } else if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = "By: " . $author->name;
        }

        return view('posts', [
            'title' => "Posts $title",
            'active' => 'posts',
            'posts' => Post::with(['user','category'])->latest()->fillter(request(['search','category','author']))->get()
        ]);
    }

    // controller post
    public function show(Post $post) 
    {
        return view('post', [
            'title' => 'Post',
            'active' => 'posts',
            'post' => $post
        ]);
    }
}
