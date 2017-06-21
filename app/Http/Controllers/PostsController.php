<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
//    public function __construct() {
//
//        $this->middleware('auth')->except(['index', 'show']);
//    }

    public function index() {

        $posts = Post::latest()->paginate(3);

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {

        return view('posts.full-post', compact('post'));
    }

    public function create() {

        return view('posts.create');
    }
}
