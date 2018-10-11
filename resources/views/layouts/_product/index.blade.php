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
      <section class="col-main col-sm-12 wow">
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
        </div><br>
        <div class="category-title">
          <h1>Telur</h1>
        </div>
        <div class="category-products">
          <ul class="products-grid">
            @foreach($products as $product)
            <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
              <div class="col-item">
                <div class="product-image-area"> 
                  <a class="product-image" title="{{ $product->name }}" href="{{ route('show', $product->slug) }}"> 
                    <img src="{{ $product->getImage() }}" height="300" width="360" class="img-responsive"> 
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
      <div class="container text-center pages pager toolbar">
        {{ $products->links() }}
      </div>
    </div>
  </div>
</div><br>
<!-- End Two columns content -->
@endsection