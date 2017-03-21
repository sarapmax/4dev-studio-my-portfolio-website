<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog, App\Tag;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $tags;

    public function __construct() {
        $this->tags = Tag::all();
    }

    public function index()
    {
        $blogs = Blog::paginate(20);

        return view('backoffice.blogs.blog.index', [
            'blogs' => $blogs,
            'tags' => $this->tags,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.blogs.blog.create', ['tags' => $this->tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:blogs',
            'body' => 'required',
            'cover_img' => 'required',
            'tag_ids' => 'required',
        ]);

        $blog = new Blog;

        if($request->hasFile('cover_img')) {
            $file = $request->file('cover_img');
            $destination_path = 'uploads/blog_cover_images/';
            $file_name = 'blog_cover_img_' . time() . '_' . $file->getClientOriginalName();

            $file->move($destination_path, $file_name);

            $blog->cover_img = $file_name;
        }

        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->slug = slug($request->title);
        $blog->active = $request->active ? 1 : 0;
        $blog->view = 0;

        $blog->save();

        $blog->tag()->sync($request->tag_ids);

        alert()->success($blog->title . ' blog was created', 'Success!');

        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('backoffice.blogs.blog.edit', [
            'blog' => $blog,
            'tags' => $this->tags,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'tag_ids' => 'required',
        ]);

        $blog = Blog::find($id);

        if($request->hasFile('cover_img')) {
            $file = $request->file('cover_img');
            $destination_path = 'uploads/blog_cover_images/';

            unlink($destination_path, $blog->cover_img);

            $file_name = 'blog_cover_img_' . time() . '_' . $file->getClientOriginalName();

            $file->move($destination_path, $file_name);

            $blog->cover_img = $file_name;
        }

        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->slug = slug($request->title);
        $blog->active = $request->active ? 1 : 0;

        $blog->save();

        $blog->tag()->sync($request->tag_ids);

        alert()->success($blog->title . ' blog was updated', 'Success!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        if($blog->cover_img) {
            unlink('uploads/blog_cover_images//' . $blog->cover_img);
        }
        
        $blog->delete();
        $blog->tag()->detach();

        alert()->success($blog->title . ' blog was deleted', 'Success!');

        return redirect()->back();
    }

public function uploadImage(Request $request) {
    $CKEditor = $request->get('CKEditor');
    $funcNum = $request->get('CKEditorFuncNum');
    $message = $url = '';
    if ($request->hasFile('upload')) {
        $file = $request->file('upload');
        if ($file->isValid()) {
            $destination_path = 'uploads/blog_images/';
            $filename = $file->getClientOriginalName();
            $file->move($destination_path, $filename);
            $url = asset($destination_path . '' . $filename);
        } else {
            $message = 'An error occured while uploading the file.';
        }
    } else {
        $message = 'No file uploaded.';
    }
    return '<script>window.parent.CKEDITOR.tools.callFunction('.$funcNum.', "'.$url.'", "'.$message.'")</script>';
}
}
