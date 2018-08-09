@extends('layouts.master')

@section('content')
<br>
        <div class="container">
            <form action="{{ route('categories.store') }}" method="post" class="form">
                    {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="categories">Nama Category </label>
                        <input type="text" name="categories" id="categories" placeholder="Category Barang" class="form-control" value="{{ old('categories') }}">
                    </div>
                    <div class="form-group">
                        <label for="status">Status </label>
                        <select name="status" id="status" class="form-control">
                            <option value="false">Tidak Aktif</option>
                            <option value="true">Aktif</option>
                        </select>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="form-group">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary">Buat</button>
                        <a href="#" class="btn btn-default">Batalkan</a>
                    </div>
                </div>
            </form>
        </div>
@endsection