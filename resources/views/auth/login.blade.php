@extends('layouts.master')

@section('content')

<section class="main-container col1-layout">
<div class="main container">
  <div class="account-login">
    <div class="page-title">
      <h2>Akun</h2>
    </div>
    
    <fieldset class="col2-set">
      <legend>Akun</legend>
      <div class="col-1 new-users"><strong>Silahkan Log-in</strong>
        <form class="content" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
              <ul class="form-list">
                <li>
                  <label for="email">Masukan Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Anda" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </li>
                <li>
                  <label for="email">Masukan Password</label>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password Anda" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </li>
              </ul>
            <div class="buttons-set">
                <button type="submit" class="button login"><span>Login</span></button>
                <strong>Belum Punya Akun ? </strong><a class="btn-link" href="{{ route('register') }}">klik disini.</a>
                {{-- <a class="btn btn-link" href="{{ route('password.request') }}">Lupa Password Anda ?</a> --}}
            </div>
        </form>
      </div>
    </fieldset>
  </div>
</div>
</section>

@endsection