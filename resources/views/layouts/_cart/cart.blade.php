@extends('layouts.master')

@section('content')

  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="cart wow bounceInUp animated">
          <div class="page-title">
            <h2>Keranjang Belanja</h2>
          </div>
          <div class="table-responsive">
            <form method="post" action="#updatePost/">
              <input type="hidden" value="Vwww7itR3zQFe86m" name="form_key">
              <fieldset>
                <table class="data-table cart-table" id="shopping-cart-table">
                  <thead>
                    <tr class="first last">
                      <th rowspan="1">List Belanja</th>
                      <th rowspan="1"><span class="nobr">Nama Product</span></th>
                      <th rowspan="1"></th>
                      <th colspan="1" class="a-center"><span class="nobr">Harga Product</span></th>
                      <th class="a-center" rowspan="1">Qty</th>
                      <th colspan="1" class="a-center">Subtotal</th>
                      <th class="a-center" rowspan="1">&nbsp;</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="first last">
                      <td class="a-right last" colspan="7"><button onclick="setLocation('#')" class="button btn-continue" title="Continue Shopping" type="button"><span><span>Lanjut Berbelanja</span></span></button>
                        <button class="button btn-update" title="Update Keranjang" value="update_qty" name="update_cart_action" type="submit"><span><span>Update Keranjang</span></span>
                        </button>
                        <button id="empty_cart_button" class="button btn-empty" title="Kosongkan Keranjang" value="empty_cart" name="update_cart_action" type="submit"><span><span>Kosongkan Keranjang</span></span>
                        </button>
                      </td>
                    </tr>
                  </tfoot>
                  <tbody>
                    @if(Cart::count()!="0")
                    @foreach($data as $product)
                    <tr class="first odd">
                      <td class="image"><a class="product-image" title="{{ $product->name }}" href="#"><img width="75" alt="{{ $product->name }}" src="{{ $product->cover }}"></a></td>
                      <td><h2 class="product-name"> <a href="#">{{ $product->name }}</a> </h2></td>
                      <td class="a-center"><a href="#configure/id/15945/"></a></td>
                      <td class="a-right"><span class="cart-price"> <span class="price">Rp {{ $product->price }}</span> </span></td>
                      <td class="a-center">
                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i>
                          {{-- href="{{ url('/cart/remove') }}/{{ $product->rowId }}" --}}
                        </button>
                        <input type="text" class="input-text qty" title="Qty" value="{{ $product->qty }}" maxlength="12" id="qty" name="qty">
                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i>
                        </button>
                      </td>
                      <td class="a-right movewishlist"><span class="cart-price"> <span class="price">Rp {{ $product->price * $product->qty }}</span> </span></td>
                      <td class="a-center last"><a class="button remove-item" title="Hapus Product" href="#"><span><span>Hapus Product</span></span></a></td>
                    </tr>
                    @endforeach
                    @else
                    <div class="container"><h3>Keranjang Kosong</h3></div>
                    @endif
                  </tbody>
                </table>
              </fieldset>
            </form>
          </div>
        </div>
        <!-- BEGIN CART COLLATERALS -->
        <div class="cart-collaterals row  wow bounceInUp animated">
          <div class="col-md-12">
            <div class="totals">
              <h3>Total Belanja Anda</h3>
              <div class="inner">
                <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                  <colgroup>
                  <col>
                  <col width="1">
                  </colgroup>
                  <tbody>
                    <tr>
                      <td class="a-left" colspan="1"> Subtotal </td>
                      <td class="a-right"><span class="price">Rp {{ Cart::subtotal() }}</span></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td class="a-left" colspan="1"><strong>Grand Total</strong></td>
                      <td class="a-right"><strong><span class="price">Rp {{ Cart::total() }}</span></strong></td>
                    </tr>
                  </tfoot>
                </table>
                <ul class="checkout">
                  <li>
                    <button type="button" title="Bayar Belanjaan" class="button btn-proceed-checkout" onclick="#"><span>Bayar Belanjaan</span></button>
                  </li>
                  <br>
                </ul>
              </div>
              <!--inner--> 
            </div>
            <!--totals--> 
          </div>
          <!--cart-collaterals--> 
          
        </div>
      </div>
    </div>
  </section>

@endsection