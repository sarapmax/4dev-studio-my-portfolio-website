@extends('backoffice.layout.master')

@section('master-content')

<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li  class="nav-header">
                    <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <center>
                                <img style="width:90px;" src="{{ asset('img/4dev-logo-blue.png') }}">
                                </center>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="{{ url('backoffice/logout') }}">Logout</a></li>
                            </ul>
                    </div>
                    <div class="logo-element">
                        <img style="width:30px;" src="{{ asset('img/4dev-logo-blue.png') }}">
                    </div>
                </li>
                <li {{ Request::segment(2) == '' ? 'class=active' : '' }}>
                    <a href="{{ url('/backoffice') }}"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
                </li>
                <li {{ Request::segment(2) == 'portfolios' ? 'class=active' : '' }}>
                    <a href="#"> 
                        <i class="fa fa-file-text"></i> 
                        <span class="nav-label"> Portfolios </span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level collapse">
                        <li {{ Request::segment(3) == 'type' ? 'class=active' : '' }}>
                            <a href="{{ url('backoffice/portfolios/type') }}"> <span class="nav-label">Type</span> </a>
                        </li>
                        <li {{ Request::segment(3) == 'portfolio' ? 'class=active' : '' }}>
                            <a href="{{ url('backoffice/portfolios/portfolio') }}"> <span class="nav-label">Portfolio</span> </a>
                        </li>
                    </ul>
                </li>

                <li {{ Request::segment(2) == 'blogs' ? 'class=active' : '' }}>
                    <a href="#"> 
                        <i class="fa fa-paper-plane"></i> 
                        <span class="nav-label"> Blogs </span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level collapse">
                        <li {{ Request::segment(3) == 'blog' ? 'class=active' : '' }}>
                            <a href="{{ url('backoffice/blogs/blog') }}"> <span class="nav-label">Blog</span> </a>
                        </li>
                        <li {{ Request::segment(3) == 'tag' ? 'class=active' : '' }}>
                            <a href="{{ url('backoffice/blogs/tag') }}"> <span class="nav-label">Tag</span> </a>
                        </li>
                    </ul>
                </li>

                <li {{ Request::segment(2) == 'skill' ? 'class=active' : '' }}>
                    <a href="{{ url('backoffice/skill') }}"><i class="fa fa-gamepad"></i> <span class="nav-label">Skill</span> </a>
                </li>
                <li {{ Request::segment(2) == 'experience' ? 'class=active' : '' }}>
                    <a href="{{ url('backoffice/experience') }}"><i class="fa fa-certificate"></i> <span class="nav-label">Experience</span> </a>
                </li>
                <li {{ Request::segment(2) == 'contact' ? 'class=active' : '' }}>
                    <a href="{{ url('backoffice/contact') }}"><i class="fa fa-mail"></i> <span class="nav-label">Feedback </span><span class="label label-primary pull-right">{{ App\Contact::whereRead(0)->count() }}</span></a>
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="search_results.html"></form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <i class="fa fa-user"> </i> {{ auth()->guard('admin')->user()->name }}
                    </li>
                    <li>
                        <a href="{{ url('backoffice/logout') }}">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>

        @yield('content')

        <div class="footer">
            <div class="pull-right">
                SarapMax Web Developer
            </div>
            <div>
                <strong>Copyright</strong> 4Dev Studio &copy; 2017
            </div>
        </div>

    </div>
</div>

@endsection