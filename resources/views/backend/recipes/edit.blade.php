@extends('backend.app')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Resep</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
        {!! Form::model($recipe, ['route' => ['backend.recipes.update', $recipe->id], 'method' => 'PUT']) !!}
            @include('backend.recipes._form')
        {!! Form::close() !!}
    </div>
@endsection