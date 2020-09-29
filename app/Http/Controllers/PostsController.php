<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class PostsController extends Controller
{
    public function show(int $id = 1)
    {
        $post = Post::find($id);
        return View('posts.show', compact('post'));
    }
}
