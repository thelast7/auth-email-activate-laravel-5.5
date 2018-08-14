@extends('layouts.master')

@section('content')
  <!-- Slider -->
  <div id="magik-slideshow" class="magik-slideshow">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-12 col-md-8 wow bounceInUp animated">
          <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
              <ul>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img2.jpg'><img src="{{ ('frontend/images/slide-img1.jpg') }}" data-bgposition='right top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                  
                  <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Fresh From Farmers
                  </div>

                  <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>EGG
                  </div>

                  <div class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="view-more">View More</a> <a href='#' class="buy-btn">Buy Now</a></div>
                  
                  <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='130'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>In augue urna, nunc, tincidunt, augue,<br>
                    augue facilisis facilisis.
                  </div>

                  <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </div>

                </li>

                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img2.jpg' class="black-text"><img src="{{ asset('frontend/images/slide-img2.jpg') }}"  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>

                  <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Super Hot
                  </div>
                  
                  <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Super Promo
                  </div>

                  <div class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="view-more">View More</a> <a href='#' class="buy-btn">Buy Now</a>
                  </div>

                  <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='130'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>In augue urna, nunc, tincidunt, augue,<br>
                    augue facilisis facilisis.
                  </div>

                  <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </div>

                </li>

                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img3.jpg' class="black-text"><img src="{{ asset('frontend/images/slide-img3.jpg') }}"  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>

                  <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Super Hot
                  </div>

                  <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Super Promo
                  </div>

                  <div class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="view-more">View More</a> <a href='#' class="buy-btn">Buy Now</a>
                  </div>

                  <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='130'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>In augue urna, nunc, tincidunt, augue,<br>
                    augue facilisis facilisis.
                  </div>

                  <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </div>

                </li>
              </ul>
              <div class="tp-bannertimer"></div>
            </div>
          </div>
        </div>
        <aside class="col-xs-12 col-sm-12 col-md-4 wow bounceInUp animated">
          <div class="RHS-banner">
            <div class="add"><a href="#"><img alt="banner-img" src="{{ asset('frontend/images/rhs-banner.jpg') }}"></a>
              <div class="overlay"><a class="info" href="#">Learn More</a></div>
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
          <div class="icon-sitemap">&nbsp;</div>
          <span class="hidden-xs"><strong>FREE SHIPPING</strong> on order over Rp99</0span></div>
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
          <span class="hidden-xs"><strong>5% discount</div>
      </div>
    </div>
  </div>
  <!-- end header service --> 

  <!--  brand logo -->
      <div class="wow bounceInUp animated">
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
  
  <!-- main container -->
  
  <section class="main-container col1-layout home-content-container">
    <div class="container">
      <div class="std">
        <div class="best-seller-pro wow bounceInUp animated">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Best Packaging</h2>
            </div>
            <div id="best-seller-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4"> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{ asset('frontend/products-images/product2.jpg') }}" class="img-responsive" alt="product-image" /> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Tambah</span></div>
                        </a> <a class="quick-view" href="#">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> <a class="add_to_compare" href="compare.html">
                        <div><i class="icon-random"></i><span>Add to compare</span></div>
                        </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html" >
                        <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                        </a> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
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
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="new-label new-top-right">New</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{ asset('frontend/products-images/product1.jpg') }}" class="img-responsive" alt="a" /> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                        </a> <a class="quick-view" href="#">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> <a class="add_to_compare" href="compare.html">
                        <div><i class="icon-random"></i><span>Add to compare</span></div>
                        </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html" >
                        <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                        </a> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">Rp422.000</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/product3.jpg') }}"> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                        </a> <a class="quick-view" href="#">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> <a class="add_to_compare" href="compare.html">
                        <div><i class="icon-random"></i><span>Add to compare</span></div>
                        </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html" >
                        <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                        </a> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">Rp50.000</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/product4.jpg') }}"> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                        </a> <a class="quick-view" href="#">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> <a class="add_to_compare" href="compare.html">
                        <div><i class="icon-random"></i><span>Add to compare</span></div>
                        </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html" >
                        <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                        </a> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
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
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/product1.jpg') }}"> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                        </a> <a class="quick-view" href="#">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> <a class="add_to_compare" href="compare.html">
                        <div><i class="icon-random"></i><span>Add to compare</span></div>
                        </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html" >
                        <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                        </a> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
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
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="new-label new-top-right">New</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/product2.jpg') }}"> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                        </a> <a class="quick-view" href="#">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> <a class="add_to_compare" href="compare.html">
                        <div><i class="icon-random"></i><span>Add to compare</span></div>
                        </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html" >
                        <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                        </a> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">Rp422.000</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/product3.jpg') }}"> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                        </a> <a class="quick-view" href="#">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> <a class="add_to_compare" href="compare.html">
                        <div><i class="icon-random"></i><span>Add to compare</span></div>
                        </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html" >
                        <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                        </a> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">Rp50.000</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/product2.jpg') }}"> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                        </a> <a class="quick-view" href="#">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> <a class="add_to_compare" href="compare.html">
                        <div><i class="icon-random"></i><span>Add to compare</span></div>
                        </a> <a class="addToWishlist wishlistProd_5" href="wishlist.html" >
                        <div><i class="icon-heart"></i><span>Add to Wishlist</span></div>
                        </a> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
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
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End main container --> 
  
  <!-- offer banner section -->
  

  
  <div class="offer-banner-section wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-xs-12 col-sm-4"><a href="#"><img alt="offer banner1" src="{{('frontend/images/banner-left-01.jpg') }}"></a>
          <div class="overlay"><a class="info" href="#">Learn More</a></div>
        </div>
        <div class="col-lg-4 col-xs-12 col-sm-4"><a href="#"><img alt="offer banner2" src="{{('frontend/images/banner-mid-01.jpg') }}"></a>
          <div class="overlay"><a class="info" href="#">Learn More</a></div>
        </div>
        <div class="col-lg-4 col-xs-12 col-sm-4"><a href="#"><img alt="offer banner3" src="{{('frontend/images/banner-right-01.jpg') }}"></a>
          <div class="overlay"><a class="info" href="#">Learn More</a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- end offer banner section --> 
  
  <!-- Featured Slider -->
  <section class="featured-pro container wow bounceInUp animated">
    <div class="slider-items-products">
      <div class="new_title center">
        <h2>All Products</h2>
      </div>
      <div id="featured-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4"> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{ asset('frontend/products-images/telurbebek.jpg') }}" class="img-responsive" alt="a" /> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box">
                      <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                      <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
                    </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="new-label new-top-right">New</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{ asset('frontend/products-images/telorpuyuh.jpg') }}" class="img-responsive" alt="a" /> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box"> <span class="regular-price"> <span class="price">Rp422.000</span> </span> </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/telurayam.jpg') }}"> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box"> <span class="regular-price"> <span class="price">Rp50.000</span> </span> </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/telorpuyuh.jpg') }}"> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box">
                      <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                      <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
                    </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/telurayamkampung.jpg') }}"> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box">
                      <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                      <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
                    </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="new-label new-top-right">New</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/telurayamkampung.jpg') }}"> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box"> <span class="regular-price"> <span class="price">Rp422.000</span> </span> </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/product1.jpg') }}"> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box"> <span class="regular-price"> <span class="price">Rp50.000</span> </span> </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/product1.jpg') }}"> </a>
                <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box">
                      <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                      <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
                    </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
        </div>
      </div>
    </div>
  </section>
  <!-- End Featured Slider --> 
  <!-- promo banner section -->
  <div class="promo-banner-section container wow bounceInUp animated">
    <div class="row">
      <div class="col-lg-12"> <img alt="promo-banner3" src="{{ asset('frontend/images/banner-01.jpg') }}"></div>
    </div>
  </div>
  <!-- End promo banner section --> 
  <!-- middle slider -->
  <section class="middle-slider container wow bounceInUp animated">
    <div class="row">
      <div class="col-md-6">
        <div class="bag-product-slider small-pr-slider cat-section">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Telur Ayam Negeri</h2>
            </div>
            <div id="bag-seller-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col3"> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{ asset('frontend/products-images/product3.jpg') }}" class="img-responsive" alt="a" /> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{ asset('frontend/products-images/product3.jpg') }}" class="img-responsive" alt="a" /> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">Rp422.000</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/product3.jpg') }}"> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">Rp50.000</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/product3.jpg') }}"> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/product3.jpg') }}"> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/product3.jpg') }}"> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">Rp422.000</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="shoes-product-slider small-pr-slider cat-section">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Telur Ayam Kampung</h2>
            </div>
            <div id="shoes-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col3"> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{ asset ('frontend/products-images/product2.jpg') }}" class="img-responsive" alt="a" /> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{ asset('frontend/products-images/product2.jpg') }}" class="img-responsive" alt="a" /> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">Rp422.000</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset ('frontend/products-images/product2.jpg') }}"> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">Rp50.000</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/product2.jpg') }}"> </a> 
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/product.jpg') }}"> </a> 
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="middle-slider container wow bounceInUp animated">
    <div class="row">
      <div class="col-md-6">
        <div class="bag-product-slider small-pr-slider cat-section">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Telur Bebek</h2>
            </div>
            <div id="bag-seller-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col3"> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{ asset('frontend/products-images/telurbebek.jpg') }}" class="img-responsive" alt="a" /> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{ asset('frontend/products-images/telurbebek.jpg') }}" class="img-responsive" alt="a" /> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">Rp422.000</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/telurbebek.jpg') }}"> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">Rp50.000</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/telurbebek.jpg') }}"> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/telurbebek.jpg') }}"> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/telurbebek.jpg') }}"> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">Rp422.000</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="shoes-product-slider small-pr-slider cat-section">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Telur Puyuh</h2>
            </div>
            <div id="shoes-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col3"> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{ asset('frontend/products-images/telorpuyuh.jpg') }}" class="img-responsive" alt="a" /> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{ asset('frontend/products-images/telorpuyuh.jpg') }}" class="img-responsive" alt="a" /> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">Rp422.000</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/telorpuyuh.jpg') }}"> </a>
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box"> <span class="regular-price"> <span class="price">Rp50.000</span> </span> </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="{{ asset('frontend/products-images/telorpuyuh.jpg') }}"> </a> 
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src=" {{ asset('frontend/products-images/telorpuyuh.jpg') }}> </a> 
                      <div class="actions-links"><span class="add-to-links"> <a title="magik-btn-quickview" class="magik-btn-quickview" href="#"><span>quickview</span></a> <a title="Add to Wishlist" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="link-compare" href="compare.html"><span>Add to Compare</span></a></span> </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> Sample Product </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price"> Rp45.000 </span> </p>
                            <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rp50.000 </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <button class="button btn-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End middle slider --> 
  @endsection