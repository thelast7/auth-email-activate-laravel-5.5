<div class="card-body">
    <div class="form-group">
        <label for="username">Username</label>
        {!! Form::text('username', null, ['class' => $errors->has('username') ? 'form-control is-invalid' : 'form-control', 'required', 'autofocus']) !!}
        @if ($errors->has('username'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="name">Nama Lengkap</label>
        {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
        @if ($errors->has('name'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        {!! Form::email('email', null, ['class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        {!! Form::password('password', ['class' => $errors->has('password') ? 'form-control is-invalid' : 'form-control']) !!}
        @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="gender">Jenis Kelamin</label>
        {!! Form::select('gender', ['laki-laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'], null, ['class' => $errors->has('gender') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
        @if ($errors->has('gender'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('gender') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="no_hp">No HP</label>
        {!! Form::text('no_hp', null, ['class' => $errors->has('no_hp') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
        @if ($errors->has('no_hp'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('no_hp') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="kota">Kota</label>
        {!! Form::text('kota', null, ['class' => $errors->has('kota') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
        @if ($errors->has('kota'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('kota') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        {!! Form::select('role', ['admin' => 'Admin', 'author' => 'Author', 'penjual' => 'Penjual', 'user' => 'User'], null, ['class' => $errors->has('role') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
        @if ($errors->has('role'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('role') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group">
        <label for="avatar">Foto Profil</label>
        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfm" data-input="avatar" data-preview="holder" class="btn btn-primary text-white">
                    <i class="fa fa-cloud-upload"></i> Pilih
                </a>
            </span>
            {!! Form::text('avatar', null, ['id' => 'avatar', 'class' => $errors->has('avatar') ? 'form-control is-invalid' : 'form-control', 'readonly']) !!}
            @if ($errors->has('avatar'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('avatar') }}</strong>
                </span>
            @endif
        </div>
        <!-- if -->
            <!-- <img src="#" id="holder" style="margin-top:15px;max-height:254px;max-width: 152px;"> -->
        <!-- endif -->
        <img id="holder" style="margin-top:15px;max-height:254px;max-width: 152px;">
    </div>
    </div>
    <div class="card-footer bg-transparent">
    <button class="btn btn-primary" type="submit">
        Submit
    </button>
</div>

@section('assets-bottom')
    <script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#lfm').filemanager('image');
        });
    </script>
@endsection
