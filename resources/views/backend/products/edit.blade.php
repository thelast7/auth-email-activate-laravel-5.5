@extends('backend.app')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Product</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
        {!! Form::model($product, ['route' => ['backend.products.update', $product->id], 'method' => 'PUT']) !!}
            @include('backend.products._form')
        {!! Form::close() !!}
    </div>
@endsection