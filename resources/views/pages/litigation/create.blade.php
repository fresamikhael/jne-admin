@extends('layouts.app')

@section('title')
    List Litigation
@endsection

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Detail Dokumen</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                List Litigation
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <label>File Somasi</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label>Dokumen Lainnya</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button class="btn btn-primary">
                        Input
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection