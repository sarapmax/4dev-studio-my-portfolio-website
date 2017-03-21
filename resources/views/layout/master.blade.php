<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="apple-touch-icon" sizes="180x180" href="{{  asset('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="{{  asset('favicons/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{  asset('favicons/favicon-16x16.png') }}" sizes="16x16">
    <link rel="manifest" href="{{  asset('favicons/manifest.json') }}">
    <link rel="mask-icon" href="{{  asset('favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}">
    <meta name="theme-color" content="#ffffff">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('supersonic/css/animsition.min.css') }}">
    <link rel="stylesheet" href="{{ asset('supersonic/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('supersonic/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('supersonic/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('supersonic/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('supersonic/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('supersonic/css/graph.css') }}">
    <link rel="stylesheet" href="{{ asset('supersonic/css/main.css') }}">
    <title>4dev | Studio</title>
    <link rel="stylesheet" href="{{ asset('supersonic/css/dark.css') }}">

    <link href="{{ asset('bower_components/devicon/devicon.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/devicon/devicon-colors.css') }}" rel="stylesheet">

    <link href="{{ asset('bower_components/highlight/styles/monokai-sublime.css') }}" rel="stylesheet">

    <link href="{{ asset('bower_components/sweetalert/dist/sweetalert.css') }}" rel="stylesheet">

    <link href="{{ asset('custom.css') }}" rel="stylesheet">
  </head>
  <body class="about-page animsition">
    <div class="showbox">
      <div class="loader">
        <svg viewBox="25 25 50 50" class="circular">
          <circle cx="50" cy="50" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" class="path"></circle>
        </svg>
      </div>
    </div>
    <div class="background"></div>
    <div class="flex-wrapper">
      @yield('content')
    </div>
    <div class="container navigation hidden-xs">
      <nav>
        <ul class="menu text-uppercase">
          <li style="padding:0px;"><a href="{{ url('/') }}" class="animsition-link"><img style="width:40px;" src="{{ asset('img/4dev-logo-blue.png') }}"></a></li>
          <li><a href="{{ url('/') }}" class="animsition-link {{ Request::segment(1) == '' ? 'active' : '' }}">home</a></li>
          <li><a href="{{ url('about') }}" class="animsition-link {{ Request::segment(1) == 'about' ? 'active' : '' }}">about</a></li>
          <li><a href="{{ url('portfolios') }}" class="animsition-link {{ Request::segment(1) == 'portfolios' ? 'active' : '' }}"> portfolio</a></li>
          <li><a href="{{ url('contact') }}" class="animsition-link {{ Request::segment(1) == 'contact' ? 'active' : '' }}">contact</a></li>
          <li><a href="{{ url('blogs') }}" class="animsition-link {{ Request::segment(1) == 'blogs' ? 'active' : '' }}">blog</a></li>
        </ul>
        <ul class="social-links">
          <li><a href="#" class="fa fa-facebook"></a></li>
          <li><a href="#">LINE</a></li>
        </ul>
      </nav>
    </div>
    <div class="menu-mobile visible-xs-block">
      <div class="menu-icon-wrapper">
        <div class="toggle-icon"><span class="bar"></span><span></span><span class="bar"></span></div>
      </div>
      <div class="menu-content">
        <div class="container main-content align-center">
          <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
              <ul class="menu">
                <li><a href="{{ url('/') }}" class="active animsition-link">home</a></li>
                <li><a href="{{ url('about') }}" class="animsition-link">about</a></li>
                <li><a href="{{ url('portfolio') }}" class="animsition-link"> portfolio</a></li>
                <li><a href="{{ url('contact') }}" class="animsition-link">contact</a></li>
                <li><a href="{{ url('blogs') }}" class="animsition-link">blog</a></li>
              </ul>
              <div class="line"></div>
              <ul class="social-links">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#">LINE</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      if(/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) {
          document.write('<script src="{{ asset('supersonic/js/browser-polyfill.min.js') }}"><\/script>');
          document.write('<script src="{{ asset('supersonic/js/innersvg.js') }}"><\/script>');
      }
    </script>
    <script src="{{ asset('supersonic/js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('supersonic/js/animsition.min.js') }}"></script>
    <script src="{{ asset('supersonic/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('supersonic/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('supersonic/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('supersonic/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('supersonic/js/masonry-horizontal.js') }}"></script>
    <script src="{{ asset('supersonic/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('supersonic/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('supersonic/js/graph.js') }}"></script>
    <script src="{{ asset('supersonic/js/main.js') }}"></script>
    <script src="{{ asset('bower_components/highlight/highlight.pack.js') }}"></script>
    <script src="{{ asset('bower_components/sweetalert/dist/sweetalert.min.js') }}"></script>
    
    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')

    <script>hljs.initHighlightingOnLoad();</script>
  </body>
</html>