@extends('layouts.master')

@section('content')

<!-- main-container -->
<section class="main-container col1-layout">
<div class="main container">
  <div class="account-login">
    <div class="page-title">
      <h2>DETAIL TRANSAKSI</h2>
    </div>

{{--     <fieldset class="col-md-12">
      <legend>DETAIL PEMBELI</legend>
      <div class="cart-collaterals row">
        <div class="col-1">
          <div class="totals">
            <h3>Total Belanja Anda</h3>
            <div class="inner">
              <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                <colgroup>
                <col>
                <col width="1">
                </colgroup>
                @foreach($data as $product)
                <tbody>
                  <tr>
                    <td class="a-left" colspan="1">{{ $product->name }}</td>
                    <td class="a-right"><span class="price"></span>Rp {{ $product->price }}</td>
                  </tr>
                </tbody>
                @endforeach
                <tfoot>
                  <tr>
                    <td class="a-left" colspan="1"><strong>Grand Total</strong></td>
                    <td class="a-right"><strong><span class="price">Rp #</span></strong></td>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!--inner--> 
          </div>
          <!--totals--> 
        </div>
        <!--cart-collaterals--> 
        
      </div>
    </fieldset> --}}

    <fieldset class="col-md-5 pull-left">
      <legend>DETAIL TRANSAKSI</legend>
      <div class="cart-collaterals row">
        <div class="col-1">
          <div class="totals">
            <h3>Total Belanja Anda</h3>
            <div class="inner">
              <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                <colgroup>
                <col>
                <col width="1">
                </colgroup>
                @foreach($shippings->items as $prod)
                  {{-- @foreach($product->items as $prod) --}}
                <tbody>
                  <tr>
                    <td class="a-left" colspan="1">{{ $prod['name'] }}</td>
                    <td class="a-right"><span class="price"></span>Rp </td>
                  </tr>
                </tbody>
                  {{-- @endforeach --}}
                @endforeach
                <tfoot>
                  <tr>
                    <td class="a-left" colspan="1"><strong>Grand Total</strong></td>
                    <td class="a-right"><strong><span class="price">Rp {{ $shippings->totall }}</span></strong></td>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!--inner--> 
          </div>
          <!--totals--> 
        </div>
        <!--cart-collaterals--> 
        
      </div>
    </fieldset>

    <fieldset class="col-md-5 pull-right">
      <legend>DETAIL PEMBELI</legend>
      <div class="cart-collaterals row">
        <div class="col-1">
          <div class="totals">
            <h3>Status Transaksi</h3>
            <div class="inner">
              <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                <colgroup>
                <col>
                <col width="1">
                </colgroup>
                {{-- @foreach($data as $product) --}}
                <tbody>
                  <tr>
                    <td class="a-left" colspan="1">{{-- {{ $product->name }} --}}</td>
                    <td class="a-right"><span class="price"></span> {{-- {{ $product->price }} --}}</td>
                  </tr>
                </tbody>
                {{-- @endforeach --}}
{{--                 <tfoot>
                  <tr>
                    <td class="a-left" colspan="1"><strong>Grand Total</strong></td>
                    <td class="a-right"><strong><span class="price">Rp #</span></strong></td>
                  </tr>
                </tfoot> --}}
              </table>
            </div>
            <!--inner--> 
          </div>
          <!--totals--> 
        </div>
        <!--cart-collaterals--> 
        
      </div>
    </fieldset>

  </div>
</div>
</section>
<!--End main-container --> 

@endsection