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
        <form class="content" method="POST" action="{{ route('checkout.store') }}">
          {{ csrf_field() }}
          <ul class="form-list">
            <li>
              <label for="namee">Nama Lengkap</label>
                <input id="namee" type="text" class="form-control" name="namee" value="{{ old('namee') }}" placeholder="Nama Lengkap">
                @if ($errors->has('namee'))
                    <span class="help-block">
                        <strong>{{ $errors->first('namee') }}</strong>
                    </span>
                @endif
            </li>
            <li>
              <label for="no_hpp">Nomor HP </label>
                <input id="no_hpp" type="number" class="form-control" name="no_hpp" value="{{ old('no_hpp') }}" placeholder="Nomor HP yang Aktif">
                @if ($errors->has('no_hpp'))
                    <span class="help-block">
                        <strong>{{ $errors->first('no_hpp') }}</strong>
                    </span>
                @endif
            </li>
            <li>
                <label for="kotaa">Kota </label>
                  <input id="kotaa" type="text" class="form-control" name="kotaa" value="{{ old('kotaa') }}" placeholder="Kota Anda">
                  @if ($errors->has('kotaa'))
                      <span class="help-block">
                          <strong>{{ $errors->first('kotaa') }}</strong>
                      </span>
                  @endif
            </li>
            <li>
                <label for="alamatt">Alamat Lengkap <span class="required">*</span></label>
                  <textarea class="form-control" id="alamatt" name="alamatt" placeholder="Masukan Alamat Lengkap" rows="4" value="{{ old('alamatt') }}"></textarea>
                  @if ($errors->has('alamatt'))
                      <span class="help-block">
                        <strong>{{ $errors->first('alamatt') }}</strong>
                      </span>
                  @endif
            </li>
            <li>
                  <input id="totall" type="hidden" class="form-control" name="totall" value="{{ Cart::total() }}">
                  <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">
            </li>
          </ul>
          <br>
          <ul class="checkout">
            <li>
              <button type="submit" class="button btn-proceed-checkout">
                  <span>LANJUTKAN PEMBAYARAN</span>
              </button>
            </li>
            <br>
            <br>
          </ul>
        </form>
      </div>
    </fieldset>

    <fieldset class="col-md-6">
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