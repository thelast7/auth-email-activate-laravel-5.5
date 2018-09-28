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
              <div class="recent-orders">
                <div class="title-buttons">
                <div class="table-responsive">
                  <table class="data-table" id="my-orders-table">
                    <thead class="thead-dark">
                      <strong></strong>
                      <tr class="first last">
                        <th>Nomor Order</th>
                        <th>Tanggal Order</th>
                        <th>Penerima</th>
                        <th><span class="nobr">Total Order</span></th>
                        <th>Pembayaran</th>
                        <th>Status Order</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    @foreach($shippings as $shipping)
                    @if(auth()->user()->id == $shipping->user_id)
                    <tbody>
                      <tr class="first odd">
                        <td>{{ $shipping->id }}</td>
                        <td>{{ $shipping->created_at }}</td>
                        <td>{{ $shipping->namee }}</td>
                        <td><span class="price">Rp {{ $shipping->totall }}</span></td>
                        @if (optional($shipping->order())->count() != 0)
                        <td>Selesai</td>
                        <td>
                          <span>{{ $shipping->statuss }}</span>
                        </td>
                        @else
                        <td>
                          Menunggu
                          {{-- <a href="{{ route('account.show', $shipping->id) }}" class="btn btn-sm btn-info">Konfirmasi</a> --}}
                        </td>
                        <td>
                          <span>{{ $shipping->statuss }}</span>
                        </td>
                        @endif
                        <td>
                          <a href="{{ route('account.show', $shipping->id) }}" class="btn btn-sm btn-info">Detail</a>
                        </td>
                      </tr>
                    </tbody>
                    @endif
                    @endforeach
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

@endsection