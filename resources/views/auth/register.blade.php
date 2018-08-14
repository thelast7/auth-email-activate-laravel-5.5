@extends('layouts.master')

@section('content')

<section class="main-container col1-layout">
<div class="main container">
  <div class="account-login">
    <div class="page-title">
      <h2>Login or Create an Account</h2>
    </div>

    <fieldset class="col2-set">
      <legend>Login or Create an Account</legend>
      <div class="col-1 new-users"><strong>Daftar Akun Baru</strong>

        <form class="form-horizontal" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="content">
          <div class="buttons-set">
              <ul class="form-list">

                <li>
                  <label for="username">Username </label>
                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username Anda" required autofocus>
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </li>

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
                  <label for="email">Email </label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Anda">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </li>

                <li>
                  <label for="password">Password </label>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password Anda" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </li>

                <li>
                  <label for="password-confirm">Konfirmasi Pasword </label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Ulangi Password Anda" required>
                    @if ($errors->has('password-confirm'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password-confirm') }}</strong>
                        </span>
                    @endif
                </li>

                <li class="radio-buttons">
                    <label for="gender">Jenis Kelamin </label>
                    @if ($errors->has('gender'))
                        <span class="help-block">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                    @endif
                    <li>
                        <input type="radio" class="input-radio" name="gender" id="radio1" value="laki-laki">
                    <label for="radio1">Laki-Laki</label>
                    </li>
                    <li>
                        <input type="radio" class="input-radio" name="gender" id="radio2" value="perempuan">
                    <label for="radio2">Perempuan</label>
                    </li>
                </li>

                <li>
                  <label for="no_hp">Nomor HP </label>
                    <input id="no_hp" type="number" class="form-control" name="no_hp" value="{{ old('no_hp') }}" placeholder="Nomor HP yang Aktif">
                    @if ($errors->has('no_hp'))
                        <span class="help-block">
                            <strong>{{ $errors->first('no_hp') }}</strong>
                        </span>
                    @endif
                </li>

                <li>
                  <label for="kota">Kota </label>
                    <input id="kota" type="text" class="form-control" name="kota" value="{{ old('kota') }}" placeholder="Kota Anda">
                    @if ($errors->has('kota'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kota') }}</strong>
                        </span>
                    @endif
                </li>

                <li>
                  <label for"tanggal_lahir">Tanggal Lahir <span class="required">*</span></label>
                    <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                    @if ($errors->has('tanggal_lahir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                        </span>
                    @endif
                </li>

                <li>
                  <label for="alamat">Alamat Lengkap <span class="required">*</span></label>
                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap" rows="4" value="{{ old('alamat') }}"></textarea>
                    @if ($errors->has('alamat'))
                        <span class="help-block">
                          <strong>{{ $errors->first('alamat') }}</strong>
                        </span>
                    @endif
                </li>

                <li>
                  <label for="avatar">Foto Profil (Max:3MB) <span class="required">*</span></label>
                    <input id="avatar" type="file" class="form-control" name="avatar">
                    @if ($errors->has('avatar'))
                        <span class="help-block">
                            <strong>{{ $errors->first('avatar') }}</strong>
                        </span>
                    @endif
                </li>

              </ul>
              <p class="required">* Optional</p>
            <button type="submit" class="button create-account">
                <span>Buat Akun Baru</span>
            </button>
          </div>
        </div>
        </form>
      </div>
    </fieldset>
  </div>
</div>
</section>

@endsection