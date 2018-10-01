@extends('layouts.master')

@section('content')

<!-- main-container -->
<section class="main-container col1-layout">
<div class="main container">
  <div class="account-login">
    <div class="page-title">
      <h2>DETAIL TRANSAKSI</h2>
    </div>

 <div class="col-md-5">
      <div class="cart-collaterals row">       
          <h3>PRODUK</h3>   
            <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
              <colgroup>
                <col>
                <col width="1">
              </colgroup>
                {{-- @foreach($data as $product) --}}
                <tbody>
                  <tr>
                    <td class="a-left" colspan="1">Item 1{{-- {{ $product->name }} --}}</td>
                    <td class="a-right"></span>2 {{-- {{ $product->price }} --}}</td>
                  </tr>
                </tbody>
                {{-- @endforeach --}}
                <tfoot>
                  <tr>
                    <td class="a-left" colspan="1">Item 2</strong></td>
                    <td class="a-right"><span>2</span></td>
                  </tr>
                </tfoot>
            </table>
      </div>
    </div>

    <fieldset class="col-md-5 pull-right">
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
                {{-- @foreach($data as $product) --}}
                <tbody>
                  <tr>
                    <td class="a-left" colspan="1">{{-- {{ $product->name }} --}}</td>
                    <td class="a-right">Rp.20000 {{-- {{ $product->price }} --}}</td>
                  </tr>
                  <tr>
                   <td class="a-left" colspan="1">{{-- {{ $product->name }} --}}</td>
                    <td class="a-right">Rp.20000 {{-- {{ $product->price }} --}}</td>
                     </tr>
                </tbody>
                {{-- @endforeach --}}
                <tfoot>
                  <tr>
                    <td class="a-left" colspan="1"><strong>Grand Total</strong></td>
                    <td class="a-right"><strong><span class="price">Rp 40000</span></strong></td>
                  </tr>
                  <tr>
                    <td class="a-left" colspan="1"><strong>Status Pembelian</strong></td>
                    <td class="a-right"><strong>Selesai</span></strong></td>
                  </tr>
                  <tr>
                    <td class="a-right"><a href="#" class="btn btn-sm btn-info">Beli Lagi</a></td>
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


    <fieldset class="col-md-5"> 
      <div class="cart-collaterals row">
        <div class="col-1">
          <div class="totals">
            <h3>Alamat Pengiriman</h3>
             <div class="inner">
              <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                <colgroup>
                <col>
                <col width="1">
                </colgroup>
               
                <tbody>
                  <tr>
                    <td>Nama</td>
                  </tr>
                  <tr>
                    <td class="a-left" colspan="1">No Hp</strong></td>
                  </tr>
                  <tr>
                    <td class="a-left" colspan="1">Kota</strong></td>
                  </tr>
                  <tr>
                    <td class="a-left" colspan="1">Kecamatan</strong></td>
                  </tr>
                  <tr>
                    <td class="a-left" colspan="1">Kode Pos</strong></td>
                  </tr>
                  <tr>
                    <td class="a-left" colspan="1">Alamat Lengkap</strong></td>
                  </tr>
                </tbody>
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