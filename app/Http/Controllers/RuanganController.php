<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\Bangunan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index()
    {
        $ruangan = Ruangan::with('bangunan')->get();
        return view('ruangan.index', compact('ruangan'));
    }

    public function create()
    {
        $bangunan = Bangunan::all();
        return view('ruangan.create', compact('bangunan'));
    }

    public function store(Request $request)
    {
        Ruangan::create($request->all());
        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $bangunan = Bangunan::all();

        return view('ruangan.edit', compact('ruangan', 'bangunan'));
    }

    public function update(Request $request, $id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->update($request->all());

        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil diperbarui');
    }

    public function destroy($id)
    {
        Ruangan::destroy($id);
        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil dihapus');
    }
}
