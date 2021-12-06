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
            <div class="card-body" id="statusDetail">
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
                    <div class="col-lg-12 mt-2">
                        <label>Analisis Kasus</label>
                        <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-lg-6">
                        <label>Scan Surat Tanggapan</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label>Bukti Pengiriman/Tanda Terimanya</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label>Status</label>
                        <select name="" id="" class="form-control" v-model="status">
                            <option value="SELESAI">Kasus selesai penggantian</option>
                            <option value="DAMAI">Perdamaian</option>
                            <option value="EXPIRED">Lewat >3 Bulan</option>
                        </select>
                    </div>
                    <template v-if="status == 'SELESAI'">
                        <div class="col-md-6">
                        <label>Surat Tanggapan Penerimaan (apabila ada)</label>
                        <input
                            type="file"
                            class="form-control"
                            name=""
                            v-model="surat"
                        />
                        <label>Laporan Penyelesaian Kasus</label>
                        <input
                            type="file"
                            class="form-control"
                            name=""
                            v-model="laporan"
                        />
                        <label>Bukti Pembayaran</label>
                        <input
                            type="file"
                            class="form-control"
                            name=""
                            v-model="bukti"
                        />
                        </div>
                        </div>
                        <div class="col-md-2">
                        <button
                            type="submit"
                            class="btn btn-success btn-block mt-4"
                        >
                            Update
                        </button>
                        </div>
                    </template>
                    <template v-if="status == 'DAMAI'">
                        <div class="col-md-6">
                        <label>Surat Kesepakatan Perdamaian</label>
                        <input
                            type="file"
                            class="form-control"
                            name=""
                            v-model="kesepakatan"
                        />
                        <label>Laporan Penyelesaian Kasus</label>
                        <input
                            type="file"
                            class="form-control"
                            name=""
                            v-model="penyelesaian"
                        />
                        <label>Bukti Pembayaran</label>
                        <input
                            type="file"
                            class="form-control"
                            name=""
                            v-model="bukti"
                        />
                        </div>
                        <div class="col-md-2">
                        <button
                            type="submit"
                            class="btn btn-success btn-block mt-4"
                        >
                            Update
                        </button>
                        </div>
                    </template>
                    <template v-if="status == 'EXPIRED'">
                        <div class="col-md-6">
                        <label>Alasan kasus ditutup sementara</label>
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            v-model="alasan"

                        />
                        </div>
                        <div class="col-md-2">
                        <button
                            type="submit"
                            class="btn btn-success btn-block mt-4"
                        >
                            Selesai
                        </button>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script>
    var statusDetail = new Vue({
    el: "#statusDetail",
    data: {
        status: "SELESAI",
    },
    });
</script>

@endpush
