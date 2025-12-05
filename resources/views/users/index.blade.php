@extends('layouts.app')

@section('title', 'Data Users')

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
        padding: 0;
    }

    /* Tombol Tambah */
    .users-add-container {
        padding: 16px;
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

    /* TABLE */
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

</style>
@endpush

@section('content')
<div class="card m-4">
    <div class="card-header">
        <h2 class="card-title">Daftar Users</h2>
    </div>

    <div class="card-body">
        
        <div class="users-add-container">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah User</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class="text-center">{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>

                        <td class="text-center">
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success btn-sm">Edit</a>

                            <form action="{{ route('users.destroy', $user->id) }}" method="post" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm">Hapus</button>
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
