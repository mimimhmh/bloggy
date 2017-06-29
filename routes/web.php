<?php
Auth::routes();

Route::get('/', 'PostsController@index')->name('home');

Route::get('/home', 'PostsController@index');

Route::get('/index', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');

Route::post('/posts/{post}/comment', 'CommentsController@store');

//
Route::get('/logout', 'Auth\SessionsController@destroy');

//editor file uploads
Route::post('/files/post', 'FileUploadController@store');
Route::DELETE('/fileuploads', 'FileUploadController@destroy');

Route::resource('/fileuploads', 'FileUploadController');
Route::resource('/posts', 'PostsController');