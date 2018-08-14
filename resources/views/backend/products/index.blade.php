@extends('backend.app')

@section('assets-top')
    <!-- Page level plugin CSS-->
    <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- Responsive datatable examples -->
    <link href="{{ asset('backend/vendor/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Products</a>
            </li>
            <li class="breadcrumb-item active">Tabel</li>
        </ol>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-list"></i> Products
                <a href="{{ route('backend.products.create') }}" class="btn btn-sm btn-primary">Tambahkan</a>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Product</th>
                        <th>Quantity</th>
                        <th>Harga</th>
                        <th>Category</th>
                        <th>Penjual</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nama Product</th>
                        <th>Quantity</th>
                        <th>Harga</th>
                        <th>Category</th>
                        <th>Penjual</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('assets-bottom')
<!-- Page level plugin JavaScript-->
<script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('backend/vendor/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/vendor/datatables/responsive.bootstrap4.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $("#dataTable").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.datatable.products') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'quantity', name: 'quantity'},
                {data: 'price', name: 'price'},
                {data: 'category', name: 'category'},
                {data: 'penjual', name: 'penjual'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });
</script>
@endsection