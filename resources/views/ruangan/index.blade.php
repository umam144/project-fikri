@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Data Ruangan</h2>

    <a href="{{ route('ruangan.create') }}" class="btn btn-primary mb-3">Tambah Ruangan</a>

    <table class="table table-bordered">
        <thead class="bg-light">
            <tr>
                <th>No</th>
                <th>Nama Ruangan</th>
                <th>Kode Ruangan</th>
                <th>Bangunan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ruangan as $r)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $r->nama_ruangan }}</td>
                <td>{{ $r->kode_ruangan }}</td>
                <td>{{ $r->bangunan->nama_bangunan ?? '-' }}</td>
                <td>
                    <a href="{{ route('ruangan.edit', $r->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('ruangan.destroy', $r->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Hapus ruangan ini?')" class="btn btn-danger btn-sm">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
