@extends('layouts.app')

@section('content')
<div class="container">

    <h2 class="mb-4">Tambah Ruangan</h2>

    <form action="{{ route('ruangan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Ruangan</label>
            <input type="text" name="nama_ruangan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kode Ruangan</label>
            <input type="text" name="kode_ruangan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Bangunan</label>
            <select name="bangunan_id" class="form-control" required>
                <option value="">-- Pilih Bangunan --</option>
                @foreach ($bangunan as $b)
                    <option value="{{ $b->id }}">{{ $b->nama_bangunan }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Submit</button>
        <a href="{{ route('ruangan.index') }}" class="btn btn-secondary">Batal</a>

    </form>

</div>
@endsection
