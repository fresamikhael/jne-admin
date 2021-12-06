@extends('layouts.app')

@section('title')
    List Litigation
@endsection

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Perizinan Baru</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html" style="text-decoration: none">Admin</a></li>
            <li class="breadcrumb-item active">Perizinan Baru</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                List Perizinan
            </div>
            <div class="card-body">
                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                    <thead>
                        <tr>
                            <th>ID Permit</th>
                            <th>Tipe Perizinan</th>
                            <th>Lokasi</th>
                            <th>Status Approval</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'id_permit', name: 'id_permit' },
                { data: 'tipe_perizinan', name: 'tipe_perizinan' },
                { data: 'lokasi', name: 'lokasi' },
                { data: 'approval_status', name: 'approval_status' },
                { data: 'complete_status', name: 'complete_status' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%'
                },
            ]
        });
    </script>
@endpush
