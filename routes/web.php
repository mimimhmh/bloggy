<?php



Route::get('/index', 'PostsController@index');

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts/create', 'PostsController@create');