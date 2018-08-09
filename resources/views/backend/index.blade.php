@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin</div>

                <div class="panel-body">
                    <h1>dashboard admin</h1>
                    <p><a class="btn btn-primary" href="{{ route('categories.create') }}">Tambah</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
