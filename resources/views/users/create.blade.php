@extends('layout')

@section('content')
<h2>Tambah User</h2>

<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <label>Nama:</label>
    <input type="text" name="name" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <label>Password:</label>
    <input type="password" name="password" required><br><br>

    <button type="submit">Simpan</button>
</form>
@endsection
