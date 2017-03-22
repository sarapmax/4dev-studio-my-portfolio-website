@extends('layout.master')

@section('content')


<div class="main-content align-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-10 home-headings-container">
        <div class="title-box">
          <div data-background="{{ asset('supersonic/img/main_bg/text_bg_1.png') }}" class="text_bg_1 fullscreen_bg"></div>
          <div data-background="{{ asset('supersonic/img/main_bg/text_bg_2.png') }}" class="text_bg_2 fullscreen_bg"></div>
          <div data-background="{{ asset('supersonic/img/main_bg/text_bg_3.png') }}" class="text_bg_3 fullscreen_bg"></div>
          <div data-background="{{ asset('supersonic/img/main_bg/text_bg_4.png') }}" class="text_bg_4 fullscreen_bg"></div>
          <h1 class="home-heading text-1-opacity">I` m SarapMax</h1>
          <h4 class="home-subheading">WEB Developer, UI Designer</h4>
          <h1 data-fontfamily="Poppins" data-bg="#1e1b22" data-text-mobile="Dev" data-text-desktop="4dev" class="title">Hello</h1>
        </div>
      </div>
      <div class="col-sm-12 text-center"><a href="{{ url('about') }}" class="btn btn-primary text-uppercase">About Me</a></div>
    </div>
  </div>
</div>

@endsection