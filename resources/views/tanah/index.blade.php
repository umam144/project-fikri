@extends('layouts.app')

@section('title', 'Data Tanah')

@push('styles')
<style>
    /* CARD */
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

    /* CARD BODY */
    .card-body {
        padding: 0; /* tabel full width */
    }

    /* Tombol Tambah container */
    .col.my-2 {
        width: 100%;
        display: flex;
        justify-content: flex-start;
        padding: 16px; /* jarak tombol dari pinggir */
        margin-top: 20px; /* jarak dari header */
    }

    .btn-primary {
        background-color: #4f46e5;
        border-color: #4f46e5;
        color: #fff;
        padding: 8px 16px;
        border-radius: 8px;
        font-weight: 500;
    }

    .btn-primary:hover {
        background-color: #3730a3;
        border-color: #3730a3;
    }

    /* TABLE FULL WIDTH */
    .table-responsive {
        overflow-x: auto;
        margin: 0;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 10px;
        overflow: hidden;
        background: white;
        border: 1px solid #e5e7eb;
    }

    thead tr {
        background: #eef2ff !important;
    }

    thead th {
        color: #4f46e5;
        font-weight: 600;
        font-size: 15px;
        padding: 12px;
        border-bottom: 2px solid #c7d2fe;
        text-align: center;
    }

    tbody td,
    tbody th {
        padding: 12px;
        vertical-align: middle;
    }

    tbody tr:hover {
        background-color: #f9fafb;
    }

    /* BUTTONS DI TABLE */
    .table td.d-flex {
        display: flex;
        justify-content: space-between; /* Edit kiri, Hapus kanan */
        align-items: center;
        padding: 8px 12px;
    }

    .table .btn-success,
    .table .btn-outline-danger {
        background-color: #4f46e5;
        border-color: #4f46e5;
        color: #fff;
        padding: 6px 14px;
        border-radius: 6px;
        font-weight: 500;
    }

    .table .btn-success:hover,
    .table .btn-outline-danger:hover {
        background-color: #3730a3;
        border-color: #3730a3;
    }

</style>
@endpush

@section('content')
<div class="card m-4">
    <div class="card-header">
        <h2 class="card-title text-center">Data Tanah</h2>
    </div>

    <div class="card-body row">

        <!-- Tombol Tambah -->
        <div class="col my-2">
            <a href="{{ route('tanah.create') }}" class="btn btn-primary">Tambah Data Tanah</a>
        </div>

        <!-- TABEL FULL WIDTH -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Tanah</th>
                        <th>Kode Tanah</th>
                        <th>Luas (m<sup>2</sup>)</th>
                        <th>No Sertifikat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                        <td>{{ $item->nama_tanah }}</td>
                        <td>{{ $item->kode_tanah }}</td>
                        <td>{{ $item->luas }}</td>
                        <td>{{ $item->no_sertifikat }}</td>
                        <td class="d-flex">
                            <a href="{{ route('tanah.edit', $item->id) }}" class="btn btn-success">Edit</a>
                            <form action="{{ route('tanah.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
