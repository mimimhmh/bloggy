<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    public function __construct() {

        $this->middleware('auth');
    }

    /**
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Post $post) {

        $post->addComment();

        return back();

    }
}
