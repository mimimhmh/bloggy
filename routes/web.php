<?php


Route::get('/', function ()
{

    return view('posts.index');
});

Route::get('/index', 'PostsController@index');
