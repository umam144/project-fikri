@extends('layouts.app')

@section('title', 'Edit Data Barang')

@push('styles')
<style>
    /* ===== CARD ===== */
    .card {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        border: none !important;
    }

    .card-header {
        background: linear-gradient(135deg, #4f46e5, #6366f1);
        color: white;
        padding: 18px;
        border-top-left-radius: 12px !important;
        border-top-right-radius: 12px !important;
        text-align: center;
    }

    .card-title {
        font-size: 22px;
        font-weight: 600;
    }

    /* ===== CARD BODY ===== */
    .card-body {
        padding: 24px;
    }

    /* ===== LABEL ===== */
    .form-label {
        font-weight: 600;
        color: #4f46e5;
        margin-bottom: 6px;
    }

    /* ===== INPUT ===== */
    .form-control {
        border-radius: 8px;
        border: 1px solid #c7d2fe;
        padding: 10px 12px;
        font-size: 15px;
    }

    .form-control:focus {
        border-color: #4f46e5;
        box-shadow: 0 0 6px rgba(79, 70, 229, 0.3);
    }

    /* ===== BUTTON SUBMIT ===== */
    .btn-success {
        background-color: #4f46e5 !important;
        border-color: #4f46e5 !important;
        border-radius: 8px;
        padding: 8px 18px;
        font-weight: 500;
    }

    .btn-success:hover {
        background-color: #3730a3 !important;
        border-color: #3730a3 !important;
    }

    /* ===== BUTTON RESET ===== */
    .btn-outline-secondary {
        border-radius: 8px;
        padding: 8px 18px;
        color: #555;
        font-weight: 500;
        border-color: #c7d2fe;
    }

    .btn-outline-secondary:hover {
        background-color: #eef2ff;
    }

    /* ===== SPASI ===== */
    .mb-2 {
        margin-bottom: 16px !important;
    }
</style>
@endpush

@section('content')
<div class="card m-4">
    <div class="card-header">
        <h2 class="card-title text-center">Edit Data</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('barang.update', $barang->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-2">
                <label for="inputNamaBarang" class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang" id="inputNamaBarang"
                       value="{{ old('nama_barang', $barang->nama_barang) }}" 
                       class="form-control">
            </div>

            <div class="mb-2">
                <label for="inputKodeInventaris" class="form-label">Kode Inventaris</label>
                <input type="text" name="kode_inventaris" id="inputKodeInventaris"
                       value="{{ old('kode_inventaris', $barang->kode_inventaris) }}" 
                       class="form-control">
            </div>

            <div class="mb-2">
                <label for="inputKategoriID" class="form-label">Kategori ID</label>
                <input type="text" name="kategori_id" id="inputKategoriID"
                       value="{{ old('kategori_id', $barang->kategori_id) }}" 
                       class="form-control">
            </div>

            <div class="mb-2">
                <label for="inputRuanganID" class="form-label">Ruangan ID</label>
                <input type="text" name="ruangan_id" id="inputRuanganID"
                       value="{{ old('ruangan_id', $barang->ruangan_id) }}" 
                       class="form-control">
            </div>

            <div class="mb-2">
                <label for="inputTahunPengadaan" class="form-label">Tahun Pengadaan</label>
                <input type="text" name="tahun_pengadaan" id="inputTahunPengadaan"
                       value="{{ old('tahun_pengadaan', $barang->tahun_pengadaan) }}" 
                       class="form-control">
            </div>

            <div class="mb-2">
                <label for="inputSumberDana" class="form-label">Sumber Dana</label>
                <input type="text" name="sumber_dana" id="inputSumberDana"
                       value="{{ old('sumber_dana', $barang->sumber_dana) }}" 
                       class="form-control">
            </div>

            <div class="mb-2">
                <label for="inputKondisi" class="form-label">Kondisi</label>
                <input type="text" name="kondisi" id="inputKondisi"
                       value="{{ old('kondisi', $barang->kondisi) }}" 
                       class="form-control">
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-success me-2">Update</button>
                <button type="reset" class="btn btn-outline-secondary me-2">Batal</button>
            </div>

        </form>
    </div>
</div>
@endsection
