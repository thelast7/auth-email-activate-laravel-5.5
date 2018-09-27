@extends('layouts.master')

@section('content')

<section class="main-container col1-layout">
<div class="main container">
  <div class="account-login">
    <div class="page-title">
      <h2>Buat akunmu</h2>
    </div>

    <fieldset class="col2-set">
      
      <div class="col-1 new-users"><strong>Daftar Akun Baru</strong>

        <form class="form-horizontal" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="content">
          <div class="buttons-set">
              <ul class="form-list">

                <li>
                  <label for="username">Username </label>
                    {{ Form::text('username', null, ['placeholder' => 'Username Anda', 'class' => 'form-control', 'value' => old('username'), 'required autofocus' ]) }}
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </li>

                <li>
                  <label for="name">Nama </label>
                    {{ Form::text('name', null, ['placeholder' => 'Nama Anda', 'class' => 'form-control', 'value' => old('name') ]) }}
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </li>

                <li>
                  <label for="email">Email </label>
                    {{ Form::email('email', null, ['placeholder' => 'Email Anda', 'class' => 'form-control', 'value' => old('email') ]) }}
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
                    {{ Form::number('no_hp', null, ['placeholder' => 'Nomor Anda', 'class' => 'form-control', 'value' => old('no_hp') ]) }}
                    @if ($errors->has('no_hp'))
                        <span class="help-block">
                            <strong>{{ $errors->first('no_hp') }}</strong>
                        </span>
                    @endif
                </li>

                <li>
                  <label for="ktp">KTP </label>
                    {{ Form::number('ktp', null, ['placeholder' => 'KTP Anda', 'class' => 'form-control', 'value' => old('ktp') ]) }}
                    @if ($errors->has('ktp'))
                        <span class="help-block">
                            <strong>{{ $errors->first('ktp') }}</strong>
                        </span>
                    @endif
                </li>

                <li>
                  <label for="kota">Kota </label>
                    {{ Form::select('kota', ['Ambon' => 'Ambon', 'Balikpapan' => 'Balikpapan', 'Banda Aceh' => 'Banda Aceh', 'Bandar Lampung' => 'Bandar Lampung', 'Banjar' => 'Banjar', 'Banjarbaru' => 'Banjarbaru', 'Banjarmasin' => 'Banjarmasin', 'Batam' => 'Batam', 'Batu' => 'Batu', 'Bau-Bau' => 'Bau-Bau', 'Bekasi' => 'Bekasi', 'Bekasi' => 'Bekasi', 'Bima' => 'Bima', 'Binjai' => 'Binjai', 'Bitung' => 'Bitung', 'Blitar' => 'Blitar', 'Bogor' => 'Bogor', 'Bontang' => 'Bontang', 'Bukit Tinggi' => 'Bukit Tinggi', 'Cilegon' => 'Cilegon', 'Cimahi' => 'Cimahi', 'Cirebon' => 'Cirebon', 'Denpasar' => 'Denpasar', 'Depok' => 'Depok', 'Dumai' => 'Dumai', 'Gorontalo' => 'Gorontalo', 'Gunungsitoli' => 'Gunungsitoli', 'Jakarta' => 'Jakarta', 'Jambi' => 'Jambi', 'Jayapura' => 'Jayapura', 'Kediri' => 'Kediri', 'Kotamubagu' => 'Kotamubagu', 'Kupang<' => 'Kupang', 'Langsa' => 'Langsa', 'Lhokseumawe' => 'Lhokseumawe', 'Lubuklinggau' => 'Lubuklinggau', 'Madiun' => 'Madiun', 'Magelang' => 'Magelang', 'Makassar' => 'Makassar', 'Malang' => 'Malang', 'Manado' => 'Manado', 'Mataram' => 'Mataram', 'Medan' => 'Medan', 'Metro' => 'Metro', 'Mojokerto' => 'Mojokerto', 'Padang' => 'Padang', 'Pagaralam' => 'Pagaralam', 'Palangkaraya' => 'Palangkaraya', 'Palembang' => 'Palembang', 'Palopo' => 'Palopo', 'Palu' => 'Palu', 'Pangkal Pinang' => 'Pangkal Pinang', 'Parepare' => 'Parepare', 'Pariaman' => 'Pariaman', 'Pasuruan' => 'Pasuruan', 'Payakumbuh' => 'Payakumbuh', 'Pekalongan' => 'Pekalongan', 'Pekanbaru' => 'Pekanbaru', 'Pematangsiantar' => 'Pematangsiantar', 'Pontianak' => 'Pontianak', 'Prabumulih' => 'Prabumulih', 'Probolinggo' => 'Probolinggo', 'Sabang' => 'Sabang', 'Salatiga' => 'Salatiga', 'Sawahlunto' => 'Sawahlunto', 'Semarang' => 'Semarang', 'Serang' => 'Serang', 'Sibloga' => 'Sibloga', 'Singkawang' => 'Singkawang','Solok' => 'Solok', 'Subulussalam' => 'Subulussalam', 'Sukabumi' => 'Sukabumi', 'Surabaya' => 'Surabaya', 'Surakarta' => 'Surakarta', 'Tangerang' => 'Tangerang', 'Tanjungpinang' => 'Tanjungpinang', 'Tanjungbalai' => 'Tanjungbalai','Tarakan' => 'Tarakan', 'Tasikmalaya' => 'Tasikmalaya', 'Tebing Tinggi' => 'Tebing Tinggi', 'Tegal' => 'Tegal', 'Ternate' => 'Ternate', 'Tidore' => 'Tidore', 'Tual' => 'Tual', 'Yogyakarta' => 'Yogyakarta'], null, ['placeholder' => 'Pilih Kota', 'class' => 'form-control']) }}
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
                    {{ Form::textarea('alamat', null, ['placeholder' => 'Alamat Anda', 'class' => 'form-control', 'rows' => '4', 'value' => old('alamat') ]) }}
                    @if ($errors->has('alamat'))
                        <span class="help-block">
                          <strong>{{ $errors->first('alamat') }}</strong>
                        </span>
                    @endif
                </li>

                <li>
                  <label for="avatar">Foto Profil (Max:3MB) <span class="required">*</span></label>
                    {{ Form::file('avatar', [ 'class' => 'form-control']) }}
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