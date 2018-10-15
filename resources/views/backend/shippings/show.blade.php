@extends('backend.app')

@section('content')
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="#">Shipping</a>
        </li>
        <li class="breadcrumb-item active">Detail</li>
    </ol>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <table class="table table-striped">
                      <tr class="text-center">
                          <th>
                            <h5>PEMBAYARAN : 
                            @if ($shippings->order->status_bayar === false)
                            <span class="btn-danger">MENUNGGU</span>
                            @else
                            <span class="btn-primary">DIBAYAR</span>
                            @endif
                            </h5>
                          </th>
                          <th>
                            <h5>STATUS : 
                            @if ($shippings->statuss === 'DIPROSES')
                            <span class="btn-danger">{{ $shippings->statuss }}</span>
                            @else
                            <span class="btn-primary">{{ $shippings->statuss }}</span>
                            @endif
                            </h5>
                          </th>
                          <th>
                            <form action="{{ route('backend.shippings.update', $shippings->id) }}" method="POST">
                              {{ csrf_field() }}
                              {{method_field('PUT')}}
                              <select type="text" name="statuss">
                                <option value="{{ $shippings->statuss }}">{{ $shippings->statuss }}</option>
                                  <option value="DIPROSES">DIPROSES</option>
                                  <option value="DIKIRIM">DIKIRIM</option>
                                  <option value="SELESAI">SELESAI</option>
                                  <option value="PENDING">PENDING</option>
                              </select>
                              {{-- <input type="hidden" name="rowId" value="#"> --}}
                              <input type="submit" class="btn btn-info">
                            </form>
                          </th>
                      </tr>
                    </table>
                </div>

                <div class="card-header text-white bg-primary">
                    Shipping Detail : {{ $shippings->id }}
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                      @foreach($shippings->items as $shipping)
                      <tr>
                          <th>{{ $shipping['name'] }}</th>
                          <td>Rp {{ $shipping['price'] }}</td>
                      </tr>
                      @endforeach
                      <tr>
                          <th>Grand Total</th>
                          <td>Rp {{ $shippings->totall }}</td>
                      </tr>
                    </table>
                </div>

                <div class="card-header text-white bg-primary">
                    Shipping Detail : {{ $shippings->id }}
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                      <tr>
                          <th>Tanggal Order</th>
                          <td>{{ $shippings->created_at }}</td>
                      </tr>
                      <tr>
                          <th>Penerima</th>
                          <td>{{ $shippings->namee }}</td>
                      </tr>
                      <tr>
                          <th>No Handphone</th>
                          <td>{{ $shippings->no_hpp }}</td>
                      </tr>
                      <tr>
                          <th>Kota</th>
                          <td>{{ $shippings->kotaa }}</td>
                      </tr>
                      <tr>
                          <th>Kecamatan</th>
                          <td>{{ $shippings->kecamatan }}</td>
                      </tr>
                      <tr>
                          <th>Kode Pos</th>
                          <td>{{ $shippings->kode_pos }}</td>
                      </tr>
                      <tr>
                          <th>Alamat Lengkap</th>
                          <td>{{ $shippings->alamatt }}</td>
                      </tr>
                    </table>
                </div>

                <div class="card-header text-white bg-primary">
                    Shipping Detail : {{ $shippings->id }}
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                      @if (optional($shippings->order())->count() != 0)
                      <tr>
                          <th>Nama Rekening</th>
                          <td>{{ $shippings->order->nama_rek }}</td>
                      </tr>
                      <tr>
                          <th>Tanggal Pembayaran</th>
                          <td>{{ $shippings->order->tgl_pay }}</td>
                      </tr>
                      <tr>
                          <th>Bank</th>
                          <td>{{ $shippings->order->bank }}</td>
                      </tr>
                      <tr>
                          <th>Bukti</th>
                          <td><img src="{{ asset('bukti-pembayaran/'.$shippings->order->bukti) }}" height="300" width="360" class="img-responsive"></td>
                      </tr>
                      @endif
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection