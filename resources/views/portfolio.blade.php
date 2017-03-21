@extends('layout.master')


@section('content')

<div class="main-content align-center">
  <div class="container-fluid">
    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-offset-1 visible-lg visible-md">
            <div class="open-project-lightbox">
              @foreach($portfolio->portfolio_image as $image)
              <a href="{{ asset('uploads/portfolio_images/'.$image->image) }}">
                <span class="plus"><span></span><span></span></span>
                <img alt="{{ $image->image }}" src="{{ asset('uploads/portfolio_images/'.$image->image) }}">
              </a>
              @endforeach
            </div>
          </div>
          <div class="col-md-3 col-md-offset-0 col-sm-8 col-sm-offset-1 project-description">
            <h5 class="text-1-opacity">{{ $portfolio->name }}</h5>
            <p>{!! $portfolio->description !!}</p>
            <div class="project-info">
              <p>
                <span class="info text-uppercase vertical-text">Technologies</span><span class="info-description"> 
                  @foreach(explode('|', $portfolio->dev_icons) as $icon)
                    <i title="{{ $icon }}" class="devicon-{{ $icon }}-plain fa-2x"></i>&nbsp;
                  @endforeach
                </span>
              </p><br/>
              <p><span class="info text-uppercase vertical-text">client</span><span class="info-description"> {{ $portfolio->client }}</span></p>
              <p><span class="info text-uppercase vertical-text">services</span><span class="info-description"> {{ $portfolio->services }}</span></p>
              <p><span class="info text-uppercase vertical-text">year</span><span class="info-description"> {{ $portfolio->year }}</span></p>
              <p><span class="info text-uppercase vertical-text">website</span><span class="info-description"><a href="{{ $portfolio->website }}" target="_blank"> {{ $portfolio->website }}</a></span></p>
              <p><span class="info text-uppercase vertical-text">share</span><span class="info-description"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://www.regentmfu.net/" class="fa fa-facebook"></a></span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection