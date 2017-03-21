@extends('layout.master')

@section('content')

<div class="main-content align-center">
	<div class="container">
	  <div class="row">
	    <div class="post">
	      <div class="row margin-0">
	        <div class="col-md-10 col-md-offset-1 col-sm-10">
	          <h2 class="text-center text-1-opacity">Morning Beauty</h2>
	          <div class="post-img"><img alt="" src="{{ asset('supersonic/img/blog/blog-open-img.png') }}"></div>
	        </div>
	        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-1">
	          <div class="post-text">
	            {!! App\Blog::find(1)->body !!}
	            <div class="meta-data">
	              <div class="activity"><span><i class="fa fa-eye"></i>&nbsp;&nbsp;1,257</span><span><i class="fa fa-comment"></i>&nbsp;&nbsp;42</span><span><i class="fa fa-heart"></i>&nbsp;&nbsp;318</span></div><span class="share text-uppercase"><span>share:</span><a href="#" class="fa fa-facebook"></a><a href="#" class="fa fa-instagram"></a><a href="#" class="fa fa-twitter"></a><a href="#" class="fa fa-pinterest"></a></span>
	            </div>
	  {{--           config.extraPlugins = 'codesnippet,colorbutton,colordialog,uploadimage,colordialog';
	config.codeSnippet_theme = 'monokai_sublime';
	config.imageUploadUrl = '/uploader/upload.php?type=Images'; --}}
	          </div>
	        </div>
	        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-1">
	          <div id="comments">
	            <h2 class="brand-color text-center">Comments</h2>
	            <ol class="comment-list">
	              <li class="comment">
	                <div class="comment-body"><a href="#!" class="avatar"><img alt="" src="img/blog/comment_1.png"></a>
	                  <div>
	                    <div class="vertical-line"></div>
	                    <div class="comment-header">
	                      <h5>Nick Michael</h5><span class="time">12.09.2016 12:34</span>
	                    </div>
	                    <div class="comment-text">
	                      <p>Lorem ipsum dolor sit amet, eros habemus ex pri, civibus probatus constituto ad has, ei minim dolor sit. Meliore repudiandae no quo, ne est malis tantas sapientem.</p>
	                    </div>
	                    <div class="comment-footer"><a href="#!" class="reply"><i class="fa fa-reply"></i>Reply</a><a class="like"><i class="fa fa-thumbs-o-up"></i>26</a><a class="dislike"><i class="fa fa-thumbs-o-down"></i>0</a></div>
	                  </div>
	                </div>
	                <div class="reply pull-right">
	                  <ol class="comment list-unstyled">
	                    <li class="comment">
	                      <div class="comment-body"><a href="#!" class="avatar"><img alt="" src="img/blog/comment_2.png"></a>
	                        <div>
	                          <div class="vertical-line"></div>
	                          <div class="comment-header">
	                            <h5>Nick Michael</h5><span class="time">12.09.2016 12:34</span>
	                          </div>
	                          <div class="comment-text">
	                            <p>Lorem ipsum dolor sit amet, eros habemus ex pri</p>
	                          </div>
	                          <div class="comment-footer"><a href="#!" class="reply"><i class="fa fa-reply"></i>Reply</a><a class="like"><i class="fa fa-thumbs-o-up"></i>26</a><a class="dislike"><i class="fa fa-thumbs-o-down"></i>0</a></div>
	                        </div>
	                      </div>
	                    </li>
	                  </ol>
	                </div>
	              </li>
	              <li class="comment">
	                <div class="comment-body"><a href="#!" class="avatar"><img alt="" src="img/blog/comment_1.png"></a>
	                  <div>
	                    <div class="vertical-line"></div>
	                    <div class="comment-header">
	                      <h5>Nick Michael</h5><span class="time">12.09.2016 12:34</span>
	                    </div>
	                    <div class="comment-text">
	                      <p>Lorem ipsum dolor sit amet, eros habemus ex pri, civibus probatus constituto ad has, ei minim dolor sit. Meliore repudiandae no quo, ne est malis tantas sapientem.</p>
	                    </div>
	                    <div class="comment-footer"><a href="#!" class="reply"><i class="fa fa-reply"></i>Reply</a><a class="like"><i class="fa fa-thumbs-o-up"></i>26</a><a class="dislike"><i class="fa fa-thumbs-o-down"></i>0</a></div>
	                  </div>
	                </div>
	              </li>
	            </ol>
	          </div>
	        </div>
	        <div class="col-md-12 col-sm-10">
	          <div class="line"></div>
	        </div>
	        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-1">
	          <div class="send-comment">
	            <h4>Send a comment</h4>
	            <form>
	              <div class="name form-group pull-left">
	                <input id="name" type="text" name="name" class="form-control">
	                <label for="name">Your name</label>
	              </div>
	              <div class="email form-group pull-right">
	                <input id="email" type="text" name="email" class="form-control">
	                <label for="email">Your name</label>
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group text-area message">
	                <textarea rows="3" name="msg" id="message" class="scroll form-control"></textarea>
	                <label for="message">Comment</label>
	              </div>
	              <button class="btn btn-primary">comment</button>
	            </form>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</div>
<div class="container navigation">
	<div class="portfolio-open-nav"><a href="blog_open.html" class="prev animsition-link"><i class="fa fa-angle-left"></i>prev</a><a href="blog_open_2.html" class="next animsition-link">next<i class="fa fa-angle-right"></i></a><a href="blog.html" class="close animsition-link"><span></span><span></span></a></div>
</div>

@endsection
