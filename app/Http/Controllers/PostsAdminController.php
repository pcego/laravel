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

    public function edit($id){

        $post = $this->posts->find($id);

        return view('admin.edit', compact('post'));

    }

    public function update($id, PostRequest $request){

        $this->posts->find($id)->update($request->all());

        return redirect()->route('admin.admin');
    }

    public function delete($id){
        $this->posts->find($id)->delete();
        return redirect()->route('confirm');
    }

}
