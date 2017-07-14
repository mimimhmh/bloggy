<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Mockery\Exception;

class ReplyController extends Controller
{
    /**
     * PostVotesController constructor.
     */
    public function __construct() {

        $this->middleware('auth');
    }

    /**
     * @param Request $request
     * @param Comment $comment
     * @return array|Exception
     */
    public function store(Request $request, Comment $comment) {

        if ($request->ajax()){

            return $comment->addReply();

        }

        return new Exception("something goes wrong!");
    }
}
