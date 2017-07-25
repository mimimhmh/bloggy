<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    /**
     * PostsController constructor.
     */
    function __construct() {

        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        $orderBy = request()->exists('popular') ? 'votes_count' : 'updated_at';

        $posts = Post::with('user')->withCount('votes')
            ->orderBy($orderBy, 'desc')->paginate(3);

        return view('posts.index', compact('posts'));
    }

    /**
     * @param Post $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Post $post) {

        return view('posts.full-post', compact('post'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {

        return view('posts.post-create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) {

        $this->validate(request(), [
            'title'         => 'required',
            'body'          => 'required',
            'large_img_url' => 'required | mimes:jpeg,jpg,png,gif | max:50000'
        ]);

        $completePath = $this->storeMainImage($request);

        $post = new Post([
            'title'         => request('title'),
            'slug'          => request('slug'),
            'abstract'      => request('abstract'),
            'body'          => request('body'),
            'large_img_url' => $completePath
        ]);

        auth()->user()->publish($post);

        return redirect()->home();
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id) {

        $post = Post::findOrFail($id);
        if ($post->user->id == auth()->user()->id)
        {
            return view('posts.edit', compact('post'));
        }

        return back();
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id) {

        $post = Post::findOrFail($id);

        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->abstract = $request->input('abstract');
        $post->body = $request->input('body');

        if ($request->hasFile('large_img_url'))
        {
            $completePath = $this->storeMainImage($request, $id);
            $post->large_img_url = $completePath;
        }

        if ($post->save())
        {
            return redirect()->home();
        }
    }

    /**
     * @param Request $request
     * @param int $currentPostId
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function storeMainImage(Request $request, $currentPostId = 0) {

        $filename = time();

        $currentId = \DB::table('posts')->max('id') + 1;

        if ($currentPostId)
        {
            $currentId = $currentPostId;
        }

        $destinationPath = 'storage/images/posts/' . $currentId . '/main/';
        $request->file('large_img_url')->move($destinationPath, $filename);
        $completePath = url('/' . $destinationPath . $filename);

        return $completePath;
    }
}
