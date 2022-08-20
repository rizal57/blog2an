<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request) 
    {
        $ValidatedComment = $request->validate([
            'body' => 'required|max:255'
        ]);

        $ValidatedComment['user_id'] = auth()->user()->id;
        $ValidatedComment['post_id'] = $request->post_id;

        Comment::create($ValidatedComment);
        return redirect("/posts/$request->slug");
    }
}
