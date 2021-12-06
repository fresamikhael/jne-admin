@extends('layouts.app')

@section('title')
    List Litigation
@endsection

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Update Dokumen</h1>
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
                    <div class="col-lg-6">
                        <label>Form Kasus Sengketa Konsumen</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label>Kronologis Pengiriman Operasional</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label>Kronologis Penanganan CS</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label>Bukti POD</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label>Bukti Tanda Terima</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label>Bukti Dokumentasi (Surat Menyurat, Recording Telepon, MOM)</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label>Dokumen pendukung lainnya</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label>Nominal Penawaran ganti kerugian</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="col-lg-12">
                        <label>Keterangan Kekurangan</label>
                        <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button class="btn btn-danger me-4">
                        Revisi
                    </button>
                    <button class="btn btn-primary">
                        Proses
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
