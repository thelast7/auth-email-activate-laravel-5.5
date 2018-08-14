@extends('backend.app')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Products</a>
            </li>
            <li class="breadcrumb-item active">Tambahkan Product Baru</li>
        </ol>
        {!! Form::open(['route' => 'backend.products.store', 'method' => 'POST']) !!}
            @include('backend.products._form')
        {!! Form::close() !!}
    </div>
@endsection