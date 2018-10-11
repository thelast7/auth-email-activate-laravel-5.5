@extends('layouts.master')

@section('content')

<div class="main-container col2-right-layout">
  <div class="main container">
    <div class="row">

      <section class="col-main col-sm-10">
        <div class="my-account">
          <div class="page-title">
            <h2>Halo, {{ Auth::user()->name }}!</h2>
          </div><br>
          <div class="container">
            <div class="row">
              <div class="col-sm-2">
                <img src="frontend/images/profil1.jpg" class="img-rounded img-responsive" alt="profil" width="400" height="200">
              </div>

              <div class="col-sm-10">
                <ul class="list-group">
                  <li class="list-group-item text-right">
                    <span class="pull-left"><strong>Nama</strong></span>{{ Auth::user()->name }}
                  </li>
                  <li class="list-group-item text-right">
                    <span class="pull-left"><strong>Alamat e-mail</strong></span>{{ Auth::user()->email }}
                  </li>
                  <li class="list-group-item text-right">
                    <span class="pull-left"><strong>No Handphone</strong></span>{{ Auth::user()->no_hp }}
                  </li>
                  <li class="list-group-item text-right">
                    <span class="pull-left"><strong>Tanggal Lahir</strong></span>{{ Auth::user()->tanggal_lahir }}
                  </li>
                  <li class="list-group-item text-right">
                    <span class="pull-left"><strong>Alamat Lengkap</strong></span>{{ Auth::user()->alamat }}
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </section>

      <section>
        <div class="dashboard col-sm-12">
          <div class="welcome-msg">
            <h4>Terima Kasih telah memesan dan membeli produk - produk dari kami, Berikut adalah history order kamu :</h4>
          </div>
          <div class="recent-orders">
            <div class="title-buttons">
              <div class="table-responsive">
                <table class="data-table" id="my-orders-table">
                  <thead>
                    <strong></strong>
                    <tr class="first last">
                      <th class="container text-center">Nomor Order</th>
                      <th class="container text-center">Tanggal Order</th>
                      <th class="container text-center">Penerima</th>
                      <th class="container text-center"><span class="nobr">Total Order</span></th>
                      <th class="container text-center">Pembayaran</th>
                      <th class="container text-center">Status Order</th>
                      <th class="container text-center">Action</th>
                    </tr>
                  </thead>
                  @foreach($shippings as $shipping)
                  @if(auth()->user()->id == $shipping->user_id)
                  <tbody>
                    <tr class="first odd">
                      <td class="container text-center">{{ $shipping->id }}</td>
                      <td class="container text-center">{{ $shipping->created_at }}</td>
                      <td class="container text-center">{{ $shipping->namee }}</td>
                      <td class="container text-center"><span class="price">Rp {{ $shipping->totall }}</span></td>

                      @if (optional($shipping->order())->count() != 0 && $shipping->order->status_bayar == true)
                      <td class="container text-center"><span class="label label-success">DIBAYAR</span></td>
                        @if($shipping->statuss === 'DIPROSES')
                        <td class="container text-center"><span class="label label-primary">{{ $shipping->statuss }}</span></td>
                        @else
                        <td class="container text-center"><span class="label label-success">{{ $shipping->statuss }}</span></td>
                        @endif
                      @else (optional($shipping->order())->count() != 0 && $shipping->order->status_bayar == false)
                      <td class="container text-center"><span class="label label-danger">MENUNGGU</span></td>
                      <td class="container text-center"><span class="label label-warning">{{ $shipping->statuss }}</span></td>
                      @endif

                      <td class="container text-center">
                        <a href="{{ route('account.show', $shipping->id) }}" class="btn btn-sm btn-info">View</a>
                      </td>
                    </tr>
                  </tbody>
                  @endif
                  @endforeach
                </table>
              </div>
            </div>
          </div>
          <div class="container text-center pages pager toolbar">
            {{ $shippings->links() }}
          </div>
        </div>
      </section>

    </div>
  </div>
</div><br>

@endsection