@extends('layout')

@section('content')
<h2>Edit User</h2>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama:</label>
    <input type="text" name="name" value="{{ $user->name }}" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $user->email }}" required><br><br>

    <label>Password (isi jika ingin ganti):</label>
    <input type="password" name="password"><br><br>

    <button type="submit">Update</button>
</form>
@endsection
