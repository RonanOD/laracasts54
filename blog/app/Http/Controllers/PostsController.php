<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() {
        //$posts = Post::all();
        $posts = Post::latest()->get(); // fetch latest first
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {
        // $post = Post::find($id); Use Route-Model Binding instead
        return view('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        // Create a new post using data. Save to data. Redirect to homepage.
//        $post = new Post;
//        $post->title = request('title');
//        $post->body = request('body');
        $this->validate(request(), [
            'title' => 'bail|required|unique:posts|max:255',
            'body' => 'required'
        ]);
        Post::create(request(['title', 'body']));
        return redirect('/posts');
    }
}
