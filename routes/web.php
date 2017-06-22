<?php

Route::get('/', 'PostsController@index')->name('home');

Route::get('/index', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');

Auth::routes();

Route::get('/upload_image', function (){
    return view('posts.upload_image');
});

Route::get('/demo', function (){
    return view('demo');
});