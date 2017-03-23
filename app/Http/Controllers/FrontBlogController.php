<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog, App\Tag;

class FrontBlogController extends Controller
{
    public function index() {
    	$tags = Tag::orderBy('name', 'DESC')->get();
		$blogs = Blog::all();

        $meta = [
            'title' => 'Blog ',
            'description' => 'เราเขียนบทความต่างๆ ขึ้นมาเพื่อให้ความรู้ แชร์ประสบการณ์ และแบ่งปันให้คนอื่น เพื่อให้คนที่เข้ามาอ่านได้รับความรู้ และนำไปใช้งานจริงได้',
        ];

        return view('blogs', [
            'blogs' => $blogs,
            'tags' => $tags,
            'meta' => $meta,
        ]);
    }

    public function getBlog($slug) {
    	$blog = Blog::whereSlug($slug)->first();

    	$blog->view++;
    	$blog->save();

        $meta = [
            'title' => $blog->title,
            'description' => $blog->body,
            'image' => 'uploads/blog_cover_images/'.$blog->cover_img,
        ];

    	return view('blog', [
    		'blog' => $blog,
            'meta' => $meta,
    	]);
    }

    public function getBlogsByTag($slug) {
    	$tags = Tag::orderBy('name', 'DESC')->get();
		$blogs = Blog::whereHas('tag', function($q) use($slug) {
			$q->whereSlug($slug);
		})->get();

        $meta = [
            'title' => 'บทความ '. $slug,
            'description' => 'หาความรู้ และทำความเข้าใจเกี่ยวกับ ' .$slug,
        ];

        return view('blogs', [
            'blogs' => $blogs,
            'tags' => $tags,
            'meta' => $meta,
        ]);
    }
}
