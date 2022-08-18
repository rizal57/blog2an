<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index() {
        return view('authors', [
            'title' => 'Authors',
            'active' => 'authors',
            'authors' => User::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show(User $author){
        return view('author', [
            'title' => "Author: $author->username",
            'active' => 'authors',
            'author' => $author
        ]);
    }
}
