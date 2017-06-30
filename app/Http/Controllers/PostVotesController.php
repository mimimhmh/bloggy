<?php

namespace App\Http\Controllers;

use App\Post;

class PostVotesController extends Controller
{
    //
    public function __construct() {

        $this->middleware('auth');
    }

    public function store(Post $post) {

        auth()->user()->votes()->toggle($post);

        return back();

    }
}
