<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //Query Scopes. Prefix with scope
    public function scopeIncomplete($query)
    {
        return $query->where('completed', 0);
    }
}
