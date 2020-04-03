<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $fillable = [
        'id', 'post_id'
    ];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
