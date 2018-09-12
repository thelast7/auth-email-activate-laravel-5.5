@extends('layouts.master')

@section('content')

<section class="main-container col1-layout">
<div class="main container">
  <div class="account-login">
    <div class="page-title">
      <h2>KONFIRMASI PEMBAYARAN</h2>
    </div>

    <fieldset class="col2-set">
      
      <div class="col-1 new-users">

        <form class="form-horizontal" method="POST" action="#" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="content">
          <div class="buttons-set">
              <ul class="form-list">

                <li>
                  <label for="nama_rek">Atas Nama</label>
                    <input id="nama_rek" type="text" class="form-control" name="nama_rek" value="{{ old('nama_rek') }}" placeholder="Nama Pemilik Rekening">
                    @if ($errors->has('nama_rek'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nama_rek') }}</strong>
                        </span>
                    @endif
                </li>

                <li>
                  <label for"tgl_pay">Tanggal Pembayaran</label>
                    <input id="tgl_pay" type="date" class="form-control" name="tgl_pay" value="{{ old('tgl_pay') }}">
                    @if ($errors->has('tgl_pay'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tgl_pay') }}</strong>
                        </span>
                    @endif
                </li>

                <label><b>Bank Tujuan</b></label>
                <div class="select relative">
                    <i class="fa fa-angle-down"></i>
                    {!! Form::select('bank', ['BNI' => 'BNI', 'BCA' => 'BCA','MANDIRI' => 'MANDIRI','BRI' => 'BRI']) !!}
                </div>

                <li>
                  <label for="bukti">Upload Bukti Pembayaran</label>
                    <input id="bukti" type="file" name="bukti">
                    @if ($errors->has('bukti'))
                        <span class="help-block">
                            <strong>{{ $errors->first('bukti') }}</strong>
                        </span>
                    @endif
                </li>

              </ul>
              <br>
            <tr class="first last">
                <td class="a-right last" colspan="7">
                  <a href="{{route('account')}}" class="button btn-continue" title="Continue Confirmation" type="button">
                    <span>SUBMIT</span>
                  </a>
                </td>
              </tr>
          </div>
        </div>
        </form>
      </div>
    </fieldset>
  </div>
</div>
</section>

@endsection