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
        <form class="form-horizontal" method="POST" action="{{ route('save.confirm') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="content">
            <div class="buttons-set">

                <ul class="form-list">
                  <li>
                    <label for="nama_rek">Atas Nama</label>
                    {{ Form::text('nama_rek', null, ['placeholder' => 'Nama Pemilik Rekening', 'class' => 'form-control', 'value' => old('nama_rek') ]) }}
                      @if ($errors->has('nama_rek'))
                          <span class="help-block">
                              <strong>{{ $errors->first('nama_rek') }}</strong>
                          </span>
                      @endif
                  </li>
                  <li>
                    <label for="tgl_pay">Tanggal Pembayaran</label>
                    {{ Form::date('tgl_pay', \Carbon\Carbon::now(), ['class' => 'form-control', 'value' => old('tgl_pay') ]) }}
                      @if ($errors->has('tgl_pay'))
                          <span class="help-block">
                              <strong>{{ $errors->first('tgl_pay') }}</strong>
                          </span>
                      @endif
                  </li>
                  <li>
                    <label for="bank">Bank</label>
                    {{ Form::select('bank', ['BCA' => 'BCA', 'BRI' => 'BRI', 'BNI' => 'BNI', 'MANDIRI' => 'MANDIRI' ], null, ['placeholder' => 'Pilih Bank', 'class' => 'form-control'] )}}
                      @if ($errors->has('bank'))
                          <span class="help-block">
                              <strong>{{ $errors->first('bank') }}</strong>
                          </span>
                      @endif
                  </li>
                  <li>
                    <label for="bukti">Upload Bukti Pembayaran</label>
                    {{ Form::file('bukti', [ 'class' => 'form-control']) }}
                      @if ($errors->has('bukti'))
                          <span class="help-block">
                              <strong>{{ $errors->first('bukti') }}</strong>
                          </span>
                      @endif
                  </li>
                </ul><br>
                <tr class="first last">
                  <td class="a-right last" colspan="7">
                    <button type="submit" class="btn btn-md btn-info">
                      <span>SUBMIT</span>
                    </button>
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