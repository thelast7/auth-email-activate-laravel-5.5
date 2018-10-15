@extends('backend.app')

@section('content')
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="#">Resep</a>
        </li>
        <li class="breadcrumb-item active">Detail</li>
    </ol>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Resep Detail : {{ $recipe->name }}
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                      <tr>
                          <th>ID</th>
                          <td>{{ $recipe->id }}</td>
                      </tr>
                      <tr>
                          <th>Penulis</th>
                          <td>{{ $recipe->user->name }}</td>
                      </tr>
                      <tr>
                          <th>Nama Resep</th>
                          <td>{{ $recipe->name }}</td>
                      </tr>
                      <tr>
                          <th>Deskripsi</th>
                          <td>{!! $recipe->description !!}</td>
                      </tr>
                      <tr>
                          <th>Cover</th>
                          <td><img src="{{ $recipe->getImage() }}" alt="Cover" height="150" width="150"></td>
                      </tr>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection