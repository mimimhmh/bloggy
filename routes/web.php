<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('posts.index');
});
