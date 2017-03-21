<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function tag() {
    	return $this->belongsToMany('App\Tag', 'blog_tags', 'blog_id', 'tag_id');
    }
}
