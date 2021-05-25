<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Posts;
use App\Tag;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Posts $post)
    {
        $this->validate(request(),['body'=>'required']);
        $post->addComment(request('body'));
        return back();
    }
}
