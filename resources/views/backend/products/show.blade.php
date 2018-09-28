@extends('backend.app')

@section('content')
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="#">Product</a>
        </li>
        <li class="breadcrumb-item active">Detail</li>
    </ol>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Product Detail : {{ $product->title }}
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                      <tr>
                          <th>ID</th>
                          <td>{{ $product->id }}</td>
                      </tr>
                      <tr>
                          <th>Penjual</th>
                          <td>{{ $product->user->name }}</td>
                      </tr>
                      <tr>
                          <th>Nama Product</th>
                          <td>{{ $product->name }}</td>
                      </tr>
                      <tr>
                          <th>Harga</th>
                          <td>{{ $product->price }}</td>
                      </tr>
                      <tr>
                          <th>Quantity</th>
                          <td>{{ $product->quantity }}</td>
                      </tr>
                      <tr>
                          <th>Deskripsi</th>
                          <td>{!! $product->description !!}</td>
                      </tr>
                      <tr>
                          <th>Category</th>
                          <td>{{ $product->category->name }}</td>
                      </tr>
                      <tr>
                          <th>Cover</th>
                          <td><img src="{{ $product->getImage() }}" alt="Cover" height="150" width="150"></td>
                      </tr>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection