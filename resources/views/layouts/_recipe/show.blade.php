@extends('layouts.master')

@section('content')

<div class="main-container col2-right-layout">
  <div class="main container">
    <div class="row">
      <div class="col-main col-sm-9">
        <div class="page-title">
          <h2>RESEP</h2>
        </div>
        <div class="blog-wrapper" id="main">
          <div class="site-content" id="primary">
            <div role="main" id="content">
              <article class="blog_entry clearfix">
                <header class="blog_entry-header clearfix">
                  <div class="blog_entry-header-inner">
                    <h2 class="blog_entry-title">{{ $recipes->name }}</h2>
                  </div>
                  <!--blog_entry-header-inner--> 
                </header>
                <!--blog_entry-header clearfix-->
                <div class="entry-content">
                  <div class="featured-thumb">
                    <a href="#"><img width="500" height="300" class="img-responsive" src="{{ asset($recipes->cover) }}"></a>
                  </div><br>
                  <div class="entry-content">
                    {!! $recipes->description !!}
                  </div>
                </div>
                <footer class="entry-meta">
                  <time datetime="{{ $recipes->created_at }}" class="entry-date">{{ $recipes->created_at }}</time>
                </footer>
              </article><br>
{{--               <div class="comment-content">
                <div class="comments-wrapper">
                  <h3> Comments </h3>
                  <ul class="commentlist">
                    <li class="comment">
                      <div class="comment-wrapper">
                        <div class="comment-author vcard"> 
                          <p class="gravatar">
                            <a href="#"><img width="60" height="60" alt="avatar" src="images/avatar60x60.jpg"></a>
                          </p><span class="author">John Doe</span> 
                        </div>
                        <!--comment-author vcard-->
                        <div class="comment-meta">
                          <time datetime="2014-07-10T07:26:28+00:00" class="entry-date">Thu, Jul 10, 2014 07:26:28 am</time>
                        </div>
                        <!--comment-meta-->
                        <div class="comment-body">
                          Curabitur at vestibulum sem. Aliquam vehicula neque ac nibh suscipit ultrices. Morbi interdum accumsan arcu nec scelerisque ellentesque id erat sem, ut commodo nulla. Sed a nulla et eros fringilla. Phasellus eget purus nulla.
                        </div>
                      </div>
                    </li>
                  </ul>
                  <!--commentlist--> 
                </div>
                <!--comments-wrapper-->
                
                <div class="comments-form-wrapper clearfix">
                  <h3>Leave A reply</h3>
                  <form class="comment-form" method="post" id="postComment">
                    <div class="field">
                      <label>Name<em class="required">*</em></label>
                      <input type="text" class="input-text" title="Name" value="" id="user" name="user_name">
                    </div>
                    <div class="field">
                      <label>Email<em class="required">*</em></label>
                      <input type="text" class="input-text validate-email" title="Email" value="" id="email" name="user_email">
                    </div>
                    <div class="clear"></div>
                    <div class="field aw-blog-comment-area">
                      <label>Comment<em class="required">*</em></label>
                      <textarea rows="5" cols="50" class="input-text" title="Comment" id="comment" name="comment"></textarea>
                    </div>
                    <div class="button-set">
                      <input type="hidden" value="1" name="blog_id">
                      <button type="submit" class="bnt-comment"><span><span>Add Comment</span></span></button>
                    </div>
                  </form>
                </div>
                <!--comments-form-wrapper clearfix-->
              </div> --}}
            </div>
          </div>
        </div>
      </div>

      <div class="col-right sidebar col-sm-3">
        <div role="complementary" class="widget_wrapper13" id="secondary">
          <div class="popular-posts widget widget__sidebar" id="recent-posts-4">
            <h3 class="widget-title">Resep Populer</h3>
            <div class="widget-content">
              <ul class="posts-list unstyled clearfix">
                <li>
                  <figure class="featured-thumb"> 
                    <a href="#"> 
                      <img width="80" height="53" alt="blog image" src="{{ asset($recipes->cover) }}"> 
                    </a> 
                  </figure>
                  <!--featured-thumb-->
                  <h4>
                    <a title="Pellentesque posuere" href="{{ route('recipe.show', $recipes->slug) }}">{{ $recipes->name }}</a>
                  </h4>
                  <p class="post-meta">
                    <i class="icon-calendar"></i>
                    <time datetime="{{ $recipes->created_at }}" class="entry-date">{{ $recipes->created_at }}</time>
                  </p>
                </li>
              </ul>
            </div>
            <!--widget-content--> 
          </div>

          <!-- Banner Ad Block -->
          <div class="ad-spots widget widget__sidebar">
            <h3 class="widget-title">Ad Spots</h3>
            <div class="widget-content">
              <a target="_self" href="#" title="">
                <img alt="offer banner" src="{{ asset('frontend/images/rhs-banner.jpg') }}">
              </a>
            </div>
          </div><br>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection