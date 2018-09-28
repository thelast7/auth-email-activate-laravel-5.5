@extends('layouts.master')

@section('content')
<!-- Slider -->
<div id="magik-slideshow" class="magik-slideshow">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-12 col-md-8">
        <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
          <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
            <ul>
              <li data-transition='random' data-slotamount='7' data-masterspeed='1000'>
                <img src="{{ ('frontend/images/slide-img1.jpg') }}" data-bgposition='right top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>
                </div>

                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>
                </div>

                <div class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>
                  
                </div>
                
                <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='130'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>
                </div>

                <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>
                </div>

              </li>

              <li data-transition='random' data-slotamount='7' data-masterspeed='1000' class="black-text">
                <img src="{{ asset('frontend/images/slide-img2.jpg') }}"  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>

                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>
                </div>
                
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>
                </div>

                <div class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>
                  
                </div>

                <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='130'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>
                </div>

                <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>
                </div>

              </li>

              <li data-transition='random' data-slotamount='7' data-masterspeed='1000' class="black-text">
                <img src="{{ asset('frontend/images/slide-img3.jpg') }}"  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>

                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>
                </div>

                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>
                </div>

                <div class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>
                 
                </div>

                <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='130'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>
                </div>

                <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>
                </div>

              </li>
            </ul>
            <div class="tp-bannertimer"></div>
          </div>
        </div>
      </div>
      <aside class="col-xs-12 col-sm-12 col-md-4">
        <div class="RHS-banner">
          <div class="add">
            <a href="#">
              <img alt="banner-img" src="{{ asset('frontend/images/rhs-banner.jpg') }}">
            </a>
            <div class="overlay">
              <a class="info" href="#"></a>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
</div>
<!-- end Slider -->

<!-- header service -->
<div class="container">
  <div class="header-service wow bounceInUp animated">
    <div class="col-lg-3 col-sm-6 col-xs-3">
      <div class="content">
        <div class="icon-truck">&nbsp;</div>
        <span class="hidden-xs"><strong>FREE SHIPPING</strong> on order over $99</span>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-3">
      <div class="content">
        <div class="icon-support">&nbsp;</div>
        <span class="hidden-xs"><strong>Customer Support</strong> Service</span></div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-3">
      <div class="content">
        <div class="icon-money">&nbsp;</div>
        <span class="hidden-xs">3 days <strong>Money Back</strong> Guarantee</span></div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-3">
      <div class="content">
        <div class="icon-dis">&nbsp;</div>
        <span class="hidden-xs"><strong>5% discount</strong> on order over $199</span>
      </div>
    </div>
  </div>
</div>
<!-- end header service --> 

<!--  brand logo -->
<div class="container">
  <div class="brand-logo ">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end  brand logo -->

<!-- All product -->
<section class="featured-pro container">
  <div class="slider-items-products">
    <div class="new_title center">
      <h2>All Products</h2>
    </div>
    <div id="featured-slider" class="product-flexslider hidden-buttons">
      <div class="slider-items slider-width-col4"> 

        @foreach ($products as $product)
        <!-- Item -->
        <div class="item">
          <div class="col-item">
            <div class="sale-label sale-top-right">Sale</div>
            <div class="product-image-area"> 
              <a class="product-image" title="{{ $product->name }}" href="{{ route('show', $product->slug) }}"> 
                <img src="{{ $product->getImage() }}" class="img-responsive" alt="sembapur" /> 
              </a>
              <div class="actions-links">
                <span class="add-to-links"> 
                <a title="magik-btn-quickview" class="magik-btn-quickview" href="{{ route('show', $product->slug) }}">
                  <span>quickview</span>
                </a> 
                <a title="Add to Wishlist" class="link-wishlist" href="#">
                  <span>Add to Wishlist</span>
                </a> 
                <a title="Add to Compare" class="link-compare" href="{{ route('show', $product->slug) }}">
                  <span>Add to Compare</span></a>
                </span> 
              </div>
            </div>
            <div class="info">
              <div class="info-inner">
                <div class="item-title"> 
                  <a title="{{ $product->name }}" href="{{ route('show', $product->slug) }}"> {{ $product->name }} </a> 
                </div>
                <!--item-title-->
                <div class="item-content">
                  {{-- <div class="ratings">
                    <div class="rating-box">
                      <div class="rating"></div>
                    </div>
                  </div> --}}
                  <div class="price-box">
                    <p class="special-price"> <span class="price"> Rp{{ $product->price }} </span> </p>
                  </div>
                </div>
                <!--item-content--> 
              </div>
              <!--info-inner-->
              <div class="actions">
                <button type="button" title="Tambahkan ke Keranjang" class="button btn-cart"><a href="{{ url('/cart/add') }}/{{ $product->id }}"><span>Masuk Keranjang</span></a></button>
              </div>
              <!--actions-->
              
              <div class="clearfix"> </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
        @endforeach
      </div>
    </div>
  </div>
</section>
<!-- End All product --> 

<!-- promo banner section -->
@include('layouts._banner.index')
<!-- End promo banner section -->

@foreach($categories as $category)
<!-- batas row box category kiri dan kanan -->
<section class="middle-slider container">
  <div class="row">
{{-- box category sisi kiri --}}
    <div class="col-md-12">
      <div class="bag-product-slider small-pr-slider cat-section">
        <div class="slider-items-products">
          <div class="new_title center">
            <h2>{{ $category->name }}</h2>
          </div>
          <div id="bag-seller-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col3"> 
              
          @foreach($category->product as $product)
              <!-- Item -->
              <div class="item">
                <div class="col-item">
                  <div class="product-image-area"> 
                    <a class="product-image" title="{{ $product->name }}" href="{{ route('show', $product->slug) }}"> 
                      <img src="{{ $product->getImage() }}" height="350" width="350" class="img-responsive" alt="a" /> 
                    </a>
                    <div class="actions-links">
                      <span class="add-to-links"> 
                        <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> 
                        <a title="Add to Wishlist" class="link-wishlist" href="#"><span>Add to Wishlist</span></a> 
                        <a title="Add to Compare" class="link-compare" href="#"><span>Add to Compare</span></a></span> 
                    </div>
                  </div>
                  <div class="info">
                    <div class="info-inner">
                      <div class="item-title"> 
                        <a title="{{ $product->name }}" href="#"> {{ $product->name }} </a> 
                      </div>
                      <!--item-title-->
                      <div class="item-content">
                        <div class="price-box">
                          <p class="special-price"> <span class="price"> Rp {{$product->price}} </span> </p>
                        </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    <div class="actions">
                      <button type="button" title="Tambahkan ke Keranjang" class="button btn-cart">
                        <a href="{{ url('/cart/add') }}/{{ $product->id }}"><span>Masuk Keranjang</span></a>
                      </button>
                    </div>
                    <!--actions-->
                    
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
  </div> {{-- End box item category sisi kanan--}}
  <br>
</section>
@endforeach
<br>
<!-- End middle slider --> 
@endsection