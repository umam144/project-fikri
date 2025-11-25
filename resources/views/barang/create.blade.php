@extends('layouts.app')

@section('title', 'Tambah Data Barang')

@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h2 class="card-title text-center">Tambah Data</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('barang.update', $barang->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <label for="inputNamaBarang" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" id="inputNamaBarang"
                        value="{{ old('nama_barang', $barang->nama_barang) }}" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="inputKodeInventaris" class="form-label">Kode Inventaris</label>
                    <input type="text" name="kode_inventaris" id="inputKodeInventaris"
                        value="{{ old('kode_inventaris', $barang->kode_inventaris) }}" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="inputKategoriID" class="form-label">Kategori ID</label>
                    <input type="text" name="kategori_id" id="inputKategoriID"
                        value="{{ old('kategori_id', $barang->kategori_id) }}" class="form-control">
                </div>
                 <div class="mb-2">
                    <label for="inputRuanganID" class="form-label">Ruangan ID</label>
                    <input type="text" name="ruangan_id" id="inputRuanganiID"
                        value="{{ old('ruangan_id', $barang->ruangan_id) }}" class="form-control">
                </div>
                <div class="mb-2">
                <label for="inputTahunPengadaan" class="form-label">Tahun Pengadaan</label>
                    <input type="text" name="tahun_pengadaan" id="inputTahunPengadaan"
                        value="{{ old('tahun_pengadaan', $barang->tahun_pengadaan }}" class="form-control">
                </div>
                 <div class="mb-2">
                    <label for="inputSumberDana" class="form-label">Sumber Dana</label>
                    <input type="text" name="sumber_dana" id="inputSumberDana"
                        value="{{ old('sumber_dana', $barang->sumber_dana) }}" class="form-control">
                </div>
                 <div class="mb-2">
                    <label for="inputKondisi" class="form-label">Kondisi</label>
                    <input type="text" name="kondisi" id="inputKondisi"
                        value="{{ old('kondisi', $barang->kondisi) }}" class="form-control">
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-success me-2">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary me-2">Batal</button>
                </div>
            </form>
        </div>
    </div>
@endsection