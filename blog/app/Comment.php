<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
