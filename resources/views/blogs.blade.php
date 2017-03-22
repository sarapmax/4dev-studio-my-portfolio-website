@extends('layout.master')

@section('content')

<div class="container-fluid sidebar">
  <div class="container padding-0">
    <div class="row">
      <div class="col-md-2 col-md-offset-0 col-sm-2 col-sm-offset-1">
        <div class="categories-wrapper">
          <h6 class="brand-color text-uppercase">Categories</h6>
          <div class="categories">
            <a {{ Request::segment(1) == 'blog' ? 'style=color:#fff;' : '' }} href="{{ url('blog') }}">All</a>
            @foreach($tags as $tag)
            <a {{ Request::segment(2) == 'tag' && Request::segment(3) == $tag->slug ? 'style=color:#fff;' : '' }} href="{{ url('blog/tag/'.$tag->slug) }}">{{ $tag->name }}</a>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-md-10 hidden-xs hidden-sm">
        <div class="recent-wrapper">
          <h6 class="brand-color text-uppercase">Recent Posts</h6>
          <div class="row">
            @foreach($blogs as $blog)
            <div class="col-md-3"><a href="{{ url('blog/'.$blog->slug) }}" class="reacent animsition-link"><img alt="" src="{{ asset('uploads/blog_cover_images/'.$blog->cover_img) }}">
              <p>{{ $blog->title }}</p></a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
        {{-- <div class="col-md-4 col-md-offset-0 col-sm-5 col-sm-offset-1"> --}}
          <div style="padding: 20px;" class="input-wrapper">
          </div>
        {{-- </div> --}}
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-2">
        <div class="btn-path sidebar-open">
          <div class="line"></div>
          <div class="circle-btn"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main-content align-center">
  <div class="container">
    <div class="preview-wrapper scroll-on-top">
      @foreach($blogs as $blog)
      <div class="post-preview"><a href="{{ url('blog/'.$blog->slug) }}" class="animsition-link"><img alt="" src="{{ asset('uploads/blog_cover_images/'.$blog->cover_img) }}"></a><a href="{{ url('blog/'.$blog->slug) }}" class="animsition-link">
        <h4 style="font-size: 17px;">{{ str_limit($blog->title, 50) }}</h4></a>
        <p>{!! str_limit(strip_tags($blog->body), 200) !!}</p>
        <div class="meta-data">
          <div class="activity">
            <span><i class="fa fa-eye"></i>&nbsp;&nbsp;{{ number_format($blog->view) }}</span>
          </div>
          <a href="{{ url('blog/'.$blog->slug) }}" class="text-uppercase animsition-link">read more<i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection