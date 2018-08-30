@extends('layouts.master')

@section('content')
<section class="main-container col1-layout">
<div class="main container">
  <div class="account-login">
    <div class="page-title">
      <h2>Pembayaran Via Transfer BANK</h2>
    </div>                 
        <p>
          Hallo {{ Auth::user()->name }}! Terima Kasih telah melakukan pemesanan. Pembayaran dapat dilakukan ke salah satu rekening PT. Sembapur.com berikut ini :
        </p> 
            <div class="col-sm-6" style="background-color:#F0FFFF;">
             <li>
                <blockquote>   
                    <strong>BCA</strong>
                    <br> Cabang:
                    <strong>Kedoya Permai</strong>
                    <br> No. Rek:
                    <strong>372 177 3939</strong>
                    <br> Atas Nama:
                    <strong>SEMBAPUR</strong>
                    <br>
                    </blockquote>
            </li>
        </div>
        <div class="col-sm-6" style="background-color:#F0FFFF;">
            <li>
                <blockquote>
                    <strong>MANDIRI</strong>
                    <br> Cabang:
                    <strong>Permata Hijau</strong>
                    <br> No. Rek:
                    <strong>102 000 526 3873</strong>
                    <br> Atas Nama:
                    <strong>SEMBAPUR</strong>
                    <br>
                </blockquote>
            </li>
        </div>
        <div class="col-sm-6" style="background-color:#F0FFFF;">
            <li>
                <blockquote>
                    <strong>BNI</strong>
                    <br> Cabang:
                    <strong>Kebon Jeruk</strong>
                    <br> No. Rek:
                    <strong>800 600 6009</strong>
                    <br> Atas Nama:
                    <strong>SEMBAPUR</strong>
                    <br>
                </blockquote>
            </li>
        </div>
        <div class="col-sm-6" style="background-color:#F0FFFF;">
            <li>
                <blockquote>
                    <strong>BRI</strong>
                    <br> Cabang:
                    <strong>Kebon Jeruk</strong>
                    <br> No. Rek:
                    <strong>037 701 000 435 301</strong>
                    <br> Atas Nama:
                    <strong>SEMBAPUR</strong>
                    <br>
                </blockquote>
            </li>
        </div>

        <br>
        <p class="clear-b">
            Setelah melakukan transfer, kamu
            <strong>HARUS</strong> melakukan konfirmasi pembayaran melalui email kami di <a href="mailto:cs@sembapur.com">cs@sembapur.com</a> agar pembayaran kamu bisa segera diverifikasi
            dan pesanan langsung diteruskan ke penjual.
        </p>

        <p class="mt-10">
            <strong>Catatan : </strong>
            <br> - Untuk transfer ke rekening BCA, Mandiri, BNI dan BRI, proses verifikasi pembayaran maksimal
            1x24 jam.
        </p>
        <label>PETUNJUK PEMBAYARAN MELALUI TRANSFER </label>
        <br>
        <br>
      <div class="col-sm-6"> <img alt="promo-banner3" src="{{asset('frontend/images/pembayaran.jpg')}}"></div>
    </div>
    </div>
  </div>
</section>  
@endsection
