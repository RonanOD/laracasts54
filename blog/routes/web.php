<?php


Route::get('/posts', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/', 'PostsController@store');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');
