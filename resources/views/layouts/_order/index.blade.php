@extends('layouts.master')

@section('content')

  <!-- main-container -->
 <section class="main-container col1-layout">
<div class="main container">
  <div class="account-login">
    <div class="page-title">
      <h2>DETAIL PEMBELI</h2>
    </div>
    
    <fieldset class="col-md-6">
      <legend>DETAIL PEMBELI</legend>
      <div class="col-1 new-users">
        <form class="content" method="POST" action="#">
              <ul class="form-list">
                <li>
                  <label for="name">Nama Lengkap</label>
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </li>
                <li>
                  <label for="email">Email </label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Anda">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </li>
                <li>
                  <label for="no_hp">Nomor HP </label>
                    <input id="no_hp" type="number" class="form-control" name="no_hp" value="{{ old('no_hp') }}" placeholder="Nomor HP yang Aktif">
                    @if ($errors->has('no_hp'))
                        <span class="help-block">
                            <strong>{{ $errors->first('no_hp') }}</strong>
                        </span>
                    @endif
                </li>
              <li>
                  <label for="kota">Kota </label>
                    <input id="kota" type="text" class="form-control" name="kota" value="{{ old('kota') }}" placeholder="Kota Anda">
                    @if ($errors->has('kota'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kota') }}</strong>
                        </span>
                    @endif
              </li>
              <li>
                  <label for="alamat">Alamat Lengkap <span class="required">*</span></label>
                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap" rows="4" value="{{ old('alamat') }}"></textarea>
                    @if ($errors->has('alamat'))
                        <span class="help-block">
                          <strong>{{ $errors->first('alamat') }}</strong>
                        </span>
                    @endif
                </li>
                </ul>
              <br>
        </form>
      </div>
    </fieldset>

    <fieldset class="col-md-6">
      <legend>DETAIL PEMBELI</legend>
      <div class="cart-collaterals row wow bounceInUp animated">
        <div class="col-1">
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
                  <a href="{{route('howtopay')}}" type="button" title="Bayar Belanjaan" class="button btn-proceed-checkout" ><span>Lanjutkan Pembayaran</span></button></a>
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
    </fieldset>
  </div>
</div>
</section>
  <!--End main-container --> 

@endsection