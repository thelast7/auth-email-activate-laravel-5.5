@extends('layouts.master')

@section('content')

  <!-- breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <ul>
          <li class="home"> <a href="index.html" title="Go to Home Page">Home</a><span>&mdash;›</span></li>
          <li class=""> <a href="grid.html" title="Go to Home Page">Produk</a><span>&mdash;›</span></li>
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
        <section class="col-main col-sm-9 col-sm-push-3 wow bounceInUp animated">
          <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1"> 
                  
                  <!-- Item -->
                  <div class="item"> <a href="#x"><img alt="" src="{{ asset('frontend/images/category-banner1.jpg')}}"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <h2 class="cat-heading">Category Banner</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
              <div class="sorter">
                <div class="view-mode"> <span title="Grid" class="button button-active button-grid">Grid</span><a href="list.html" title="List" class="button button-list">List</a> </div>
              </div>
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
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="products-images/product1.jpg" class="img-responsive" alt="a" /> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
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
                          <p class="special-price"> <span class="price"> $45.00 </span> </p>
                          <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                        </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="new-label new-top-right">New</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="products-images/product1.jpg" class="img-responsive" alt="a" /> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
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
                        <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="products-images/product1.jpg"> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
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
                        <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="products-images/product1.jpg"> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
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
                          <p class="special-price"> <span class="price"> $45.00 </span> </p>
                          <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                        </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="products-images/product1.jpg"> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
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
                          <p class="special-price"> <span class="price"> $45.00 </span> </p>
                          <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                        </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="new-label new-top-right">New</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="products-images/product1.jpg"> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
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
                        <div class="price-box"> <span class="regular-price"> <span class="price">$422.00</span> </span> </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="products-images/product1.jpg"> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
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
                        <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="products-images/product1.jpg"> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
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
                          <p class="special-price"> <span class="price"> $45.00 </span> </p>
                          <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                        </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="products-images/product1.jpg" class="img-responsive" alt="a" /> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="#" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> <a class="quick-view" href="quick_view.html">
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
                          <p class="special-price"> <span class="price"> $45.00 </span> </p>
                          <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                        </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">
          <div class="side-nav-categories">
            <div class="block-title"> Categories </div>
            <!--block-title--> 
            <!-- BEGIN BOX-CATEGORY -->
            <div class="box-content box-category">
              <ul>
                <li class="active"> <a  href="grid.html">Telur</a> <span class="subDropdown minus"></span>
                  <ul class="level0_415">
                    <li> <a href="grid.html"> Telur Ayam Kampung</a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> Evening Tops </a> </li>
                        <li> <a href="grid.html"> Shirts &amp; Blouses </a> </li>
                        <li> <a href="grid.html"> Tunics </a> </li>
                        <li> <a href="grid.html"> Vests </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Telur Ayam Negeri </a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> Bags </a> </li>
                        <li> <a href="grid.html"> Designer Handbags </a> </li>
                        <li> <a href="grid.html"> Purses </a> </li>
                        <li> <a href="grid.html"> Shoulder Bags </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Telur Bebek </a> <span class="subDropdown plus"></span>
                      <ul class="level1">
                        <li> <a href="grid.html"> Flat Shoes </a> </li>
                        <li> <a href="grid.html"> Flat Sandals </a> </li>
                        <li> <a href="grid.html"> Boots </a> </li>
                        <li> <a href="grid.html"> Heels </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="grid.html"> Telur Puyuh </a>
                      <ul class="level1">
                        <li> <a href="grid.html"> Bracelets </a> </li>
                        <li> <a href="grid.html"> Necklaces &amp; Pendants </a> </li>
                        <li> <a href="grid.html"> Pins &amp; Brooches </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
              </ul>
            </div>
            <!--box-content box-category--> 
          </div>
          
              </div>
            </form>
          </div>
          
        </aside>
      </div>
    </div>
  </div>
  <!-- End Two columns content -->
@endsection