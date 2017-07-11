<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() {
        return view('posts.index');
    }

    public function show() {
        return view('posts.show');
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        // Create a new post using data. Save to data. Redirect to homepage.
//        $post = new Post;
//        $post->title = request('title');
//        $post->body = request('body');
        $post = Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);
        $post->save();
        return redirect('/');
    }
}
