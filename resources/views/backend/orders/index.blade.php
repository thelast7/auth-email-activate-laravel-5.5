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
                <a href="#">Orders</a>
            </li>
            <li class="breadcrumb-item active">Tabel</li>
        </ol>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-list"></i> Orders
                <a href="{{ route('backend.orders.create') }}" class="btn btn-sm btn-primary">Tambahkan</a>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID_Order</th>
                        <th>Pembeli</th>
                        <th>Nama Penerima</th>
                        <th>No HP</th>
                        <th>Kota</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID_Order</th>
                        <th>Pembeli</th>
                        <th>Nama Penerima</th>
                        <th>No HP</th>
                        <th>Kota</th>
                        <th>Status</th>
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
            ajax: "{{ route('api.datatable.orders') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'namee', name: 'namee'},
                {data: 'pembeli', name: 'pembeli'},
                {data: 'no_hpp', name: 'no_hpp'},
                {data: 'kotaa', name: 'kotaa'},
                {data: 'statuss', name: 'statuss'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });
</script>
@endsection