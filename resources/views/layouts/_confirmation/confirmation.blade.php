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

        <form class="form-horizontal" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="content">
          <div class="buttons-set">
              <ul class="form-list">

                <li>
                  <label for="name">Nama </label>
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nama Anda">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </li>

                <li>
                  <label for"tanggal_pembayaran">Tanggal Pembayaran</label>
                    <input id="tanggal_pembayaran" type="date" class="form-control" name="tanggal_pembayaran" value="{{ old('tanggal_pembayaran') }}">
                    @if ($errors->has('tanggal_pembayaran'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tanggal_pembayaran') }}</strong>
                        </span>
                    @endif
                </li>

                <label><b>Bank Tujuan</b></label>
                <div class="select relative">
                    <i class="fa fa-angle-down"></i>
                    {!! Form::select('kota', ['BNI' => 'BNI', 'BCA' => 'BCA','MANDIRI' => 'MANDIRI','BRI' => 'BRI']) !!}
                </div>

                <li>
                  <label for="avatar">Upload Bukti Pembayaran (Max:3MB)</label>
                    <input id="avatar" type="file" name="avatar">
                    @if ($errors->has('avatar'))
                        <span class="help-block">
                            <strong>{{ $errors->first('avatar') }}</strong>
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