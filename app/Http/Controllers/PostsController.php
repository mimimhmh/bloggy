<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index() {

        $posts = Post::latest()->paginate(3);

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {

        return view('posts.full-post', compact('post'));
    }

    public function create() {

        return view('posts.post-create');
    }

    public function store() {

//        dd(request('title'));

        $this->validate(request(), [
            'title' => 'required',
            'body'  => 'required'
        ]);

        $post = new Post([
            'title'         => request('title'),
            'body'          => request('body'),
            'large_img_url' => 'images/posts/1/large-post01.jpg'
        ]);

        auth()->user()->publish($post);

        return redirect('/');
    }
}
