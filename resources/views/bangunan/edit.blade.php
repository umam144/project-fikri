@extends('layouts.app')

@section('title', 'Edit Data Bangunan')

@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h2 class="card-title text-center">Edit Data</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('bangunan.update', $bangunan->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <label for="inputNamaBangunan" class="form-label">Nama Bangunan</label>
                    <input type="text" name="nama_bangunan" id="inputNamaBangunan"
                        value="{{ old('nama_bangunan', $bangunan->nama_bangunan) }}" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="inputKodeBangunan" class="form-label">Kode Bangunan</label>
                    <input type="text" name="kode_bangunan" id="inputKodeBangunan"
                        value="{{ old('kode_bangunan', $bangunan->kode_bangunan) }}" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="inputTanahID" class="form-label">Tanah ID</label>
                    <input type="text" name="luas" id="inputTanahID" value="{{ old('luas', $bangunan->tanah_id) }}"
                        class="form-control">
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-success me-2">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary me-2">Batal</button>
                </div>
            </form>
        </div>
    </div>
@endsection