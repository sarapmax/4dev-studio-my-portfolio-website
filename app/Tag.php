<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function blog() {
    	return $this->belongsToMany('App\Blog', 'blog_tags', 'tag_id', 'blog_id');
    }
}
