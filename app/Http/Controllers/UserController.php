<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // TAMPILKAN SEMUA USER
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // FORM TAMBAH
    public function create()
    {
        return view('users.create');
    }

    // SIMPAN USER BARU
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:4'
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan');
    }

    // FORM EDIT
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // UPDATE USER
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name'  => 'required',
            'email' => 'required|unique:users,email,' . $user->id,
        ]);

        // Jika password diisi, update
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->name  = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect()->route('users.index')->with('success', 'User berhasil diperbarui');
    }

    // HAPUS USER
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('users.index')->with('success', 'User berhasil dihapus');
    }
}
