@extends('layouts.master')

@section('content')

<!-- main-container -->
<section class="main-container col1-layout">
<div class="main container">
  <div class="account-login">
    <div class="page-title">
      <h2>DETAIL TRANSAKSI</h2>
    </div>

    <div class="container">
      <fieldset class="col-md-6">
        <div class="cart-collaterals row">
          <div class="col-1">
            <div class="totals">
              <h3>Status Transaksi</h3>
              <div class="inner">
                <div class="col-md-12">
                  <ul>
                    <li class="list-group text-right">
                      <span class="pull-left price"><strong>{{ $shippings->statuss }}</strong></span><br>
                    </li>
                  </ul>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </fieldset>
    </div>

    <div class="container">
      <fieldset class="col-md-6">
        <div class="cart-collaterals row">
          <div class="col-1">
            <div class="totals">
              <h3>Total Belanja Anda</h3>
              <div class="inner">
                <div class="col-md-12">
                  <ul>
                    @foreach($shippings->items as $shipping)
                    <li class="list-group text-right">
                      <span class="pull-left"><strong>{{ $shipping['name'] }}</strong></span>Rp {{ $shipping['price'] }}
                    </li>
                    @endforeach
                    <li class="list-group text-right">
                      <span class="pull-left"><strong>Grand Total</strong></span><strong class="price">Rp {{ $shippings->totall }}</strong>
                    </li>
                  </ul>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </fieldset>
    </div>

    <div class="container">
      <fieldset class="col-md-6"> 
        <div class="cart-collaterals row">
          <div class="col-1">
            <div class="totals">
              <h3>Alamat Pengiriman</h3>
              <div class="inner">
                <div class="col-md-12">
                  <ul>
                    <li class="list-group text-right">
                      <span class="pull-left"><strong>Nama</strong></span>{{ $shippings->namee }}
                    </li>
                    <li class="list-group text-right">
                      <span class="pull-left"><strong>No Handphone</strong></span>{{ $shippings->no_hpp }}
                    </li>
                    <li class="list-group text-right">
                      <span class="pull-left"><strong>Kota</strong></span>{{ $shippings->kotaa }}
                    </li>
                    <li class="list-group text-right">
                      <span class="pull-left"><strong>Kecamatan</strong></span>{{ $shippings->kecamatan }}
                    </li>
                    <li class="list-group text-right">
                      <span class="pull-left"><strong>Kode Pos</strong></span>{{ $shippings->kode_pos }}
                    </li>
                    <li class="list-group text-right">
                      <span class="pull-left"><strong>Alamat Lengkap</strong></span>{{ $shippings->alamatt }}
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </fieldset>
    </div>

    @if (optional($shippings->order())->count() != 0)
    <div class="container">
      <fieldset class="col-md-6"> 
        <div class="cart-collaterals row">
          <div class="col-1">
            <div class="totals">
              <h3>Bukti Pembayaran</h3>
               <div class="inner">
                <div class="col-md-12">
                  <ul>
                    <li class="list-group text-right">
                      <span class="pull-left"><strong>Nama Rekening</strong></span>{{ $shippings->order->nama_rek }}
                    </li>
                    <li class="list-group text-right">
                      <span class="pull-left"><strong>No Handphone</strong></span>{{ $shippings->order->tgl_pay }}
                    </li>
                    <li class="list-group text-right">
                      <span class="pull-left"><strong>Kota</strong></span>{{ $shippings->order->bank }}
                    </li>
                    <li class="list-group text-right">
                      <img src="{{ asset('bukti-pembayaran/'.$shippings->order->bukti) }}" height="300" width="360" class="img-responsive">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </fieldset>
    </div>
    @else
    <div class="container">
      <fieldset class="col-md-6"> 
        <div class="cart-collaterals row">
          <div class="col-1">
            <div class="totals">
              <a href="{{ route('order.confirm', $shippings->id) }}" title="Konfirmasi Pembayaran" class="button btn-proceed-checkout">
                <span>KONFIRMASI PEMBAYARAN</span>
              </a>
            </div>
          </div>
        </div>
      </fieldset>
    </div><br>
    @endif
  </div>
</div>
</section>
<!--End main-container --> 
@endsection