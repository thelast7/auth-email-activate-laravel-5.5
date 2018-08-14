@extends('backend.app')

@section('content')
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Category</a>
        </li>
        <li class="breadcrumb-item active">Tambah</li>
    </ol>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Tambah Category Baru
                </div>
                {!! Form::open(['route' => 'backend.categories.store', 'method' => 'POST']) !!}
                    @include('backend.categories._form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection