@extends('layouts.master')

@section('content')

<div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
       <section>
          <div class="my-account">
            <div class="page-title">
              <h2>Halo, {{ Auth::user()->name }}!</h2>
            </div>
              <div class="col-sm-4">
                <img src="frontend/images/profil1.jpg" class="img-rounded" alt="profil" width="304" height="236">
            </div>
                
              
            <div class="col-sm-8">
              <ul class="list-group">
                <li class="list-group-item text-right"><span class="pull-left"><strong >Name</strong></span> {{ Auth::user()->name }}
                </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong >Alamat e-mail</strong></span>{{ Auth::user()->email }}
                </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong >No Handphone</strong></span>{{ Auth::user()->no_hp }}
                </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong >Tanggal Lahir</strong></span>{{ Auth::user()->tanggal_lahir }}
                </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong >Alamat Lengkap</strong></span>{{ Auth::user()->alamat }}
                </li>
              </ul>
            </div>
                
              
        </section>

        <section>
              <div class="dashboard col-sm-12">
              <div class="welcome-msg"> 
                <br>
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
          </div>
        </section>
      </div>
    </div>
  </div>

@endsection