<?php


Route::get('/', 'PostsController@index');

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');
