@extends('backend.app')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Resep</a>
            </li>
            <li class="breadcrumb-item active">Tambahkan Resep Baru</li>
        </ol>
        {!! Form::open(['route' => 'backend.recipes.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            @include('backend.recipes._form')
        {!! Form::close() !!}
    </div>
@endsection