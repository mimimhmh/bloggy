<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class UsersController extends Controller
{

    /**
     * UsersController constructor.
     */
    public function __construct() {

        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile() {

        $user = auth()->user();

        return view('auth.profile', compact('user'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function updateAvatar(Request $request) {

        $user = auth()->user();

        if ($request->hasFile('avatar'))
        {
            $avatar = $request->file('avatar');
            $filename = time(). '.' . $avatar->getClientOriginalExtension();

            $path = public_path('/images/avatars/' . $filename);
            Image::make($avatar)->resize(300, 300)->save($path);
            $completePath = url('/images/avatars/' . $filename);

            $user->avatar = $completePath;
            $user->save();
        }

        return view('auth.profile', compact('user'));
    }
}
