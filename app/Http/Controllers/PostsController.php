<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class PostsController extends Controller
{
    public function posts(){

        $posts = Post::all();
        return view('blog.posts', compact('posts'));


    }
}
