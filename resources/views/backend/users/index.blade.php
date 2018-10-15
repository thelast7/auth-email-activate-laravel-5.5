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
            <a href="#">Users</a>
          </li>
          <li class="breadcrumb-item active">Tabel</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-list"></i> Users
            <a href="{{ route('backend.users.create') }}" class="btn btn-sm btn-primary">Tambah Baru</a>
          </div>
          <div class="card-body table-responsive">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kota</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                   <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kota</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  
                </tbody>
              </table>
            </div>
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
        $(document).ready(function(){
            $("#dataTable").DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('api.datatable.users') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    //{data: 'email', name: 'email'},
                    //{data: 'gender', name: 'gender'},
                    //{data: 'tanggal_lahir', name: 'tanggal_lahir'},
                    //{data: 'no_hp', name: 'no_hp'},
                    {data: 'kota', name: 'kota'},
                    //{data: 'alamat', name: 'alamat'},
                    //{data: 'cash', name: 'cash'},
                    // {data: 'avatar', name: 'avatar'},
                    {data: 'role', name: 'role'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            })
        });
    </script>
@endsection