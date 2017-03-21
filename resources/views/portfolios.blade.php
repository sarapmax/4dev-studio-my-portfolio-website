@extends('layout.master')

@section('content')

<div class="main-content align-center">
  <div class="container">
    <div class="row overflow-visible">
      <div class="col-sm-12">
        <div style="padding-top: 70px;" class="visible-md visible-lg"></div>
        <div class="filter-wrapper">
          <div class="portfolio-filter filter">
            <button data-filter="*" class="grid-btn active">All</button>
            @foreach($portfolio_types as $portfolio_type)
            <button data-filter=".{{ $portfolio_type->slug }}" class="grid-btn">{{ $portfolio_type->name }}</button>
            @endforeach
          </div>
        </div>
        <div class="portfolio-list grid list-unstyled">
          <div class="grid-sizer"></div>
          <div class="gutter-sizer"></div>
          @foreach($portfolios as $portfolio)
          <div class="portfolio-item {{ $portfolio->portfolio_type->slug }}">
            <div class="content">
              <span>
                <a href="{{ url('portfolio/'.$portfolio->slug) }}" class="animsition-link">
                  {{ $portfolio->name }}
                </a>
              </span>
              <img alt="" src="{{ asset('uploads/portfolio_cover_images/'.$portfolio->cover_img) }}">
              <a href="{{ url('portfolio/'.$portfolio->slug) }}" class="animsition-link"></a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

@endsection