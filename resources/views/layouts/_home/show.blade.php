@extends('layouts.master')

@section('content')

<!-- end breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <ul>
        <li class="home"> <a href="{{ route('home') }}" title="Go to Home Page">Home</a><span>&mdash;›</span></li>
        <li class=""> <a href="{{ route('all_product') }}" title="Go to Home Page">Product</a><span>&mdash;›</span></li>
        <li class="category13"><strong>Detail Product </strong></li>
      </ul>
    </div>
  </div>
</div>
<!-- end breadcrumbs --> 
<!-- main-container -->

<section class="main-container col1-layout">
  <div class="main container">
    <div class="col-main">
      <div class="row">
        <div class="product-view">
          <div class="product-essential">
            <form action="#" method="post" id="product_addtocart_form">
              <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
              <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">

                <ul class="moreview" id="moreview">
                  <li class="moreview_thumb thumb_1"> 
                    <img class="moreview_thumb_image" src="{{ asset($products->cover) }}" alt="thumbnail"> 
                    <img class="moreview_source_image" src="{{ asset($products->cover) }}" alt=""> 
                    <span class="roll-over">Roll over image to zoom in</span> 
                    <img  class="zoomImg" src="{{ asset($products->cover) }}" alt="thumbnail">
                  </li>

                  <li class="moreview_thumb thumb_2 moreview_thumb_active"> 
                    <img class="moreview_thumb_image" src="{{ asset($products->cover) }}" alt="thumbnail"> 
                    <img class="moreview_source_image" src="{{ asset($products->cover) }}" alt=""> 
                    <span class="roll-over">Roll over image to zoom in</span> 
                    <img  class="zoomImg" src="{{ asset($products->cover) }}" alt="thumbnail">
                  </li>

                  <li class="moreview_thumb thumb_3"> 
                    <img class="moreview_thumb_image" src="{{ asset($products->cover) }}" alt="thumbnail"> 
                    <img class="moreview_source_image" src="{{ asset($products->cover) }}" alt=""> 
                    <span class="roll-over">Roll over image to zoom in</span> 
                    <img  class="zoomImg" src="{{ asset($products->cover) }}" alt="thumbnail">
                  </li>

                  <li class="moreview_thumb thumb_4"> 
                    <img class="moreview_thumb_image" src="{{ asset($products->cover) }}" alt="thumbnail"> 
                    <img class="moreview_source_image" src="{{ asset($products->cover) }}" alt=""> 
                    <span class="roll-over">Roll over image to zoom in</span> 
                    <img  class="zoomImg" src="{{ asset($products->cover) }}" alt="thumbnail">
                  </li>

                  <li class="moreview_thumb thumb_5"> 
                    <img class="moreview_thumb_image" src="{{ asset($products->cover) }}" alt="thumbnail"> 
                    <img class="moreview_source_image" src="{{ asset($products->cover) }}" alt=""> 
                    <span class="roll-over">Roll over image to zoom in</span> 
                    <img  class="zoomImg" src="{{ asset($products->cover) }}" alt="thumbnail">
                  </li>

                  <li class="moreview_thumb thumb_6"> 
                    <img class="moreview_thumb_image" src="{{ asset($products->cover) }}" alt="thumbnail"> 
                    <img class="moreview_source_image" src="{{ asset($products->cover) }}" alt=""> 
                    <span class="roll-over">Roll over image to zoom in</span> 
                    <img  class="zoomImg" src="{{ asset($products->cover) }}" alt="thumbnail">
                  </li>
                </ul>

                <div class="moreview-control"> 
                  <a href="javascript:void(0)" class="moreview-prev"></a> 
                  <a href="javascript:void(0)" class="moreview-next"></a> 
                </div>
              </div>
              <div class="product-shop col-lg-6 col-sm-6 col-xs-12">
                <div class="product-name">
                  <h1>{{ $products->name }}</h1>
                </div>
{{--                 <div class="ratings">
                  <div class="rating-box">
                    <div class="rating"></div>
                  </div>
                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                </div> --}}
                <p class="availability in-stock">Stok Product : <span>{{ $products->quantity }}</span></p>
                <div class="price-block">
                  <div class="price-box">
                    <p class="special-price"> <span class="price-label">Regular Price:</span> <span class="price"> Rp {{ $products->price }} </span> </p>
                  </div>
                </div>
                <div class="short-description">
                  <h2>Deskripsi Barang</h2>
                  <p>{{ $products->description }}</p>
                </div>
                <div class="add-to-box">
                  <div class="add-to-cart">
                    <div class="pull-left">
                      <div class="custom pull-left">
                        <button 
                        onClick="var result = document.getElementById('qty'); 
                        var qty = result.value; if( !isNaN( qty ) &amp;&amp; 
                        qty &gt; 0 ) result.value--;return false;" 
                        class="reduced items-count" type="button">
                        <i class="icon-minus">&nbsp;</i>
                        </button>
                          <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                        <button onClick="var result = document.getElementById('qty'); 
                        var qty = result.value; 
                        if( !isNaN( qty )) result.value++;return false;" 
                        class="increase items-count" type="button">
                        <i class="icon-plus">&nbsp;</i>
                        </button>
                      </div>
                    </div>
                    <a href="{{ url('/cart/add') }}/{{ $products->id }}" class="button btn-cart" title="Tambah Keranjang">
                      <span><i class="icon-basket"></i>Tambah Keranjang</span>
                    </a>
                  </div>
                </div>
                <div class="social">
                  <ul>
                    <li class="fb"><a href="#"></a></li>
                    <li class="tw"><a href="#"></a></li>
                    <li class="youtube"><a href="#"></a></li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
          <div class="product-collateral">
{{--             <div class="col-sm-12 wow bounceInUp animated">
              <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a> </li>
                <li> <a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a> </li>
                <li> <a href="#product_tabs_custom1" data-toggle="tab">Custom Tab1</a> </li>
              </ul>
            </div> --}}
            <div class="col-sm-12">
              <div class="box-additional">
                <div class="related-pro wow bounceInUp animated">
                  <div class="slider-items-products">
                    <div class="new_title center">
                      <h2>Product Terkait</h2>
                    </div>
                    <div id="related-products-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4"> 
                        @foreach (\App\Product::where('status',1)->inRandomOrder()->limit(10)->get() as $product)

                        {{-- 
                        @foreach (\App\Product::where('category_id',1)->inRandomOrder()->limit(10)->get() as $product) --}}
                        <!-- Item -->
                        <div class="item">
                          <div class="col-item">
                            <div class="sale-label sale-top-right">Sale</div>
                            <div class="product-image-area"> <a class="product-image" title="{{ $product->name }}" href="{{ route('show', $product->slug) }}"> <img src="{{ $product->cover }}" class="img-responsive" alt="a" /> </a>
                              <div class="hover_fly"> 
                                <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                                <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                                </a> <a class="quick-view" href="#">
                                <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                                </a> <a class="add_to_compare" href="#">
                                <div><i class="icon-random"></i><span>Add to compare</span></div>
                                </a> <a class="addToWishlist wishlistProd_5" href="#" >
                                <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                                </a> </div>
                            </div>
                            <div class="info">
                              <div class="info-inner">
                                <div class="item-title"> <a href="{{ route('show', $product->slug) }}" title="{{ $product->name }}">{{ $product->name }}</a> </div>
                                <!--item-title-->
                                <div class="item-content">
                                  <div class="price-box">
                                    <p class="special-price"> <span class="price"> Rp {{ $product->price }} </span> </p>
                                  </div>
                                </div>
                                <!--item-content--> 
                              </div>
                              <!--info-inner-->
                              
                              <div class="clearfix"> </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Item -->
                        @endforeach

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End main-container -->

@endsection