@extends('backend.app')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Category</a>
            </li>
            <li class="breadcrumb-item active">Ubah</li>
        </ol>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white bg-primary">
                        Ubah Category
                    </div>
                    {!! Form::model($category, ['route' => ['backend.categories.update', $category->id], 'method' => 'PUT']) !!}
                        @include('backend.categories._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection