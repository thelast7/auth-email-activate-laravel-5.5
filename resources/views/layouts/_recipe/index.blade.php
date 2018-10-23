@extends('layouts.master')

@section('content')

<div class="main-container col2-right-layout">
  <div class="main container">
    <div class="row">
      <div class="col-main col-sm-9">
        <div class="page-title">
          <h2>PILIH RESEP YANG KAMU INGINKAN!</h2>
        </div>
        <div class="blog-wrapper" id="main">
          <div class="site-content" id="primary">
            <div role="main" id="content">
              @foreach($recipes as $recipe)
              <article class="blog_entry clearfix wow">
                <header class="blog_entry-header clearfix">
                  <div class="blog_entry-header-inner">
                    <h2 class="blog_entry-title">{{ $recipe->name }}</a></h2>
                  </div>
                  <!--blog_entry-header-inner--> 
                </header>
                <div class="entry-content">
                  <div class="featured-thumb">
                    <a href="{{ route('recipe.show', $recipe->slug) }}">
                      <img width="500" height="300" src="{{ $recipe->getImage() }}" class="img-responsive">
                    </a>
                  </div>
                  <br>
                  <div class="entry-content">
                    <p>{!! substr($recipe->description,0, 5) !!}{!! strlen($recipe->description) > 5 ? "..." : "" !!}</p>
                  </div>
                    <a class="btn btn-info" href="{{ route('recipe.show', $recipe->slug) }}"><span>Selengkapnya</span></a>
                </div>
              </article><br>
              @endforeach
            </div>
            <div class="pages">
              {!! $recipes->links() !!}
            </div><br>
          </div>
        </div>
      </div>
      <div class="col-right sidebar col-sm-3">
        <div role="complementary" class="widget_wrapper13" id="secondary">
          <div class="popular-posts widget widget__sidebar " id="recent-posts-4">
            <h3 class="widget-title">Resep Populer</h3>
            <div class="widget-content">
              <ul class="posts-list unstyled clearfix">
                @foreach($recipes->random(1) as $recipe)
                <li>
                  <figure class="featured-thumb"> 
                    <a href="#"> 
                      <img width="80" height="53" src="{{ $recipe->getImage() }}"> 
                    </a> 
                  </figure>
                  <h4>
                    <a title="{{ $recipe->name }}" href="#">{{ $recipe->name }}</a>
                  </h4>
                  <p class="post-meta">
                    <i class="icon-calendar"></i>
                    <time class="entry-date">{{ $recipe->created_at }}</time>
                  </p>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
          
          <!-- Banner Ad Block -->
          <div class="ad-spots widget widget__sidebar">
            <h3 class="widget-title">Ads Spots</h3>
            <div class="widget-content">
              <a target="_self" href="#" title="">
                <img alt="offer banner" src="{{ asset('frontend/images/rhs-banner.jpg') }}">
              </a>
            </div>
          </div><br>
          <!-- Banner Text Block -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection