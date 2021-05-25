<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Posts $post)
    {
        $post->like();
        return back();
    }
}
