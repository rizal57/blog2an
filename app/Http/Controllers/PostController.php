<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('posts', [
            'title' => 'Posts',
            'active' => 'posts',
            'posts' => Post::all()
        ]);
    }

    // controller post
    public function show(Post $post) {
        return view('post', [
            'title' => 'Post',
            'active' => 'posts',
            'post' => $post
        ]);
    }
}
