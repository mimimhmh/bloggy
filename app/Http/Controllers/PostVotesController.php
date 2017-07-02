<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Mockery\Exception;

class PostVotesController extends Controller
{

    /**
     * PostVotesController constructor.
     */
    public function __construct() {

        $this->middleware('auth');
    }

    /**
     * @param Request $request
     * @param Post $post
     * @return \Illuminate\Http\JsonResponse|Exception
     */
    public function store(Request $request, Post $post) {

        if ($request->ajax())
        {
            $result = auth()->user()->votes()->toggle($post);

            $response = array(
                'status'      => 'success',
                'msg'         => 'Setting created successfully',
                'result'      => $result,
                'votes_count' => $post->votes->count()
            );

            return \Response::json($response);
        }

        return new Exception("something goes wrong!");

    }
}
