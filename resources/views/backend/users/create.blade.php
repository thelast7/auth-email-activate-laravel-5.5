@extends('backend.app')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Users</a>
          </li>
          <li class="breadcrumb-item active">Tambah</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header text-white bg-primary">
                Tambah User Baru
              </div>
              {!! Form::open(['route' => 'backend.users.store', 'method' => 'POST']) !!}
                @include('backend.users._form')
              {!! Form::close() !!}
            </div>
          </div>
        </div>
    </div>
@endsection
