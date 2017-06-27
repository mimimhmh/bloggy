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

    public function store(Request $request) {

        $this->validate(request(), [
            'title'         => 'required',
            'body'          => 'required',
            'large_img_url' => 'required | mimes:jpeg,jpg,png,gif | max:50000'
        ]);

        $file = $request->file('large_img_url');
        $currentId = \DB::table('posts')->max('id') + 1;
        $file->storeAs('public/images/posts/' . $currentId . '/main', $file->getClientOriginalName());
        $mainImgUrl = 'storage/images/posts/' . $currentId . '/main' . '/' . $file->getClientOriginalName();

        $post = new Post([
            'title'         => request('title'),
            'slug'          => request('slug'),
            'abstract'      => request('abstract'),
            'body'          => request('body'),
            'large_img_url' => $mainImgUrl
        ]);

        auth()->user()->publish($post);

        return redirect()->home();
    }
}
