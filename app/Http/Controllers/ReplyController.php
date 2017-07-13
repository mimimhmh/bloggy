<?php

namespace App\Http\Controllers;

use App\Models\Comment;

class ReplyController extends Controller
{
    public function store(Comment $comment) {

        $comment->addReply();

        return back();
    }
}
