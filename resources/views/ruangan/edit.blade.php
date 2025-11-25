@extends('layouts.app')

@section('content')
<div class="container">

    <h2 class="mb-4">Edit Ruangan</h2>

    <form action="{{ route('ruangan.update', $ruangan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Ruangan</label>
            <input type="text" name="nama_ruangan" value="{{ $ruangan->nama_ruangan }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kode Ruangan</label>
            <input type="text" name="kode_ruangan" value="{{ $ruangan->kode_ruangan }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Bangunan</label>
            <select name="bangunan_id" class="form-control" required>
                @foreach ($bangunan as $b)
                    <option value="{{ $b->id }}" {{ $ruangan->bangunan_id == $b->id ? 'selected' : '' }}>
                        {{ $b->nama_bangunan }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('ruangan.index') }}" class="btn btn-secondary">Kembali</a>

    </form>

</div>
@endsection
