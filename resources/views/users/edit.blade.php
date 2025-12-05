@extends('layouts.app')

@section('title', 'Edit User')

@push('styles')
<style>
    .card {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        border: none !important;
    }

    .card-header {
        background: linear-gradient(135deg, #4f46e5, #6366f1);
        color: white;
        padding: 18px;
        border-radius: 12px 12px 0 0;
        text-align: center;
    }

    .form-label {
        font-weight: 600;
        color: #4f46e5;
    }

    .form-control {
        border-radius: 8px;
        border: 1px solid #c7d2fe;
        padding: 10px 12px;
    }

    .btn-success {
        background-color: #4f46e5 !important;
        border-color: #4f46e5 !important;
        border-radius: 8px;
        padding: 8px 18px;
        font-weight: 500;
    }

    .btn-outline-secondary {
        border-radius: 8px;
        padding: 8px 18px;
    }
</style>
@endpush

@section('content')
<div class="card m-4">
    <div class="card-header">
        <h2 class="card-title">Edit User</h2>
    </div>

    <div class="card-body p-4">

        <form action="{{ route('users.update', $user->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Password (isi jika ingin mengganti)</label>
                <input type="password" name="password" class="form-control">
            </div>

            <button class="btn btn-success">Update</button>
            <button type="reset" class="btn btn-outline-secondary">Batal</button>

        </form>

    </div>
</div>
@endsection
