@extends('layouts.app')

@section('title', 'Tambah Data Bangunan')

@section('content')
<div class="card m-4">
    <div class="card-header">
        <h2 class="card-title text-center">Tambah Data</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('bangunan.store') }}" method="post">
            @csrf

            <div class="mb-2">
                <label for="inputNamaBangunan" class="form-label">Nama Bangunan</label>
                <input type="text" name="nama_bangunan" id="inputNamaBangunan"
                       value="{{ old('nama_bangunan') }}" 
                       class="form-control">
            </div>

            <div class="mb-2">
                <label for="inputKodeBangunan" class="form-label">Kode Bangunan</label>
                <input type="text" name="kode_bangunan" id="inputKodeBangunan"
                       value="{{ old('kode_bangunan') }}" 
                       class="form-control">
            </div>

            <div class="mb-2">
                <label for="inputTanahID" class="form-label">Tanah ID</label>
                <select name="tanah_id" id="inputTanahID" class="form-control">
                    <option value="">-- Pilih Tanah --</option>
                    @foreach ($tanahs as $tanah)
                        <option value="{{ $tanah->id }}"
                            {{ old('tanah_id') == $tanah->id ? 'selected' : '' }}>
                            {{ $tanah->id }} - {{ $tanah->nama_tanah }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-2">
                <button type="submit" class="btn btn-success me-2">Submit</button>
                <button type="reset" class="btn btn-outline-secondary me-2">Batal</button>
            </div>

        </form>
    </div>
</div>
@endsection
