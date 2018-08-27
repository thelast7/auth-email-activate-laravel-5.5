@extends('layouts.master')

@section('content')
{{-- <script>
$(document).ready(function(){
  @foreach($data as $product)
  $("#upCart{{$product->id}}").on('change keyup', function(){
    var newQty = $("#upCart{{$product->id}}").val();
    var rowID = $("#rowID{{ $product->id }}").val();
    $.ajax({
      url='{{ url('/cart/update') }}',
      data:'rowID=' + rowID + '&newQty=' + newQty,
      type:'get',
      success:function(response){
        console.log(response);
        $("#CartMsg").html(response);
      }
    });
  });
  @endforeach
});
</script> --}}

<section class="main-container col1-layout">
  <div class="main container">
    <div class="col-main">
      <div class="cart wow bounceInUp animated">
        <div class="page-title">
          <h2>Keranjang Belanja</h2>
        </div>
        <div class="table-responsive">
              <table class="data-table cart-table" id="shopping-cart-table">
                <thead>
                  <tr class="first last">
                    <th rowspan="1">List Belanja</th>
                    <th rowspan="1"><span class="nobr">Nama Product</span></th>
                    <th colspan="1" class="a-center"><span class="nobr">Harga Product</span></th>
                    <th class="a-center" rowspan="1">Qty</th>
                    <th colspan="1" class="a-center">Subtotal</th>
                    <th class="a-center" rowspan="1">&nbsp;</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr class="first last">
                    <td class="a-right last" colspan="7"><button onclick="setLocation('#')" class="button btn-continue" title="Continue Shopping" type="button"><span><span>Lanjut Berbelanja</span></span></button>
                    </td>
                  </tr>
                </tfoot>
                <tbody>
                  @if(Cart::count()!="0")
                  @foreach($data as $product)
                  <tr class="first odd">
                    <td class="cart_product">
                        <a href=""><img src="{{URL::to($product->cover)}}" height="80px" width="80px" alt=""></a>
                    </td>
                    <td><h2 class="product-name"> <a href="#">{{ $product->name }}</a> </h2></td>
                    {{-- <td class="a-center"><a href="#configure/id/15945/"></a></td> --}}
                    <td class="a-right"><span class="cart-price"> <span class="price">Rp {{ $product->price }}</span> </span></td>
                    <td class="a-center">
                      <form action="{{ url('cart/update') }}" method="POST">
                        {{ csrf_field() }}
                        <select type="text" name="qty" class="quantity">
                          <option value="{{ $product->qty }}" class="disable selected">{{ $product->qty }}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="5">6</option>
                            <option value="5">7</option>
                            <option value="5">8</option>
                            <option value="5">9</option>
                            <option value="5">10</option>
                        </select>
                        <input  type="hidden" name="rowId" value="{{$product->rowId}}">
                        <input type="submit" class="btn btn-info">
                        {{-- <a href="{{ url('cart/update') }}/{{ $product->rowId }}" class="btn btn-info">tambah</a> --}}
                      </form>
                    </td>
                    <td class="a-right movewishlist"><span class="cart-price"> <span class="price">Rp {{ $product->subtotal }}</span> </span></td>
                    <td class="a-center last"><a class="button remove-item" title="Hapus Product" href="{{ url('cart/remove') }}/{{ $product->rowId }}"><span><span>Hapus Product</span></span></a></td>
                  </tr>
                  @endforeach
                  @else
                  <div class="container"><h3>Keranjang Kosong</h3></div>
                  @endif
                </tbody>
              </table>
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