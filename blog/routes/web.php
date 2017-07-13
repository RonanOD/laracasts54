<?php
Route::get('/', 'PostsController@index')->name('home');
Route::get('/home', 'PostsController@index');

// Posts
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/', 'PostsController@store');
Route::post('/posts/{post}/comments', 'CommentsController@store');

// Tasks
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

// Auth
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');