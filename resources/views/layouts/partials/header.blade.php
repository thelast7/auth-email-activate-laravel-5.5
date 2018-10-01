      <header class="header-container">
    <div class="header-top">
      <div class="container">
        <div class="row"> 
          <!-- Header Language -->
          <div class="col-xs-6">
            @guest
            <div class="welcome-msg hidden-xs">Hello Awesome People, Welcome to SEMBAPUR! </div>
            @else
            <div class="welcome-msg hidden-xs">Hello {{ Auth::user()->name }}, Welcome to SEMBAPUR! </div>
            @endguest
          </div>
          <div class="col-xs-6"> 
            
            <!-- Header Top Links -->
            <div class="toplinks">
              <div class="links">
                <div class="helpcall"><a title="Bantuan" href="{{ route('howtobuy') }}"><span class="hidden-xs">Need Help? Call 021-123-456</span></a></div>
                <div class="howtobuy"><a title="Cara Berbelanja" href="{{ route('howtobuy') }}"><span class="hidden-xs">How To Buy</span></a></div>
                <div class="howtopay"><a title="Cara Pembayaran" href="{{ route('howtopay') }}"><span class="hidden-xs">How To Pay</span></a></div>
                <div class="profile"><a title="Akun" href="{{ route('account') }}"><span  class="hidden-xs">Akun</span></a></div>
                @guest
                @else
                <div class="logout"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form></a></div>
                @endguest
              </div>
            </div>
            <!-- End Header Top Links --> 
          </div>
        </div>
      </div>
    </div>
    <div class="header container">
      <div class="row">
        <div class="col-lg-2 col-sm-3 col-md-2"> 
          <!-- Header Logo --> 
          <a class="logo" title="logo diskon" href="{{route('home')}}"><img alt="logo diskon" src="{{ asset('frontend/images/logo.png') }}"></a> 
          <!-- End Header Logo --> 
        </div>
        <div class="col-lg-8 col-sm-6 col-md-8"> 
          <!-- Search-col -->
          <!-- End Search-col --> 
        </div>
        <!-- Top Cart -->
        <div class="col-lg-2 col-sm-3 col-md-2">
          <div class="top-cart-contain">
            <div class="mini-cart">
              <div class="basket dropdown-toggle">
                <a href="{{ route('cart') }}"> <i class="glyphicon glyphicon-shopping-cart"></i>
                  <div class="cart-box"><span class="title">cart</span>
                    <span id="cart-total">({{ Cart::count() }})</span>
                  </div>
                </a>
              </div>
{{--               <div>
                <div class="top-cart-content arrow_box">
                  <div class="block-subtitle">Recently added item(s)</div>
                  <ul id="cart-sidebar" class="mini-products-list">
                    @if(Cart::count()!="0")
                    @foreach($data as $product)
                    <li class="item even"> <a class="product-image" href="#" title="Downloadable Product "><img alt="Downloadable Product " src="{{ asset('frontend/products-images/product1.jpg') }}" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                          <p class="product-name"> <a href="#" title="Downloadable Product">Sample Product </a> </p>
                        </div>
                        <div class="product-details-bottom"> <span class="price">Rp </span> <span class="title-desc">Qty:</span> <strong>1</strong> </div>
                      </div>
                    </li>
                    @endforeach
                    @else
                    <div class="container"><h3>Keranjang Kosong</h3></div>
                    @endif
                  </ul>
                  <div class="top-subtotal">Subtotal: <span class="price">Rp </span></div>
                  <div class="actions">
                    <button class="btn-checkout" type="button"><a href="#"><span>Checkout</span></button></a>
                    <button class="view-cart" type="button"><a href="#"><span>View Cart</span></button></a>
                  </div>
                </div>
              </div> --}}
            </div>
{{--             <div id="ajaxconfig_info"> <a href="#"></a>
              <input value="" type="hidden">
              <input id="enable_module" value="1" type="hidden">
              <input class="effect_to_cart" value="1" type="hidden">
              <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
            </div> --}}
          </div>
        </div>
        <!-- End Top Cart --> 
      </div>
    </div>
  </header>