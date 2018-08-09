@extends('layouts.master')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>dashboard admin</h1></div>

                <div class="panel-body">
                    <h3>Tambah Category <a class="btn btn-primary pull-right" href="{{ route('categories.create') }}">Tambah</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    {{-- <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet"> --}}
