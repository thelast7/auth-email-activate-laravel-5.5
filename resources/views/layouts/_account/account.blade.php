@extends('layouts.master')

@section('content')

<div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-9">
          <div class="my-account">
            <div class="page-title">
              <h2>My Dashboard</h2>
            </div>
            <div class="dashboard">
              <div class="welcome-msg"> <strong>Hello, {{ Auth::user()->name }}!</strong>
                <p>Terima Kasih telah memesan dan membeli produk - produk dari kami, Berikut adalah history order kamu :</p>
              </div>
              @foreach($shippings as $shipping)
              <div class="recent-orders">
                <div class="title-buttons">
                <div class="table-responsive">
                  <table class="data-table" id="my-orders-table">
                    <thead>
                      <strong></strong>
                      <tr class="first last">
                        <th>Nomor Order</th>
                        <th>Tanggal Order</th>
                        <th>Penerima</th>
                        <th><span class="nobr">Total Order</span></th>
                        <th>Konfirmasi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="first odd">
                        <td>{{ $shipping->id }}</td>
                        <td>{{ $shipping->updated_at }}</td>
                        <td>{{ $shipping->namee }}</td>
                        <td><span class="price">Rp {{ $shipping->totall }}</span></td>
                        <th>
                          <a href="{{ route('checkout.edit') }}" class="btn btn-sm btn-info">Konfirmasi</a>
                        </th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </section>
      </div>
    </div>
  </div>

@endsection