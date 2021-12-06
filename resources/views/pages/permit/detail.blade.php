@extends('layouts.app')

@section('title')
    List Litigation
@endsection

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Check Dokumen</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                List Litigation
            </div>
            <form method="POST" action="{{ route('permit-update', $item->id_permit) }}" class="mt-3" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <label>Tipe Perizinan</label>
                            <input type="hidden" class="form-control" name="id_permit" value="{{ $item->id_permit }}" readonly>
                            <input type="text" class="form-control" name="tipe_perizinan" value="{{ $item->tipe_perizinan }}" readonly>
                        </div>
                        <div class="col-lg-6">
                            <label>Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" value="{{ $item->lokasi }}" readonly>
                        </div>
                        <div class="col-lg-6">
                            <label>Spesifikasi</label>
                            <input type="text" class="form-control" name="spesifikasi" value="{{ $item->spesifikasi }}" readonly>
                        </div>
                        <div class="col-lg-4">
                            <label>Dokumen 1</label>
                            <input type="text" class="form-control" name="dokumen1" value="{{ $item->dokumen1 }}" readonly>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-primary mt-4 ms-4">Download</button>
                        </div>
                        <div class="col-lg-4">
                            <label>Dokumen 2</label>
                            <input type="text" class="form-control" name="dokumen2" value="{{ $item->dokumen2 }}" readonly>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-primary mt-4 ms-4">Download</button>
                        </div>
                        <div class="col-lg-4">
                            <label>Dokumen 3</label>
                            <input type="text" class="form-control" name="dokumen3" value="{{ $item->dokumen3 }}" readonly>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-primary mt-4 ms-4">Download</button>
                        </div>
                        <div class="col-lg-12">
                            <label>Alasan</label>
                            <textarea class="form-control" name="alasan" id="" readonly>{!! $item->alasan !!}</textarea>
                        </div>
                        <div class="col-lg-6">
                            <label>Kelengkapan Dokumen</label>
                            <select name="complete_status" class="form-control dropdown dropdown-toggle">
                                <option value="UNCOMPLETE">Belum Lengkap</option>
                                <option value="INPG">Lengkap</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
