<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
use App\Post;

use Illuminate\Http\Request;

class PostsAdminController extends Controller
{
    private $posts;
    public function __construct(Post $posts){

        $this->posts = $posts;

    }

    public function admin(){
        $posts = $this->posts->paginate(10);
        return view('admin.admin', compact('posts'));

    }

    public function create(){
        return view('admin.create');
    }

    public function store(PostRequest $request){

        $this->posts->create($request->all());

	    return redirect()->route('admin.admin');
    }
}
