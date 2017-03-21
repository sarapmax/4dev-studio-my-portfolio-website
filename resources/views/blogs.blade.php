@extends('layout.master')

@section('content')

<div class="container-fluid sidebar">
  <div class="container padding-0">
    <div class="row">
      <div class="col-md-2 col-md-offset-0 col-sm-2 col-sm-offset-1">
        <div class="categories-wrapper">
          <h6 class="brand-color text-uppercase">Categories</h6>
          <div class="categories">
            <button>Design</button>
            <button>Typohraphy</button>
            <button>Travelling</button>
            <button>Basrball</button>
            <button>Development</button>
            <button>Fishing</button>
            <button>Music</button>
            <button>Art</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 hidden-xs hidden-sm">
        <div class="recent-wrapper">
          <h6 class="brand-color text-uppercase">Recent Posts</h6>
          <div class="row">
            <div class="col-md-4"><a href="blog_open.html" class="reacent animsition-link"><img alt="" src="{{ asset('supersonic/img/blog/blog_small_1.png') }}">
                <p>Stay at the village and forget all your past</p></a></div>
            <div class="col-md-4"><a href="blog_open.html" class="reacent animsition-link"><img alt="" src="{{ asset('supersonic/img/blog/blog_small_2.png') }}">
                <p>Mountains are seen on the horizon</p></a></div>
            <div class="col-md-4"><a href="blog_open.html" class="reacent animsition-link"><img alt="" src="{{ asset('supersonic/img/blog/blog_small_3.png') }}">
                <p>There are so many kind of maps that is easy to confuse.</p></a></div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-0 col-sm-5 col-sm-offset-1">
        <div class="input-wrapper">
          <h6 class="brand-color text-uppercase search-header">search</h6>
          <div class="search">
            <div class="form-group">
              <input id="input" type="text" name="name" class="form-control">
              <label for="input">What are you looking for?</label>
              <button class="btn-search"></button>
            </div>
            <button class="btn btn-default btn-sm">search</button>
          </div>
          <h6 class="brand-color text-uppercase subscribe-header">subscribe</h6>
          <form action="#" id="subscribe" class="subscribe">
            <div class="form-group">
              <input id="email" type="text" name="email" class="form-control">
              <label for="email">Your e-mail</label>
            </div>
            <button type="submit" class="btn btn-default btn-sm">subscribe</button>
          </form>
        </div>
      </div>
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
      <div class="post-preview"><a href="{{ url('blogs/open') }}" class="animsition-link"><img alt="" src="{{ asset('supersonic/img/blog/blog_1.png') }}"></a><a href="{{ url('blogs/open') }}" class="animsition-link">
          <h4>One interesting thing</h4></a>
        <p>Lorem ipsum dolor sit amet, eros habemus ex pri, civibus Et probatus constituto ad has, ei minim dolor sit. Meliore eum mrepudiandae no quo, ne est malis tantas sapientem.</p>
        <div class="meta-data">
          <div class="activity"><span><i class="fa fa-eye"></i>&nbsp;&nbsp;1,257</span><span><i class="fa fa-comment"></i>&nbsp;&nbsp;42</span><span><i class="fa fa-heart"></i>&nbsp;&nbsp;318</span></div><a href="blog_open.html" class="text-uppercase animsition-link">read more<i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      <div class="post-preview"><a href="blog_open.html" class="animsition-link"><img alt="" src="{{ asset('supersonic/img/blog/blog_2.png') }}"></a><a href="blog_open.html">
          <h4>One interesting thing</h4></a>
        <p>Lorem ipsum dolor sit amet, eros habemus ex pri, civibus Et probatus constituto ad has, ei minim dolor sit. Meliore eum mrepudiandae no quo, ne est malis tantas sapientem.</p>
        <div class="meta-data">
          <div class="activity"><span><i class="fa fa-eye"></i>&nbsp;&nbsp;1,257</span><span><i class="fa fa-comment"></i>&nbsp;&nbsp;42</span><span><i class="fa fa-heart"></i>&nbsp;&nbsp;318</span></div><a href="blog_open.html" class="text-uppercase">read more<i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      <div class="post-preview"><a href="blog_open.html"><img alt="" src="{{ asset('supersonic/img/blog/blog_1.png') }}"></a><a href="blog_open.html">
          <h4>One interesting thing</h4></a>
        <p>Lorem ipsum dolor sit amet, eros habemus ex pri, civibus Et probatus constituto ad has, ei minim dolor sit. Meliore eum mrepudiandae no quo, ne est malis tantas sapientem.</p>
        <div class="meta-data">
          <div class="activity"><span><i class="fa fa-eye"></i>&nbsp;&nbsp;1,257</span><span><i class="fa fa-comment"></i>&nbsp;&nbsp;42</span><span><i class="fa fa-heart"></i>&nbsp;&nbsp;318</span></div><a href="blog_open.html" class="text-uppercase">read more<i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      <div class="post-preview"><a href="blog_open.html"><img alt="" src="{{ asset('supersonic/img/blog/blog_2.png') }}"></a><a href="blog_open.html">
          <h4>One interesting thing</h4></a>
        <p>Lorem ipsum dolor sit amet, eros habemus ex pri, civibus Et probatus constituto ad has, ei minim dolor sit. Meliore eum mrepudiandae no quo, ne est malis tantas sapientem.</p>
        <div class="meta-data">
          <div class="activity"><span><i class="fa fa-eye"></i>&nbsp;&nbsp;1,257</span><span><i class="fa fa-comment"></i>&nbsp;&nbsp;42</span><span><i class="fa fa-heart"></i>&nbsp;&nbsp;318</span></div><a href="blog_open.html" class="text-uppercase">read more<i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      <div class="post-preview"><a href="blog_open.html"><img alt="" src="{{ asset('supersonic/img/blog/blog_1.png') }}"></a><a href="blog_open.html">
          <h4>One interesting thing</h4></a>
        <p>Lorem ipsum dolor sit amet, eros habemus ex pri, civibus Et probatus constituto ad has, ei minim dolor sit. Meliore eum mrepudiandae no quo, ne est malis tantas sapientem.</p>
        <div class="meta-data">
          <div class="activity"><span><i class="fa fa-eye"></i>&nbsp;&nbsp;1,257</span><span><i class="fa fa-comment"></i>&nbsp;&nbsp;42</span><span><i class="fa fa-heart"></i>&nbsp;&nbsp;318</span></div><a href="blog_open.html" class="text-uppercase">read more<i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      <div class="post-preview"><a href="blog_open.html"><img alt="" src="{{ asset('supersonic/img/blog/blog_2.png') }}"></a><a href="blog_open.html">
          <h4>One interesting thing</h4></a>
        <p>Lorem ipsum dolor sit amet, eros habemus ex pri, civibus Et probatus constituto ad has, ei minim dolor sit. Meliore eum mrepudiandae no quo, ne est malis tantas sapientem.</p>
        <div class="meta-data">
          <div class="activity"><span><i class="fa fa-eye"></i>&nbsp;&nbsp;1,257</span><span><i class="fa fa-comment"></i>&nbsp;&nbsp;42</span><span><i class="fa fa-heart"></i>&nbsp;&nbsp;318</span></div><a href="blog_open.html" class="text-uppercase">read more<i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      <div class="post-preview"><a href="blog_open.html"><img alt="" src="{{ asset('supersonic/img/blog/blog_1.png') }}"></a><a href="blog_open.html">
          <h4>One interesting thing</h4></a>
        <p>Lorem ipsum dolor sit amet, eros habemus ex pri, civibus Et probatus constituto ad has, ei minim dolor sit. Meliore eum mrepudiandae no quo, ne est malis tantas sapientem.</p>
        <div class="meta-data">
          <div class="activity"><span><i class="fa fa-eye"></i>&nbsp;&nbsp;1,257</span><span><i class="fa fa-comment"></i>&nbsp;&nbsp;42</span><span><i class="fa fa-heart"></i>&nbsp;&nbsp;318</span></div><a href="blog_open.html" class="text-uppercase">read more<i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      <div class="post-preview"><a href="blog_open.html"><img alt="" src="{{ asset('supersonic/img/blog/blog_2.png') }}"></a><a href="blog_open.html">
          <h4>One interesting thing</h4></a>
        <p>Lorem ipsum dolor sit amet, eros habemus ex pri, civibus Et probatus constituto ad has, ei minim dolor sit. Meliore eum mrepudiandae no quo, ne est malis tantas sapientem.</p>
        <div class="meta-data">
          <div class="activity"><span><i class="fa fa-eye"></i>&nbsp;&nbsp;1,257</span><span><i class="fa fa-comment"></i>&nbsp;&nbsp;42</span><span><i class="fa fa-heart"></i>&nbsp;&nbsp;318</span></div><a href="blog_open.html" class="text-uppercase">read more<i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      <div class="post-preview"><a href="blog_open.html"><img alt="" src="{{ asset('supersonic/img/blog/blog_1.png') }}"></a><a href="blog_open.html">
          <h4>One interesting thing</h4></a>
        <p>Lorem ipsum dolor sit amet, eros habemus ex pri, civibus Et probatus constituto ad has, ei minim dolor sit. Meliore eum mrepudiandae no quo, ne est malis tantas sapientem.</p>
        <div class="meta-data">
          <div class="activity"><span><i class="fa fa-eye"></i>&nbsp;&nbsp;1,257</span><span><i class="fa fa-comment"></i>&nbsp;&nbsp;42</span><span><i class="fa fa-heart"></i>&nbsp;&nbsp;318</span></div><a href="blog_open.html" class="text-uppercase">read more<i class="fa fa-angle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection