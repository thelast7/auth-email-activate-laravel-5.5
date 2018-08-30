@extends('layouts.master')

@section('content')

  <!-- breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <ul>
          <li class="home"> <a href="{{ route('home') }}" title="Go to Home Page">Home</a><span>&mdash;›</span></li>
          <li class=""> <a href="{{ route('all_product') }}" title="Go to Home Page">Produk</a><span>&mdash;›</span></li>
          <li class="category13"><strong>Semua Produk</strong></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End breadcrumbs --> 
  <!-- Two columns content -->
  <div class="main-container col2-left-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-12 wow bounceInUp animated">
          <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1"> 
                  
                  <!-- Item -->
                  <div class="item"> <a href="#x"><img alt="" src="{{ asset('frontend/images/banner.png')}}"></a>
                    <div class="cat-img-title cat-bg cat-box">
                    </div>
                  </div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item"> <a href="#x"><img alt="" src="{{ asset('frontend/images/women_banner1.png')}}"></a> </div>
                  <!-- End Item --> 
                  
                </div>
              </div>
            </div>
          </div>
          <div class="category-title">
            <h1>Telur</h1>
          </div>
          <div class="category-products">
            <div class="toolbar">
              <div id="sort-by">
                <label class="left">Sort By: </label>
                <ul>
                  <li><a href="#">Position<span class="right-arrow"></span></a>
                    <ul>
                      <li><a href="#">Name</a></li>
                      <li><a href="#">Price</a></li>
                      <li><a href="#">Position</a></li>
                    </ul>
                  </li>
                </ul>
                <a class="button-asc left" href="#" title="Set Descending Direction"><span class="glyphicon glyphicon-arrow-up"></span></a> </div>
              <div class="pager">
                <div id="limiter">
                  <label>View: </label>
                  <ul>
                    <li><a href="#">15<span class="right-arrow"></span></a>
                      <ul>
                        <li><a href="#">20</a></li>
                        <li><a href="#">30</a></li>
                        <li><a href="#">35</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="pages">
                  <label>Page:</label>
                  <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <ul class="products-grid">
              @foreach($products as $product)
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="product-image-area"> 
                    <a class="product-image" title="{{ $product->name }}" href="{{ route('show', $product->slug) }}"> 
                      <img src="{{ $product->cover }}" height="300" width="360" class="img-responsive" alt="a" /> 
                    </a>
                    <div class="hover_fly">
                      <a class="exclusive ajax_add_to_cart_button" href="{{ url('/cart/add') }}/{{ $product->id }}" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="#">
                      <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                      </a> <a class="add_to_compare" href="#">
                      <div><i class="icon-random"></i><span>Add to compare</span></div>
                      </a> <a class="addToWishlist wishlistProd_5" href="#" >
                      <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                      </a> 
                    </div>
                  </div>
                  <div class="info">
                    <div class="info-inner">
                      <div class="item-title"> <a title="{{ $product->name }}" href="{{ route('show', $product->slug) }}">{{ $product->name }}</a> </div>
                      <!--item-title-->
                      <div class="item-content">
                        {{-- <div class="ratings">
                          <div class="rating-box">
                            <div class="rating"></div>
                          </div>
                        </div> --}}
                        <div class="price-box">
                          <p class="special-price"> <span class="price">Rp {{ $product->price }}</span> </p>
                        </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </section>

        {{-- <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">
          <div class="side-nav-categories">
            <div class="block-title"> Categories </div> --}}
            <!--block-title--> 
            <!-- BEGIN BOX-CATEGORY -->
            {{-- <div class="box-content box-category">
              <ul>
                <li class="active"> <a  href="#">Telur</a> <span class="subDropdown minus"></span>
                  <ul class="level0_415">
                    @foreach($products as $product)
                    <li> <a href="#">{{ $product->category->name }}</a>
                    </li>
                    @endforeach
                  </ul>
            </div>
          </div>
              </div>
          </div>
        </aside> --}}
      </div>
    </div>
  </div>
  <!-- End Two columns content -->
@endsection