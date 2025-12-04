@extends('layouts.app')

@section('content')

<style>
    .users-container {
        max-width: 900px;
        margin: 30px auto;
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .users-container h1 {
        text-align: center;
        margin-bottom: 25px;
        font-size: 26px;
        letter-spacing: 1px;
    }

    table.users-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 16px;
    }

    table.users-table th {
        background: #4A90E2;
        color: white;
        padding: 12px;
        text-align: left;
        font-weight: bold;
    }

    table.users-table td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
    }

    table.users-table tr:hover {
        background: #f5f5f5;
    }
</style>

<div class="users-container">
    <h1>Daftar Users</h1>

    <table class="users-table">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>

        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
