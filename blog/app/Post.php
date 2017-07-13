<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Post extends Model
{
    // Allow Mass Assignment
    protected $fillable = ['title', 'body'];

    public function comments() {
        return $this->hasMany(Comment::class);
    }
    public function addComment($body) {
/*        Comment::create([
            'body' => $body,
            'post_id' => $this->id
        ]);*/
        // More Eloquent way of doing it:
        $this->comments()->create(compact('body'));
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
