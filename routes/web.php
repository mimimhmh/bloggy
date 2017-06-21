<?php


Route::get('/', 'PostsController@index');

Route::get('/index', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');

