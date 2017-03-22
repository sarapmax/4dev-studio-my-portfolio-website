<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog, App\Tag;

class FrontBlogController extends Controller
{
    public function index() {
    	$tags = Tag::orderBy('name', 'DESC')->get();
		$blogs = Blog::all();

        return view('blogs', [
            'blogs' => $blogs,
            'tags' => $tags,
        ]);
    }

    public function getBlog($slug) {
    	$blog = Blog::whereSlug($slug)->first();

    	$blog->view++;
    	$blog->save();

    	return view('blog', [
    		'blog' => $blog,
    	]);
    }

    public function getBlogsByTag($slug) {
    	$tags = Tag::orderBy('name', 'DESC')->get();
		$blogs = Blog::whereHas('tag', function($q) use($slug) {
			$q->whereSlug($slug);
		})->get();

        return view('blogs', [
            'blogs' => $blogs,
            'tags' => $tags,
        ]);
    }
}
