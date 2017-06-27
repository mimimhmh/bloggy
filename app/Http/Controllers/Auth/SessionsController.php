<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SessionsController extends Controller
{
    public function __construct() {

        $this->middleware('guest')->except(['destroy']);
    }

    public function destroy() {

        auth()->logout();

        return redirect()->home();
    }
}
